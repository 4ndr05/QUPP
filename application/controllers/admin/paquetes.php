<?php
if (!defined('BASEPATH'))
        die();

class Paquetes extends CI_Controller {
    
    

        public function __construct(){
        parent::__construct();
        if(!is_logged()){
            $query = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : '';
            $redir = str_replace('/', '-', uri_string().$query);
            redirect('principal');
        } // checamos si existe una sesión activa
            
       
        $this->load->helper(array('form', 'url'));
        $this->load->model('defaultdata_model');
        $this->load->model('file_model');
        $this->load->library('googlemaps');
        $this->load->model('admin_model');

        //is_authorized($nivelesReq, $idPermiso, $nivelUsuario, $rolUsuario)
        if (!is_authorized(array(0), 4, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
                $this->session->set_flashdata('error', 'userNotAutorized');
                redirect('principal');
        }

        }

        
    
    
    public function index() {
        $data['SYS_metaTitle']           = '';
        $data['SYS_metaKeyWords']       = '';
        $data['SYS_metaDescription']    = '';  
        $data['paquetes']    = $this->defaultdata_model->getPaquetes();
        //var_dump($data['paquetes']);
        $this->load->view('admin/admin_paquetes_view',$data);
    }


    function editPaquete(){
        var_dump($_POST);
        $data = array(
            'cantFotos' => $this->input->post('cantFotos'), 
            'caracteres' => $this->input->post('caracteres'), 
            'vigencia' => $this->input->post('vigencia'), 
            'videos' => $this->input->post('videos'),
            'cupones' => $this->input->post('cupones'),
            'precio' => $this->input->post('precio')
        );
        $paqueteID = $this->input->post('paqueteID');
        //$this->admin_model->updatePaquete($paqueteID,$data);
        //redirect('admin/paquetes');
        $cuponTienda = $this->input->post('cuponTienda');
                if( $cuponTienda != null){
                    for($i=0;$i<=count($cuponTienda)-1;$i++){
                        
                        if($cuponTienda[$i] != '0' && $cuponTienda[$i] != ''){
                        $arrcuponTienda= array(
                            'nombreCupon'   => 'cuponTienda',
                            'paqueteID' => $paqueteID
                        );
                        $e = $this->admin_model->insertItem('cupon',$arrcuponTienda);
                        $arrcuponTienda = null;

                        $arrcuponDetalle= array(
                            'descripcion'   => 'cuponTienda',
                            'valor' => $cuponTienda[$i],
                            'vigencia' => $this->input->post('vigencia'),
                            'tipoCupon' => 1,
                            'cuponID' =>$e
                        );
                        $c = $this->admin_model->insertItem('cupondetalle',$arrcuponDetalle);  
                        $arrcuponDetalle = null;

                        
                        }                        
                    }
                }

        $cuponPaquete = $this->input->post('cuponPaquete');
                if( $cuponPaquete != null){
                    for($i=0;$i<=count($cuponPaquete)-1;$i++){
                        
                        if($cuponPaquete[$i] != '0' && $cuponPaquete[$i] != ''){
                        $arrcuponTienda= array(
                            'nombreCupon'   => 'cuponPaquete',
                            'paqueteID' => $paqueteID
                        );
                        $e = $this->admin_model->insertItem('cupon',$arrcuponTienda);
                        $arrcuponTienda = null;

                        $arrcuponDetalle= array(
                            'descripcion'   => 'cuponPaquete',
                            'valor' => $cuponPaquete[$i],
                            'vigencia' => $this->input->post('vigencia'),
                            'tipoCupon' => 1,
                            'cuponID' =>$e
                        );
                        $c = $this->admin_model->insertItem('cupondetalle',$arrcuponDetalle);  
                        $arrcuponDetalle = null;

                        
                        }                        
                    }
                }

        $cuponNegocio = $this->input->post('cuponNegocio');
                if( $cuponNegocio != null){
                    for($i=0;$i<=count($cuponNegocio)-1;$i++){
                        
                        if($cuponNegocio[$i] != '0' && $cuponNegocio[$i] != ''){
                        $arrcuponTienda= array(
                            'nombreCupon'   => 'cuponNegocio',
                            'paqueteID' => $paqueteID
                        );
                        $e = $this->admin_model->insertItem('cupon',$arrcuponTienda);
                        $arrcuponTienda = null;

                        $arrcuponDetalle= array(
                            'descripcion'   => $cuponNegocio[$i],
                            'valor' => $cuponNegocioTienda[$i],
                            'vigencia' => $this->input->post('vigencia'),
                            'tipoCupon' => 1,
                            'cuponID' =>$e
                        );
                        $c = $this->admin_model->insertItem('cupondetalle',$arrcuponDetalle);  
                        $arrcuponDetalle = null;

                        
                        }                        
                    }
                }
    }


    
        

    



    

   


}