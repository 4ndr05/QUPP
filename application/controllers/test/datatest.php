<?php

class datatest extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('test/test_model');
    }
    
    public function insert_usuario(){
        $data = array();
        
        $data['usuario'] = array();
        $data['usuariodetalle'] = array();
        $data['usuariodato'] = array();
        $data['ubicacionusuario'] = array();
        
        $rows = 201;
        for($i = $rows; $i <= $rows+30; $i++){
           $data['usuario'][$i] = array(
                'idUsuario' => $i,
                'apellido' => 'apellido '.$i,
                'authKey' => '9FA9CDFB3835D3B45F0B',
                'codigoConfirmacion' => 'B1E02B934AE20001B6BF05E8B',
                'contrasena' => 'c1eb40405ff63b6c3671ddf9351e340a1910227976066de5f5',
                'correo' => 'correo_'.$i.'@interkreativa.com',
                'fechaRegistro' => '2014-07-17 17:24:18',
                'last_ip_access' => NULL,
                'nivel' => '3',
                'nombre' => 'nombre '.$i,
                'paqueteGratis' => '1',
                'recepcionCorreo' => '1',
                'status' => '1',
                'telefono' => '1231231234',
                'tipoUsuario' => '3',
                'useragent' => NULL,
            );
           
           $data['usuariodetalle'][$i] = array(
               'idUsuarioDetalle' => $i,
               'calle' => 'calle '.$i,
               'colonia' => 'colonia '.$i,
               'correo' => 'correo__'.$i,
               'cp' => '70707',
               'descripcion' => 'ninguna',
               'giro' => '???',
               'idEstado' => '22',
               'idUsuario' => $data['usuario'][$i]['idUsuario'],
               'logo' => null,
               'nombreContacto' => 'Contacto '.$i,
               'nombreNegocio' => 'Negocio '.$i,
               'numero' => '00'.$i,
               'paginaWeb' => 'ninguna.',
               'telefono' => '1231231231',
               'tipoUsuario' => 3
           );
           
           $data['usuariodato'][$i] = array(
               'idUsuarioDato' => $i,
               'calle' => 'F calle '.$i,
               'cp' => '90909',
               'estadoID' => '12',
               'idPais' => '146',
               'idUsuario' => $data['usuario'][$i]['idUsuario'],
               'municipio' => 'municipio '.$i,
               'noExterior' => '800'.$i,
               'noInterior' => '900'.$i,
               'razonSocial' => 'Empresa '.$i.' sa de cv',
               'rfc' => 'eas871011ki'.str_pad($i, 2, '0', STR_PAD_LEFT ),
           );
           
           $data['giroempresa'][$i] = array(
               'giroID' => 3,
               'idUsuarioDetalle' => $data['usuariodetalle'][$i]['idUsuarioDetalle']               
           );
           
           $data['ubicacionusuario'][$i] = array(
               'estadoID' => 22,
               'idUsuarioDato' => $data['usuariodato'][$i]['idUsuarioDato'],
               'latitud' => '20.5593958',
               'longitud' => '-100.4190292',
               'tipoUsuario' => 3,
               'zonageograficaID' => 5
           );
        }
        
        $this->db->trans_start();
        $this->test_model->insertData($data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo "<div class='alert alert-warning'>Fallo</div>";
        } else {
            $this->db->trans_commit();
            echo '<div class="alert alert-success">Agregados</div>';
        }
    }
    
}