<?php

if (!defined('BASEPATH'))
    die();

class Directorio extends CI_Controller {

    public function __construct() {
        parent::__construct();          

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

    /**
     * Se crea la tabla de giros de empresa.
     */
    public function index() {
        $data['estados'] = $this->defaultdata_model->getEstados();
        $data['paises'] = $this->defaultdata_model->getPaises();
        $data['paquetes'] = $this->defaultdata_model->getPaquetes();
        $data['razas'] = $this->defaultdata_model->getRazas();
        $data['giros'] = $this->defaultdata_model->getGiros();
        
        $data['directorios'] = $this->usuario_model->getDirectorios();

        $this->load->view('directorio_view', $data);
    }
    
    public function lista(){
        
        $giro = $this->input->post('giro') === '' ? NULL : intval($this->input->post('giro'));
        $estado = $this->input->post('estado') === '' ? NULL : intval($this->input->post('estado'));
        $palabra_clave = $this->input->post('palabra_clave') === '' ? NULL : $this->input->post('palabra_clave');
        
        echo json_encode($this->usuario_model->getDirectorios($giro, $estado, $palabra_clave));
        
    }

}