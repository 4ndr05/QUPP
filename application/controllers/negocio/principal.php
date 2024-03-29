<?php
if (!defined('BASEPATH'))
        die();

class Principal extends CI_Controller {
   

        public function __construct(){
        parent::__construct();
        if(!is_logged()&&$this->session->userdata('tipoUsuario')!=2){
            $query = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : '';
            $redir = str_replace('/', '-', uri_string().$query);
            redirect('principal');
        } // checamos si existe una sesión activa
            
       
        $this->load->helper(array('form', 'url'));
        $this->load->model('defaultdata_model');
        $this->load->library('googlemaps');
        $this->load->model('usuario_model');
        $this->load->model('perfil_model');

        //is_authorized($nivelesReq, $idPermiso, $nivelUsuario, $rolUsuario)
        if (!is_authorized(array(2), 2, $this->session->userdata('nivel'), $this->session->userdata('rol'))) {
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
        $visitas = $this->defaultdata_model->getVisitas();
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


        $this->load->view('negocio/index_view', $data);
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
        
         $this->load->view('negocio/myprofile_view',$data);
    }

    function miPerfil(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['fiscData'] = $this->perfil_model->infoFiscal($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['paises']     = $this->defaultdata_model->getPaises();
        $data['datConN'] = $this->perfil_model->infoDetalleN($this->session->userdata('idUsuario'));

        //var_dump($data['datConN']);

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/mi_perfil_view',$data);
    }

    function updateMiPerfilB(){
        //var_dump($_POST);
         $data = array(
            'nombre' => $this->input->post('nombre'), 
            'apellido' => $this->input->post('apellido'), 
            'correo' => $this->input->post('correo'), 
            'telefono' => $this->input->post('telefono')
        );

         $this->perfil_model->updateItem('idUsuario', $this->session->userdata('idUsuario'), $data, 'usuario');

        $dataD = array(
            'estadoID' => $this->input->post('estadoID'), 
        );
        $this->perfil_model->updateItem('idUsuario', $this->session->userdata('idUsuario'), $dataD, 'usuariodato');
        redirect('negocio/principal/myProfile');
        //$this->perfil_model->updateItem($itemID, $ID, $data, $tabla)
    }

    function updateMiPerfilF(){
        //var_dump($_POST);
        $data= array(
            'razonSocial'=> $this->input->post('razon'),
            'rfc'=> $this->input->post('RFC'),
            'calle'=> $this->input->post('calle'),
            'noExterior'=> $this->input->post('no_exterior'),
            'cp'=> $this->input->post('cp'),
            'municipio'=> $this->input->post('municipio'),
            'estadoID'=> $this->input->post('estadoID'),
            'idPais'=> $this->input->post('paisID')
        );
        $this->perfil_model->updateItem('idUsuario', $this->session->userdata('idUsuario'), $data, 'usuariodato');

        $dataDt = array(
            'nombreNegocio' => $this->input->post ('nombre_negocio'),   
            'nombreContacto' => $this->input->post ('nombre_contacto'),   
            'telefono' => $this->input->post ('telefono'),   
            'calle' => $this->input->post ('calleDetalle'),   
            'numero' => $this->input->post ('num'),  
            'colonia' => $this->input->post ('colonia'),   
            'municipioC' => $this->input->post ('municipioDetalle'),
            'idEstado'  => $this->input->post ('estadoIDDetalle'),
            'correo' => $this->input->post ('e-mail'),   
            'cp' => $this->input->post ('cpD'),  
            'paginaWeb' => $this->input->post ('pagina_web'),   
            'descripcion' => $this->input->post ('descripcion')   

        );
        $this->perfil_model->updateItem('idUsuario', $this->session->userdata('idUsuario'), $dataDt, 'usuariodetalle');
        redirect('negocio/principal/myProfile');

    }

    function anuncios(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['anuncios'] = $this->perfil_model->getAnuncios($this->session->userdata('idUsuario'));
        $data['anunciosAct'] = $this->perfil_model->getAnunciosAct($this->session->userdata('idUsuario'));
        $data['anunciosInAct'] = $this->perfil_model->getAnunciosInAct($this->session->userdata('idUsuario'));


        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/anuncios_view',$data);
    }

    function mensajes(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['mensajes'] = $this->perfil_model->getMensajes($this->session->userdata('idUsuario'));

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/mensajes_view',$data);
    }

    function cupones(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['cupones'] = $this->perfil_model->getCupones($this->session->userdata('idUsuario'));

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/cupones_view',$data);
    }

    function favoritos(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['razas'] = $this->perfil_model->getRazas();
        $data['favoritos'] = $this->perfil_model->getFavoritos($this->session->userdata('idUsuario'));

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/favoritos_view',$data);
    }

    
    function facturas(){
        $data['myInfo']    = $this->usuario_model->getMyInfo($this->session->userdata('idUsuario'));
        $data['info']     = $this->usuario_model->getInfoCompleta($this->session->userdata('idUsuario'));
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['facturas'] = $this->perfil_model->getFacturas($this->session->userdata('idUsuario'));
        $data['compras'] = $this->perfil_model->getCompras($this->session->userdata('idUsuario'));

        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/facturas_view',$data);
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

	function soporte(){
        $data['banner'] = $this->defaultdata_model->getTable('banner');
        $data['seccion'] = 5;
        if($this->session->userdata('tipoUsuario') == 2 || $this->session->userdata('tipoUsuario') == 3){
            $data['ubicacion'] = $this->usuario_model->miUbicacion($this->session->userdata('idUsuarioDato'));
            $data['giro'] = $this->usuario_model->getGiro($this->session->userdata('idUsuarioDetalle'));
        }
        $this->load->view('negocio/perfil/soporte_view',$data);
    }

    function correoSoporte(){
        $correo = $this->session->userdata('correo');
        $asunto = $this->input->post('asunto');
        $descripcion = $this->input->post('descripcion');
        $destino = 'marthahdez2@gmail.com';//'administrador.soporte@quierounperro.com';
        $mensaje = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        <font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola!! </font>
                    </br>
                </br>

                <font> El usuario ' . $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido') . ' ha enviado el siguiente correo:</font>
            </br>
        </br>

        <font color="#000066"><strong> Asunto: ' . $asunto . '</strong></font><br>
        <font color="#000066"><strong>Mensaje: </strong><br/>' . $descripcion . '</font>
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
    
    if($this->email_model->send_email($correo, $destino, $asunto,$mensaje)){
        $data['response'] = true;
    } else {
        $data['response'] = false;
    }
         echo json_encode($data);

    }
       

}
