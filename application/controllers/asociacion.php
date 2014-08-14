<?php

if (!defined('BASEPATH')) {
    die();
}

class Asociacion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('defaultdata_model');
        $this->load->model('admin_model');
        $this->load->model('usuario_model');
        $this->load->helper(array('form', 'url'));

        if (!is_authorized(array(1, 2, 3), 5, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
            $this->session->set_flashdata('error', 'userNotAutorized');
            redirect('principal');
        }
    }

    public function index() {
        $data['estados'] = $this->defaultdata_model->getEstados();
        $data['paises'] = $this->defaultdata_model->getPaises();
        $data['paquetes'] = $this->defaultdata_model->getPaquetes();
        $data['razas'] = $this->defaultdata_model->getRazas();
        $data['giros'] = $this->defaultdata_model->getGiros();
        $data['seccion'] = 11;
        $data['directorios'] = $this->usuario_model->getDirectorios();
        $data['user'] = $this->usuario_model->myInfo($this->session->userdata('idUsuario'));
        
        $this->load->view('asociacion_view', $data);
    }

}
