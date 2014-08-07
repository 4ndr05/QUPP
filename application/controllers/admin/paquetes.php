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
    }


    
        

    



    

   


}