<?php

if (!defined('BASEPATH'))
    die();

class Venta extends CI_Controller {

    static $seccion = 2;

    public function __construct() {
        parent::__construct();
        // checamos si existe una sesión activa           

        $this->load->model('defaultdata_model');
        $this->load->model('admin_model');
        $this->load->model('venta_model');
        $this->load->model('usuario_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('googlemaps');
        $this->load->library('cart');
        $this->load->helper('date');
        $this->load->library("UUID", true);

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


    public function index() {
        $data['SYS_metaTitle'] = '';
        $data['SYS_metaKeyWords'] = '';
        $data['SYS_metaDescription'] = '';
        $data['estados'] = $this->defaultdata_model->getEstados();
        $data['paises'] = $this->defaultdata_model->getPaises();
        $data['paquetes'] = $this->defaultdata_model->getPaquetes();
        $data['razas'] = $this->defaultdata_model->getRazas();
        $data['giros'] = $this->defaultdata_model->getGiros();
        $data['publicaciones'] = $this->venta_model->getAnuncios(self::$seccion);
        $data['seccion'] = self::$seccion;

        $this->load->view('venta_view', $data);
    }

    function factura() {

        $data['response'] = "true";
        echo json_encode($data);
    }

    function pagos() {
        
    }

    function guardar_compra() {
        $this->db->trans_start();
        try {
            $usuario = $this->session->userdata('idUsuario');
            $carrito = $this->admin_model->getCarrito($usuario);
            $carritototal = $this->admin_model->getSingleItem('usuarioID', $usuario, 'carritototal');

            $compra = array();

            if ($carritototal instanceof stdClass) {
                $compra[0] = array(
                    'usuarioID' => $usuario,
                    'subtotal' => $carritototal->subtotal,
                    'idCuponAdquirido' => null,
                    'descuento' => $carritototal->descuento,
                    'total' => $carritototal->totalPrecio,
                    'fecha' => date('Y-m-d H:i:s'),
                );
            } else {
                foreach ($carritototal as $value) {
                    //Se asigna al indice cero por que solo debe ser un carrito de compra por usuario
                    $compra[0] = array(
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

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $this->session->set_flashdata('info', "<div class='alert alert-warning'>No se ha logrado la compra. Vuelva a intentarlo o contacte al administrador del sitio.</div>");
            } else {
                $this->db->trans_commit();
                $this->session->set_flashdata('info', '<div class="alert alert-success">La compra se realizo correctamente.</div>');
            }
            //TODO Debe de redirigir a las compras
            redirect('principal/tienda');
        } catch (Exception $n) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('info', "<div class='alert alert-warning'>No se ha logrado la compra. Vuelva a intentarlo o contacte al administrador del sitio.</div>");
        }
    }

    public function upload_file() {
        $config['upload_path'] = 'images/temp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '900';
        $config['max_width'] = '400';
        $config['max_height'] = '400';
        $config['file_name'] = UUID::v4();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_form')) {
            $error = array('error' => $this->upload->display_errors());

            echo json_encode($error);
        } else {
            $upload_data = $this->upload->data();
            $values['orig_name'] = 'images/temp/' . $upload_data['orig_name'];
            $values['url_logo'] = base_url() . 'images/temp/' . $upload_data['orig_name'];
            $values['file_type'] = $upload_data['file_type'];

            echo json_encode($values);
        }
    }

    function anuncio() {
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

        if ($cupones != null) {
            foreach ($cupones as $cupon) {
                $dataCupon = array(
                            'descripcion' => $cupon->descripcion,
                            'valor' => $cupon->valor,
                            'tipoCupon' => $cupon->tipoCupon,
                            'vigente' => 1,
                            'usado' => 0,
                            'servicioID' => $servicioID,
                            'detalleID' => $detallePaquete->detalleID,
                            'paqueteID' => $paqueteID,
                            'cuponDetalleID' => $cupon->cuponDetalleID,
                            'cuponID' => $cupon->cuponID
                );
                $idCuponAdquirido = $this->defaultdata_model->insertItem('cuponadquirido', $dataCupon);
            }
        }



        //PUBLICACION      
        $fecha = date('Y-m-d');
        $dias = $this->input->post('vigencia_texto');
        $fechaCierre = strtotime('+' . $dias . ' day', strtotime($fecha));
        $fechaCierre = date('Y-m-j', $fechaCierre);
        $dataPublicacion = array(
            'seccion' => $this->input->post('seccion'),
            'titulo' => $this->input->post('titulo'),
            'vigente' => 1,
            'fechaCreacion' => date('Y-m-d'),
            'fechaVencimiento' => $fechaCierre,
            'numeroVisitas' => 0,
            'estadoID' => $this->input->post('estado'),
            'ciudad' => $this->input->post('ciudad'),
            'genero' => $this->input->post('genero'),
            'razaID' => $this->input->post('raza'),
            'precio' => $this->input->post('precio'),
            'descripcion' => $this->input->post('descripcion'),
            'muestraTelefono' => $this->input->post('mostrar_telefono'),
            'aprobada' => 0,
            'servicioID' => $servicioID,
            'detalleID' => $detallePaquete->detalleID,
            'paqueteID' => $paqueteID
        );

        $publicacionID = $this->defaultdata_model->insertItem('publicaciones', $dataPublicacion);

        //VIDEOS PUBLICACION
         $video = $this->input->post('url_video');
                if( $video != null){
                    for($i=0;$i<=count($video);$i++){                        
                        if($video[$i] != '0' && $video[$i] != null){
                        $arrVideo= array(
                            'paqueteID' => $paqueteID,
                            'publicacionID'   => $publicacionID,
                            'servicioID' => $servicioID,
                            'detalleID' =>  $detallePaquete->detalleID,
                            'link' =>$video[$i]
                        );
                            $video = $this->admin_model->insertItem('videos',$arrVideo);
                            //var_dump($e);
                        }
                        $arrVideo = null;
                    }
                }

        //IMAGENES
         $name_logo_form = $this->input->post('name_logo_form');
                if( $name_logo_form != null){
                    for($i=0;$i<=count($name_logo_form);$i++){     
                        //Se mueve la imagen de tmp a negocio_logo
                        $name_file = explode('/', $name_logo_form);

                        if (!file_exists('images/anuncios/' . $name_file[2])) {
                            rename($name_logo_form, 'images/anuncios/' . $name_file[2]);
                        }
                        $logo_form = 'images/anuncios/' . $name_file[2];                   
                        
                        $arrFoto= array(
                            'paqueteID' => $paqueteID,
                            'publicacionID'   => $publicacionID,
                            'servicioID' => $servicioID,
                            'detalleID' =>  $detallePaquete->detalleID,
                            'foto' =>$logo_form
                        );
                            $fotoID = $this->admin_model->insertItem('fotospublicacion',$arrFoto);
                                                   
                        $arrVideo = null;
                    }
                }

        

         //COMPRA
         $valorCupon = $this->input->post('radiog_dark');
         $cuponID = $this->input->post('cuponUsado');
         $precio_total = $detallePaquete->precio - ($detallePaquete->precio * ($valorCupon / 100));

         if($cuponID != 0){
            $this->defaultdata_model->updateItem('cuponID', $cuponID, $data = array('usado' => 1), 'cuponadquirido');
         }
        
        $compra = array(
            'descuento' => $valorCupon,
            'fecha' => date('Y-m-d H:i:s'),
            'idCuponAdquirido' => $cuponID,
            'subtotal' => $detallePaquete->precio,
            'total' => $precio_total,
            'usuarioID' => $this->session->userdata('idUsuario'),
            'pagado' => 0
        );
        $compraID = $this->defaultdata_model->insertItem('compra', $compra);

        $compradetalle = array(
            'cantidad' => 1,
            'color' => '',
            'talla' => '',
            'compraID' => $compraID,
            'nombre' => $detallePaquete->nombrePaquete,
            'precio' => $detallePaquete->precio,
            'productoID' => $publicacionID
        );
        $compraDetalle = $this->defaultdata_model->insertItem('compradetalle', $compradetalle);
           $preference_data = array(
            "items" => array(
                array(
                    "title" => "Publicacion en Anuncios",
                    "quantity" => 1,
                    "currency_id" => "MXN",
                    "unit_price" => floatval($precio_total)
                )
            ),
            "payer" => array(
                'name' => $this->session->userdata('nombre'),
                'surname' => $this->session->userdata('apellido'),
                'email' => $this->session->userdata('correo'),
                'date_created' => date('Y-m-d')
            ),
            "back_urls" => array(
                "success" => base_url().'venta/updateCompra/'.$compraID.'/1/'.$servicioID,
                "pending" => base_url().'venta/updateCompra/'.$compraID.'/1/'.$servicioID,
                "failure" => base_url().'venta/updateCompra/'.$compraID.'/0/'.$servicioID
            )
        );

        $preference = $this->mercadopago->create_preference($preference_data);
         if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo 'rollback';
            } else {
            $this->db->trans_commit();
            //TODO hay que cambiar a init_point
           echo '<iframe src="' . $preference['response']['sandbox_init_point'] . '" name="MP-Checkout" width="740" height="600" frameborder="0"></iframe>';
        }


        //echo json_encode($publicacionID);
    }

    function lista() {

        $raza = $this->input->post('raza') === '' ? NULL : intval($this->input->post('raza'));
        $genero = $this->input->post('genero') === '' ? NULL : intval($this->input->post('genero'));
        $estado = $this->input->post('estado') === '' ? NULL : intval($this->input->post('estado'));
        $precio = $this->input->post('precio') === '' ? NULL : $this->input->post('precio');
        $palabra_clave = $this->input->post('palabra_clave') === '' ? NULL : $this->input->post('palabra_clave');
        $id_anuncio = $this->input->post('id_anuncio') === '' ? NULL : $this->input->post('id_anuncio');

        echo json_encode($this->venta_model->getPublicaciones($raza, $genero, $estado, $precio, $palabra_clave, $id_anuncio));
    }

    public function contactar($id) {
        $directorio = $this->venta_model->getIDusuario($id);

        $config = array(
            'mailtype' => 'html',
            'priority' => 2,
            'useragent' => 'qup',
            'wrapchars' => '300',
            'wordwrap' => true,
            'protocol' => 'sendmail',
        );

        $this->email->initialize($config);

        $this->email->from($this->session->userdata('correo'), $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido'));
        $this->email->to($directorio->correo);

        $this->email->subject($this->input->post('asunto_contacto'));

        $msj = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Bienvenido-QuieroUnPerro.com</title>
            <link rel="stylesheet" href="http://quierounperro.com/quiero_un_perro/css/general.css" type="text/css" media="screen" />
        </head>

        <body>
            <table width="647" align="center">
                <tr>
                    <td width="231" rowspan="2">
                        <img src="http://quierounperro.com/quiero_un_perro/images/logo_mail.jpg"/>
                    </td>
                    <td height="48" colspan="6" style="font-family: \'titulos\'; font-size:50px; color:#72A937; margin:0px; padding:0px; margin-bottom:-10px;">
                        QUP Contacto
                    </td>
                </tr>
                <tr>
                    <td colspan="7" >
                        <p>&nbsp;  </p>
                        <font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: ' . $directorio->nombre . " " . $directorio->apellido . '!! </font>
                    </br>
                </br>

                <font> El usuario ' . $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido') . ' quiere contactase contigo...</font>
            </br>
        </br>

        <font color="#000066"><strong> Asunto: ' . $this->input->post('asunto_contacto') . '</strong></font>
        <font color="#000066"><strong>Mensaje: </strong><br/>' . $this->input->post('comentario_contacto') . '</font>
        <br/>
        <p> </p>
    </td>
</tr>

<tr bgcolor="#6A2C91" >
    <td colspan="7" >
        <font style=" font-size:14px; padding-left:15px; color:#FFFFFF;">Gracias por tu preferencia </font>
        <br/>
        <font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font>
    </td>
</tr>
</table>
</body>
</html>';

        $this->email->message($msj);

        if (!$this->email->send()) {
            echo "<div class='alert alert-warning'>No se ha logrado envíar el correo al dueño de este directorio. Vuelva a intentarlo o contacte al administrador del sitio.</div>";
        } else {
            echo '<div class="alert alert-success">Se ha enviado correctamente el correo electrónico.</div>';
        }
    }

    function updateCompra($compraID,$estado,$servicioID){
        $this->defaultdata_model->updateItem('compraID', $compraID, $data = array('pagado' => $estado), 'compra');
        $this->defaultdata_model->updateItem('servicioID', $servicioID, $data = array('pagado' => $estado), 'serviciocontratado');
        redirect('principal/miPerfil');
    }

}
