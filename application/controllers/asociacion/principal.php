<?php
if (!defined('BASEPATH'))
        die();

class Principal extends CI_Controller {
    
    var $idCandidato="";
    var $idUsuario="";

        public function __construct(){
        parent::__construct();
        if(!is_logged()&&$this->session->userdata('tipoUsuario')!=3){
            $query = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : '';
            $redir = str_replace('/', '-', uri_string().$query);
            redirect('principal');
        } // checamos si existe una sesión activa
            
       
        $this->load->helper(array('form', 'url'));
        $this->load->model('defaultdata_model');
        $this->load->library('googlemaps');

        //is_authorized($nivelesReq, $idPermiso, $nivelUsuario, $rolUsuario)
        if (!is_authorized(array(3), 3, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
                $this->session->set_flashdata('error', 'userNotAutorized');
                redirect('principal');
        }

        }

        
    
    
    public function index() {
        $data['SYS_metaTitle']          = '';
        $data['SYS_metaKeyWords']       = '';
        $data['SYS_metaDescription']    = '';  
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['paises']     = $this->defaultdata_model->getPaises();
        $data['mapaSegundo'] = 'mapa_view';
        
        // mapa
        

        $config = array();
        $config['center'] = 'auto';
        $config['zoom'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
                var mapCentre = map.getCenter();
                marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
        });
        } 
        centreGot = true;';
        $config['map_name'] = 'map';
        $config['map_div_id'] = 'map_canvas';
        $this->googlemaps->initialize($config);
   
        // set up the marker ready for positioning 
        // once we know the users location
        $marker = array();
        $marker['draggable'] = true;
        $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
        //$marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        //var_dump($data['map']);
        $this->load->view('asociacion/index_view', $data);
    }


     function myProfile(){
        $data['SYS_metaTitle']          = '';
        $data['SYS_metaKeyWords']       = '';
        $data['SYS_metaDescription']    = '';  
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        
         $this->load->view('asociacion/myprofile_view',$data);
    }

    function miPerfil(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/mi_perfil_view',$data);
    }

    function anuncios(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/anuncios_view',$data);
    }

    function mensajes(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/mensajes_view',$data);
    }

    function cupones(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/cupones_view',$data);
    }

    function favoritos(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/favoritos_view',$data);
    }

    function soporte(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/soporte_view',$data);
    }

    function facturas(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('asociacion/perfil/facturas_view',$data);
    }



    
    function editar_contrasena() {       
            if ($this -> usuario_model -> cambiarContrasena($this -> input -> post('contrasenaActual'), $this -> input -> post('contrasena1'), $this -> session -> userdata('idUsuario'),1)) {
               
                $mensaje = '<link rel="stylesheet" href="'.base_url().'css/general.css" type="text/css" media="screen" /><table width="647" align="center"><tr>
<td width="231" rowspan="2"><img src="'.base_url().'images/logo_mail.jpg"/></td>
<td height="48" colspan="6" style="font-family: "titulos"; font-size:50px; color:#72A937; margin:0px; padding:0px; margin-bottom:-10px;">
Bienvenido</td></tr>
<tr style="font-size:14px; background-color:#72A937; color:#FFFFFF;" valign="top">
<td width="60" height="23"><a> &nbsp;Inicio</a></td>
<td width="57"><a>&nbsp;Venta</a></td>
<td width="52"><a>&nbsp;Cruza</a></td>
<td width="78"><a>&nbsp;Adopción</a></td>
<td width="64"><a>&nbsp;Tienda</a></td>
<td width="73"><a>&nbsp;Directorio</a></td>
</tr>
<tr>
<td colspan="7" ><p>&nbsp;  </p><font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: '.$this->session->userdata('nombre').'!! </font>
</br></br><font>Tu contraseña ha sido cambiada por la siguiente:</font>
</br></br><font color="#000066">  '.$this -> input -> post("contrasena1").' </font>
<br/>
<p> </p>
</td></tr><tr bgcolor="#6A2C91" ><td colspan="7" ><font style=" font-size:14px; padding-left:15px; color:#FFFFFF;"> Bienvenido </font>
<br/><font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font></td>
</tr>
</table>';

        $this->email_model->send_email('', $this->session->userdata('correo'), 'Has cambiado tu contraseña en QUP', $mensaje);
                $data['response'] = true;
            } else {
               $data['response'] = false;
            }
        echo json_encode($data);

    }


    


   

}