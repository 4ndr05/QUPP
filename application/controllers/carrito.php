<?php
if (!defined('BASEPATH'))
        die();

class Carrito extends CI_Controller {
    
  
    var $idUsuario="";

        public function __construct(){
        parent::__construct();
        if(!is_logged()&&$this->session->userdata('tipoUsuario')!=1){
            $query = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : '';
            $redir = str_replace('/', '-', uri_string().$query);
            redirect('principal');
        } // checamos si existe una sesión activa           
       
        $this->load->model('defaultdata_model');
        $this->load->model('admin_model');
        $this->load->model('usuario_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('googlemaps');
        $this->load->library('cart');

        $CI = &get_instance();
         $CI->config->load("mercadopago", TRUE);
         $config = $CI->config->item('mercadopago');
         $this->load->library('Mercadopago', $config);  
         $this->mercadopago->sandbox_mode(TRUE);
        

        if (!is_authorized(array(1,2,3), 5, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
                $this->session->set_flashdata('error', 'userNotAutorized');
                redirect('principal');
        }

        }

        //is_authorized($nivelesReq, $idPermiso, $nivelUsuario, $rolUsuario)
        
    
    
    public function index() {
        $data['SYS_metaTitle']          = '';
        $data['SYS_metaKeyWords']       = '';
        $data['SYS_metaDescription']    = '';  
        $data['carrito'] = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));//$this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carrito');
        $data['carritototal'] = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        $data['datosPersonales'] = $this->usuario_model->myInfo($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['paises']     = $this->defaultdata_model->getPaises();

        $carrito = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));
        $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        

        $productos = 0;
        $precio = 0;
        if($carrito != null){
            foreach ($carrito as $producto) {
                $productos += $producto->cantidad;
                $precio += ($producto->cantidad * $producto->precio);
            }
           
        }

        if($carritototal != null){
            $descuento = $carritototal->descuento;
            $total = ($precio-($precio *($descuento/100)));
           $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total
            );
            $totales = $this->admin_model->updateItem('usuarioID',$this->session->userdata('idUsuario'),$carritoTotal,'carritototal');
         
        } else {
             $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total,
            'descuento' => 0
            );
            $totales = $this->admin_model->insertItem('carritototal',$carritoTotal);
        }



        /*$preference_data = array();
        $preference_data["items"] = array();

        $item = array();
        for ($i=0; $i < count($carrito); $i++) { 
            foreach ($carrito as $items) {
                    $preference_data["items"][$i] = array(
                    "title" => $items->nombre,
                    "quantity" => intval($items->cantidad),
                    "currency_id" => "MX",
                    "unit_price" => floatval($items->precio)
                    );
                }
        }*/
         $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
         //var_dump($carritototal);
         if($carritototal->totalPrecio == 0.00){
            $precio = '10.00';
         } else {
            $precio = $carritototal->totalPrecio;
         }
         $preference_data = array(
             "items" => array(
                array(
                    "title" => "Artículos para mascotas QUP",
                    "quantity" => 1,
                    "currency_id" => "MX",
                    "unit_price" => floatval($precio)
                )
             )
        );

        
        $preference = $this->mercadopago->create_preference ($preference_data);
        //var_dump($preference);
        $data['preference'] = $preference;

        $this->load->view('carrito_view',$data);
    }


    function addProducto(){
        $existeProducto = $this->admin_model->getCarritoProducto($this->session->userdata('idUsuario'), $this->input->post('productoID'),$this->input->post('talla'),$this->input->post('color'));
        var_dump($existeProducto);

        if($existeProducto != null){
            echo $cantidad = $this->input->post('cantidad')+$existeProducto->cantidad;
                 $this->admin_model->updateProduct($data= array('cantidad' => $cantidad),$this->session->userdata('idUsuario'),$existeProducto->productoID,$this->input->post('talla'),$this->input->post('color')); 
                } else {
                        $carritoData = array(
                            'usuarioID' => $this->session->userdata('idUsuario'),
                            'productoID' => $this->input->post('productoID'),
                            'cantidad' => $this->input->post('cantidad'),
                            'precio' => $this->input->post('precio'),
                            'nombre' => $this->input->post('nombre'),
                            'talla' => $this->input->post('talla'),
                            'color' => $this->input->post('color')
                        );
                    $this->admin_model->insertItem('carrito', $carritoData);
                }

       $carrito = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));
       $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        
        $productos = 0;
        $precio = 0;
        if($carrito != null){
            foreach ($carrito as $producto) {
                $productos += $producto->cantidad;
                $precio += ($producto->cantidad * $producto->precio);

            }
        } 

        if($carritototal != null){
            $descuento = $carritototal->descuento;
            $total = ($precio-($precio *($descuento/100)));
           $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total
            );
            $totales = $this->admin_model->updateItem('usuarioID',$this->session->userdata('idUsuario'),$carritoTotal,'carritototal');
         
        } else {
            $total = ($this->input->post('cantidad') * $this->input->post('precio'));
             $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $this->input->post('cantidad'),
            'subtotal' =>$total,
            'totalPrecio' => $total
            );
            $totales = $this->admin_model->insertItem('carritototal',$carritoTotal);
        }

       //redirect('carrito');
    }

    function carritoDetalle() {
        $this->load->view('carrito_view');
    }

    function carritoUpdate(){
        $data = array(
            'rowid' => $this->input->post('rowID'),
            'qty' => $this->input->post('qty')
        );
       //$e = $this->cart->update($data);
        $carritoBD = array('cantidad'=>$this->input->post('qty'));
        $this->admin_model->updateItem('cartID',$this->input->post('cartID'),$carritoBD,'carrito');
        

       $carrito = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));
       $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        
        $productos = 0;
        $precio = 0;
        if($carrito != null){
            foreach ($carrito as $producto) {
                 $productos += $producto->cantidad;
                 $precio += ($producto->cantidad * $producto->precio);

            }
        }

        if($carritototal != null){
            $descuento = $carritototal->descuento;
            $total = ($precio-($precio *($descuento/100)));
           $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total
            );
            $totales = $this->admin_model->updateItem('usuarioID',$this->session->userdata('idUsuario'),$carritoTotal,'carritototal');
         
        } 
        $data['response'] = "true";
        echo json_encode($data);
    }

    function carritoUpdateTotal(){
        $descuento = $this->input->post('descuento');
       $carrito = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));
       $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        
        $productos = 0;
        $precio = 0;
        if($carrito != null){
            foreach ($carrito as $producto) {
                $productos += $producto->cantidad;
                $precio += ($producto->cantidad * $producto->precio);

            }
        }

        if($carritototal != null){
            $total = ($precio-($precio *($descuento/100)));
           $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total,
            'descuento' => $descuento
            );
            $totales = $this->admin_model->updateItem('usuarioID',$this->session->userdata('idUsuario'),$carritoTotal,'carritototal');
         
        } 
        $data['response'] = "true";
        echo json_encode($data);
    }

    function deleteItem(){
        $cartID = $this->input->post('cartID');
        $this->admin_model->deleteItem('cartID',$cartID,'carrito');
        $carrito = $this->admin_model->getCarrito($this->session->userdata('idUsuario'));
        $carritototal = $this->admin_model->getSingleItem('usuarioID',$this->session->userdata('idUsuario'),'carritototal');
        

        $productos = 0;
        $precio = 0;
        if($carrito != null){
            foreach ($carrito as $producto) {
                $productos += $producto->cantidad;
                $precio += ($producto->cantidad * $producto->precio);
            }
            
        }

        if($carritototal != null){
            $descuento = $carritototal->descuento;
            $total = ($precio-($precio *($descuento/100)));
           $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total
            );
            $totales = $this->admin_model->updateItem('usuarioID',$this->session->userdata('idUsuario'),$carritoTotal,'carritototal');
         
        } else {
             $carritoTotal = array(
            'usuarioID' => $this->session->userdata('idUsuario'),
            'totalProductos' => $productos,
            'subtotal' =>$precio,
            'totalPrecio' => $total,
            'descuento' => 0
            );
            $totales = $this->admin_model->insertItem('carritototal',$carritoTotal);
        }
        $data['response'] = "true";
        echo json_encode($data);
    }

    function carritoDetalleTest() {
        $this->load->view('carritoTest_view');
    }

    function carritoBae(){
        $e = $this->cart->destroy();
        
    }


    function factura(){
        
        $data['response'] = "true";
        echo json_encode($data);
    }

    function pagos(){

    }
   
    

}