<?php
if (!defined('BASEPATH'))
    die();

class Venta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
         // checamos si existe una sesión activa           

        $this->load->model('defaultdata_model');
        $this->load->model('admin_model');
        $this->load->model('usuario_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('googlemaps');
        $this->load->library('cart');
        $this->load->helper('date');

        $CI = & get_instance();
        $CI->config->load("mercadopago", TRUE);
        $config = $CI->config->item('mercadopago');
        $this->load->library('Mercadopago', $config);
        $this->mercadopago->sandbox_mode(TRUE);


        if (!is_authorized(array(1, 2, 3), 5, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
            $this->session->set_flashdata('error', 'userNotAutorized');
            redirect('principal');
        }

    }

    //is_authorized($nivelesReq, $idPermiso, $nivelUsuario, $rolUsuario)


    public function index()
    {
        $data['SYS_metaTitle'] = '';
        $data['SYS_metaKeyWords'] = '';
        $data['SYS_metaDescription'] = '';
        $data['estados']     = $this->defaultdata_model->getEstados();
        $data['paises']      = $this->defaultdata_model->getPaises();
        $data['paquetes']    = $this->defaultdata_model->getPaquetes();
        $data['razas']       = $this->defaultdata_model->getRazas();
        $data['giros']       = $this->defaultdata_model->getGiros();
        
        $this->load->view('venta_view', $data);
    }

   

    
    


    function factura()
    {

        $data['response'] = "true";
        echo json_encode($data);
    }

    function pagos()
    {

    }

    function guardar_compra()
    {
        $this->db->trans_start();
        try{
            $usuario = $this->session->userdata('idUsuario');
            $carrito= $this->admin_model->getCarrito($usuario);
            $carritototal = $this->admin_model->getSingleItem('usuarioID', $usuario, 'carritototal');

            $compra = array();

            if($carritototal instanceof stdClass){
                $compra[0] = array (
                    'usuarioID' => $usuario,
                    'subtotal' => $carritototal->subtotal,
                    'idCuponAdquirido' => null,
                    'descuento' => $carritototal->descuento,
                    'total' => $carritototal->totalPrecio,
                    'fecha' => date('Y-m-d H:i:s'),
                    );
            }else{
                foreach ($carritototal as $value) {
            //Se asigna al indice cero por que solo debe ser un carrito de compra por usuario
                    $compra[0] = array (
                        'usuarioID' => $usuario,
                        'subtotal' => $value->subtotal,
                        'idCuponAdquirido' => null,
                        'descuento' => $value->descuento,
                        'total' => $value->totalPrecio,
                        'fecha' => date('Y-m-d H:i:s'),
                        );
                }
            }

            $compra_detalle = array();
            foreach ($carrito as $value) {
                $compra_detalle[] = array(
                    'compraID' => null,
                    'productoID' => $value->productoID,
                    'cantidad' => $value->cantidad,
                    'precio' => $value->precio,
                    'nombre' => $value->nombre,
                    'talla' => $value->talla,
                    'color' => $value->color,
                    );
            }

            $this->usuario_model->addCompra($compra, $compra_detalle);

            $this->usuario_model->deleteCarrito($usuario);

            $this->usuario_model->save_cupones($this->session->userdata('cuponusuario'));

            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                $this->session->set_flashdata('info', "<div class='alert alert-warning'>No se ha logrado la compra. Vuelva a intentarlo o contacte al administrador del sitio.</div>");
            } else {
                $this->db->trans_commit();
                $this->session->set_flashdata('info', '<div class="alert alert-success">La compra se realizo correctamente.</div>');

            }
        //TODO Debe de redirigir a las compras
            redirect('principal/tienda');
        }catch(Exception $n){
            $this->db->trans_rollback();
            $this->session->set_flashdata('info', "<div class='alert alert-warning'>No se ha logrado la compra. Vuelva a intentarlo o contacte al administrador del sitio.</div>");
        }
    }

    function anuncio(){
        $paqueteID = $this->input->post('paquete');
        $detallePaquete = $this->defaultdata_model->getPaquete($paqueteID);
        
        //SERVICIOS ADQUIRIDOS
        $data = array(
            'cantFotos' => $detallePaquete->cantFotos,
            'caracteres' => $detallePaquete->caracteres,
            'vigencia' => $detallePaquete->vigencia,
            'cupones' => $detallePaquete->cupones,
            'videos' => $detallePaquete->videos,
            'precio' => $detallePaquete->precio, 
            'detalleID' => $detallePaquete->detalleID,
            'paqueteID' => $detallePaquete->paqueteID,
            'idUsuario' => $this->session->userdata('idUsuario')
        );    
        $servicioID = $this->defaultdata_model->insertItem('serviciocontratado', $data);
       
        $cupones = $this->defaultdata_model->getCuponesPaquete($paqueteID);

        if($cupones != null){
            foreach ($cupones as $cupon) {
                $dataCupon = 
                array(
                    'descripcion' => $cupon->descripcion, 
                    'valor' =>   $cupon->valor,
                    'tipoCupon' =>  $cupon->tipoCupon,
                    'vigente' => 1,
                    'usado' => 0,
                    'servicioID' =>  $servicioID,
                    'detalleID' =>  $detallePaquete->detalleID,
                    'paqueteID' =>  $paqueteID,
                    'cuponDetalleID' =>  $cupon->cuponDetalleID,
                    'cuponID' =>   $cupon->cuponID
                );
                $idCuponAdquirido = $this->defaultdata_model->insertItem('cuponadquirido', $dataCupon);    
            }

        }

        //PUBLICACION      
        $fecha = date('Y-m-d');
        $dias = $this->input->post('vigencia_texto');
        $fechaCierre = strtotime ( '+'.$dias.' day' , strtotime($fecha)) ;
        $fechaCierre = date ( 'Y-m-j' , $fechaCierre );
        $dataPublicacion = array(
            'seccion' => $this->input->post('seccion'),
            'titulo' => $this->input->post('titulo'),
            'vigente' => 1, 
            'fechaCreacion' => date('Y-m-d'),
            'fechaVencimiento' => $fechaCierre,
            'numeroVisitas' => 0,
            'estadoID' => $this->input->post('estado'), 
            'genero' => $this->input->post('genero'),
            'razaID' => $this->input->post('raza'),
            'precio' => $this->input->post('precio'), 
            'descripcion' => $this->input->post('descripcion'),
            'muestraTelefono' => $this->input->post('mostrar_telefono'),
            'aprobada' => 0,
            'servicioID' => $servicioID,
            'detalleID' =>  $detallePaquete->detalleID,
            'paqueteID' => $paqueteID
        );

         $publicacionID = $this->defaultdata_model->insertItem('publicaciones', $dataPublicacion);
         redirect('principal/miPerfil');
         
    }
}