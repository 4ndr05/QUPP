<?php
if (!defined('BASEPATH'))
        die();

class Principal extends CI_Controller {
    
    

        public function __construct(){
        parent::__construct();
        if(!is_logged()){
            $query = $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : '';
            $redir = str_replace('/', '-', uri_string().$query);
            redirect('principal');
        } // checamos si existe una sesión activa
            
       
        $this->load->helper(array('form', 'url'));
        $this->load->model('defaultdata_model');
        $this->load->model('usuario_model');
        $this->load->model('file_model');
        $this->load->model('email_model');
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
        $data['estados']    = $this->defaultdata_model->getEstados();
        $data['paises']     = $this->defaultdata_model->getPaises();
        $visitas = $this->defaultdata_model->getVisitas();
        $data['visitas'] = $visitas;
        $data['mapaSegundo'] = 'mapa_view';
        $data['usuariosT'] = count($this->defaultdata_model->getUsers());
        $data['anunciosT'] = count($this->defaultdata_model->getAnnounces());
        $data['paquetes'] =
        
        
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
        //var_dump($this->session->userdata('nivel'),$this->session->userdata('tipoUsuario'),is_logged());
        $this->load->view('admin/index_view', $data);
    }


    function getAdminP(){
         $data['zonageografica'] = $this->admin_model->getZonasG();
         $data['contenido'] = $this->admin_model->getBanner();
         //var_dump($data['contenido']);
         $this->load->view('admin/pantalla_inicio_view', $data);

    }

    function getPantalla($seccion,$zona){
         $data['zonageografica'] = $this->admin_model->getZonasG();
         $data['contenido'] = $this->admin_model->getBanner();
         $data['seccion'] = $seccion;
         $data['zonaT'] = $zona;
         $data['zonaNombre'] = $this->admin_model->getSingleItem('zonaID',$zona,'zonageografica');
         $data['seccionNombre'] = $this->admin_model->getSingleItem('seccionID',$seccion,'seccion');
         if($seccion == 1){
           $this->load->view('admin/pantalla_inicio_view', $data); 
         } elseif($seccion != 7 && $seccion != 8 && $seccion != 9 && $seccion != 10 && $seccion != 17) {
            $this->load->view('admin/pantalla_texto_view', $data); 
         } elseif($seccion == 17) {
            $this->load->view('admin/publicidad_lateral_view', $data); 
         }else {
            $this->load->view('admin/pantalla_articulo_view', $data); 
         }
         
         //var_dump($data['contenido']);
         //$this->load->view('admin/pantalla_inicio_view', $data);

    }

    function getDatosCuriosos($seccion,$zona){
         $data['zonageografica'] = $this->admin_model->getZonasG();
         $data['contenido'] = $this->admin_model->getBanner();
         $data['seccion'] = $seccion;
         $data['zonaT'] = $zona;
         $data['zonaNombre'] = $this->admin_model->getSingleItem('zonaID',$zona,'zonageografica');
         $data['seccionNombre'] = $this->admin_model->getSingleItem('seccionID',$seccion,'seccion');
         $data['contenidos'] = $this->admin_model->getContenidos(10);
         $data['fotoscontenido'] = $this->admin_model->getFotosContenido();
        $this->load->view('admin/pantalla_curiosos_view', $data);
    }

    function getEventoMes($seccion,$zona){
         $data['zonageografica'] = $this->admin_model->getZonasG();
         $data['contenido'] = $this->admin_model->getBanner();
         $data['seccion'] = $seccion;
         $data['zonaT'] = $zona;
         $data['zonaNombre'] = $this->admin_model->getSingleItem('zonaID',$zona,'zonageografica');
         $data['seccionNombre'] = $this->admin_model->getSingleItem('seccionID',$seccion,'seccion');
         $data['contenidos'] = $this->admin_model->getContenidos(9);
         $data['fotoscontenido'] = $this->admin_model->getFotosContenido();
        $this->load->view('admin/pantalla_eventomes_view', $data);
    }

    function getRazaMes($seccion,$zona){
         $data['zonageografica'] = $this->admin_model->getZonasG();
         $data['contenido'] = $this->admin_model->getBanner();
         $data['seccion'] = $seccion;
         $data['zonaT'] = $zona;
         $data['zonaNombre'] = $this->admin_model->getSingleItem('zonaID',$zona,'zonageografica');
         $data['seccionNombre'] = $this->admin_model->getSingleItem('seccionID',$seccion,'seccion');
         $data['contenidos'] = $this->admin_model->getContenidos(8);
         $data['fotoscontenido'] = $this->admin_model->getFotosContenido();
         $this->load->view('admin/pantalla_raza_view', $data);
    }

    function getMensajes(){
        $data['mensajes'] = $this->admin_model->getMensajes();
        $data['usuarios'] = $this->admin_model->getUsers();
        $this->load->view('admin/adimin_mensajes_view', $data);
    }

    function getAdminT(){
        $this->load->view('admin/adminT_view');
    }

    function uploadBanner(){
        $posicion = $this->input->post('posicion');//$this->input->post('posicion'); // '1 - superior 2 - centro - 3 abajo - 4 lateral'
        $seccionID = $this->input->post('numeroSeccionR'); // inici, venta, perros perdidos, etc.
        $zonaID = $this->input->post('zonaIDR');

        
        switch ($posicion) {
            case 1:
                 $alto = 93;
                 $ancho = 638;
                 $folder = 'banner_superior';
            break;

            case 2:

                switch ($seccionID) {
                    case 1:
                        $alto = 400;
                        $ancho = 644;
                        $folder = '';
                    break;

                    case 8:
                        $alto = 166;
                        $ancho = 136;
                        $folder = 'raza_mes';
                    break;

                    case 9:
                        $alto = 170;
                        $ancho = 220;
                        $folder = 'eventos';
                    break;

                    case 10:
                        $alto = 164;
                        $ancho = 86;
                        $folder = 'curiosos';
                    break;
                }
                
            break;

            case 3:
                 $alto = 93;
                 $ancho = 638;
                 $folder = 'banner_inferior';
            break;

            case 4:
                 $alto = 190;
                 $ancho = 215;
                 $folder = 'banner_lateral';
            break;
            
            
        }

        $file_data = array(
                'date'=>false,
                'random' => true,
                'user_id' => null,
                'width'=> $ancho,
                'height' => $alto
        );
        //var_dump($file_data);

        $imagen = $this->file_model->uploadBanner($folder, $file_data, 'banner', true);
            if (is_array($imagen)) {                // $data['response'] = 'false';
                $data['error'] = $imagen['error'];
                //$this -> session -> set_flashdata('custom_error', $imagen['error']);
                echo 'error';
                //var_dump($imagen);
            }else{

                $data = array(
                    'imgbaner' => $folder.'/'.$imagen, 
                    'zonaID' => $zonaID,
                    'posicion' => $posicion,
                    'seccionID' => $seccionID
                );

                $banner = $this->admin_model->insertBanner($data);
            }
        if($seccionID == 10){
            redirect('admin/principal/getDatosCuriosos/'.$seccionID.'/'.$zonaID);
        }
        if($seccionID == 8){
            redirect('admin/principal/getRazaMes/'.$seccionID.'/'.$zonaID);
        }
         redirect('admin/principal/getPantalla/'.$seccionID.'/'.$zonaID);
        
    }



    function tablasDinamicas(){
            var_dump($_POST);
            echo '------------------';
            $seccionID = 1;//$this->input->post('numeroSeccionR');
            $zonaID = 1;//$this->input->post('zonaIDR');
            $data['contenido'] = $this->admin_model->getBanner($seccionID,$zonaID);
            $data['seccionID'] = $seccionID;
            $data['zonaID'] = $zonaID;
            
            $this->load->view('admin/contenido_dinamico_view',$data);
        
    }

    function deleteContent(){
        $idZona = $this->input->post('zonaContent');
        $idSeccion = $this->input->post('seccionContent');
        $posicion = $this->input->post('posicionContent');
        $idContent = $this->input->post('bannerIDContent');

        
        $this->admin_model->deleteContent($idContent,$idZona, $idSeccion,$posicion);
        redirect('admin/principal/getPantalla/'.$idSeccion.'/'.$idZona);
    }

    function updateBannerText(){
       
        $data = array(
            'texto' => $this->input->post('texto'), 
        );
        $idContent = $this->input->post('bannerIDContent');
        $this->admin_model->updateBannerText($idContent,$data);
        redirect('admin/principal/getPantalla/'.$this->input->post('seccionContent').'/'.$this->input->post('zonaContent'));
    }

    function uploadArticulo(){
    	$texto = $this->input->post('textoContentN');
    	$seccionID = $this->input->post('seccionContentN');

    	switch ($seccionID) {
                    case 7:
                        $alto = 166;
                        $ancho = 136;
                        $folder = 'perros_perdidos';
                    break;

                    case 8:
                        $alto = 166;
                        $ancho = 136;
                        $folder = 'raza_mes';
                    break;

                    case 9:
                        $alto = 170;
                        $ancho = 220;
                        $folder = 'eventos';
                    break;

                    case 10:
                        $alto = 164;
                        $ancho = 86;
                        $folder = 'curiosos';
                    break;
        }
    	//REGISTRO FOTOS
        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/'.$folder;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("imagenesArticulo")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'productoID' => $productoID
                );

                //$fotoID = $this->admin_model->insertItem('fotostienda',$data);
            }
        }
    }

    function deleteBannerText(){
        $data = array(
            'texto' => $this->input->post('textoT'), 
        );
        $idContent = $this->input->post('bannerIDContentT');
        $this->admin_model->updateBannerText($idContent,$data);
        redirect('admin/principal/getPantalla/'.$this->input->post('seccionContentT').'/'.$this->input->post('zonaContentT'));
    }

    function deleteTextApoyo(){        
        $idContent = $this->input->post('bannerIDContentT');
        $this->admin_model->deleteContent($idContent,null, null,null);
        redirect('admin/principal/getPantalla/'.$this->input->post('seccionContentT').'/'.$this->input->post('zonaContentT'));
    }


    function uploadText(){
        
       $data = array(
        'zonaID' => $this->input->post('zonaContentN'),
        'posicion' => $this->input->post('posicionContentN'),
        'seccionID' => $this->input->post('seccionContentN'),
        'texto' => $this->input->post('textoContentN')
       );
       $banner = $this->admin_model->insertBanner($data);
       redirect('admin/principal/getPantalla/'.$this->input->post('seccionContentN').'/'.$this->input->post('zonaContentN'));
    }

    function anuncios() {

        $data['zonageografica'] = $this->admin_model->getZonasG();
        $data['count_sale_pets'] = $this->admin_model->getCountSalePets();
        $data['count_cross_pets'] = $this->admin_model->getCountCrossPets();
        $data['count_adoption_pets'] = $this->admin_model->getCountAdoptionPets();
        $data['count_lost_pets'] = $this->admin_model->getCountLostPets();
        $data['count_directory'] = $this->admin_model->getCountDirectory();
        $data['anuncios'] = $this->admin_model->getAnuncios(0,2,NULL);


        $this->load->view("admin/anuncios_view", $data);
    }

    function anuncios_lista() {
        $aprobado = $this->input->post('validacion_admin');
       
        switch ($aprobado) {
            case 'e_aprobacion':
                $aprobado = 0;
                break;
            case 'aprobados':
                $aprobado = 1;
                break;
            case 'rechazados':
                $aprobado = 2;
                break;
            default:
                $aprobado = 0;
        }

        $zonas = $this->input->post('zonas');

        if (empty($zonas) || $zonas == '') {
            $zona = null;
        }

        $seccion = $this->input->post('seccion');

        switch ($seccion) {
            case "venta": $seccion = 2;
                break;
            case "cruza": $seccion = 3;
                break;
            case "adopcion": $seccion = 6;
                break;
            case "perdidos": $seccion = 7;
                break;
            case "directorio": $seccion = 4;
                break;
            default:
                $seccion = 2;
        }
        
        echo json_encode($this->admin_model->getAnuncios($aprobado, $seccion, $zonas));
    }

    function aprobarAnuncio() {
        $publicacionID = $this->input->post('publicacionID');
        $aprobar =  $this->admin_model->updateItem('publicacionID', $publicacionID, $data = array('aprobada' => 1), 'publicaciones');
        $datos = $this->admin_model->getDatosAnunciante($publicacionID);

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
<td colspan="7" ><p>&nbsp;  </p><font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: '.$datos->nombre.'!! </font>
</br></br><font> Tu anuncio "'.$datos->titulo.'"" en Quierounperro.com ha sido aprobado.</font>
<br/>
<p> </p>
</td></tr><tr bgcolor="#6A2C91" ><td colspan="7" ><font style=" font-size:14px; padding-left:15px; color:#FFFFFF;"> Bienvenido </font>
<br/><font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font></td>
</tr>
</table>';
$this->email_model->send_email('', $datos->correo, 'Ha sido aprobado tu anuncio en QUP: '.$datos->titulo, $mensaje);


        echo json_encode($aprobar);
    }


    function declinarAnuncio() {
        $publicacionID = $this->input->post('publicacionID');
        $aprobar =  $this->admin_model->updateItem('publicacionID', $publicacionID, $data = array('aprobada' => 2), 'publicaciones');
        $datos = $this->admin_model->getDatosAnunciante($publicacionID);

        $mensaje = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notificacion-QuieroUnPerro.com</title>

</head>

<body>
<table width="647" align="center">
<tr>
<td width="231" height="129" colspan="2" valign="top">
<img src="http://quierounperro.com/quiero_un_perro/images/logo_mail.jpg"/>
</td>
</tr>
<tr>
<td>
<font style=" font-family:Verdana, Geneva, sans-serif; margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: Marina</font>
<br/>
<br/>

<font style="font-family:Verdana, Geneva, sans-serif;">Tu anuncio "'.$datos->titulo.'"" en Quierounperro.com ha sido declinado.</font>
<br/>
<br/>
<font style="font-family:Verdana, Geneva, sans-serif;"> Tu anuncio ha sido retirado temporalmente de la sección, pero tu paquete aún está vigente y podrás seguir utilizándolo, solo te pedimos vuelvas a crear tu anuncio en la sección Administrar anuncios de Mi Perfil. </font>
<br/>
<font style="font-family:Verdana, Geneva, sans-serif;"> El paquete que te informamos aparecera como disponible para edición da click en Edición 
<br />
<br/>
El tiempo de vigencia de tu paquete sigue corriendo, así que te invitamos a que realices este cambio cuanto antes. Cualquier duda escribenos a contacto@quierounperro.com
</font>
<p> </p>
</td>
</tr>

<tr bgcolor="#6A2C91" >
<td colspan="7" >
<font style=" font-family:Verdana, Geneva, sans-serif; font-size:14px; padding-left:15px; color:#FFFFFF;"> ¡Muchas Gracias! </font>
<br/>
<font style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QuieroUnperro.com </font>
</td>
</tr>
</table>



</body>
</html>
';
$this->email_model->send_email('', $datos->correo, 'Ha sido declinado tu anuncio en QUP: '.$datos->titulo, $mensaje);


        echo json_encode($aprobar);
    }

    //MENSAJES

    function guardarMensaje($accion,$mensajeID = null){
        $data = array(
            'tipoMensaje' => $this->input->post('tipoMensaje'),
            'asunto' => $this->input->post('asunto'),
            'contenido' => $this->input->post('contenido')
         );
        if($accion == 1){
        $numMensajes = count($this->admin_model->getMensajes());
        if($numMensajes == 5){
            $mensajeAnterior = $this->admin_model->topMensaje();
            $eliminarMensaje = $this->admin_model->deleteItem('mensajeID', $mensajeAnterior, 'mensajesadmin');
        }
        $this->admin_model->insertItem('mensajesadmin', $data);
        } else {
            $this->admin_model->updateItem('mensajeID', $mensajeID, $data,'mensajesadmin');
        }
        redirect('admin/principal/getMensajes');
        

    }

    function enviarMensaje(){
        $mensajeID = $this->input->post('mensajeID');
        $mensajeC = $this->admin_model->getMensaje($mensajeID);
        $destinatario = $this->input->post('destinatario');
        $usuarioID = $this->input->post('usuarioID');
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
<td colspan="7" ><p>&nbsp;  </p><font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" ></font>
</br></br><font>'.$mensajeC->contenido.'</font>
<br/>
<p> Puedes revisar este mensaje en el perfil de tu cuenta</p>
</td></tr><tr bgcolor="#6A2C91" ><td colspan="7" ><font style=" font-size:14px; padding-left:15px; color:#FFFFFF;"> Bienvenido </font>
<br/><font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font></td>
</tr>
</table>';

        if($usuarioID != 0){
           
            $this->email_model->send_email('', $destinatario, $mensajeC->asunto, $mensaje);
            $data = array(
            'tipoMensaje' => $mensajeC->tipoMensaje,
            'asunto' => $mensajeC->asunto,
            'mensaje' => $mensajeC->contenido,
            'idUsuario' => $usuarioID
            );


        $numMensajes = count($this->admin_model->getMensajesUsuario($usuarioID));
        if($numMensajes == 5){
            $mensajeAnterior = $this->admin_model->topMensajeUsuario($usuarioID);
            $eliminarMensaje = $this->admin_model->deleteItem('mensajeID', $mensajeAnterior, 'mensajes');
        }
        $this->admin_model->insertItem('mensajes', $data);

        } else {
            $usuarios = $this->admin_model->getUsers();
            if($usuarios != null){
                foreach ($usuarios as $usuario) {
                   $this->email_model->send_email('', $usuario->correo, $mensajeC->asunto, $mensaje);
                    $data = array(
                    'tipoMensaje' => $mensajeC->tipoMensaje,
                    'asunto' => $mensajeC->asunto,
                    'mensaje' => $mensajeC->contenido,
                    'idUsuario' => $usuario->idUsuario
                    );


                    $numMensajes = count($this->admin_model->getMensajesUsuario($usuario->idUsuario));
                    if($numMensajes == 5){
                        $mensajeAnterior = $this->admin_model->topMensajeUsuario($usuario->idUsuario);
                        $eliminarMensaje = $this->admin_model->deleteItem('mensajeID', $mensajeAnterior, 'mensajes');
                    }
                    $this->admin_model->insertItem('mensajes', $data);
                }
            } 
        }

         echo json_encode('true');

    }


    // USUARIOS
    function getUsuarios(){
        $data['zonageografica'] = $this->admin_model->getZonasG();
        $data['usuarios'] = $this->admin_model->getUsers();
        $this->load->view('admin/admin_usuarios_view', $data);

    }

    function buscarUsuario(){
        $tipoUsuario = $this->input->post('tipoUsuario');
        $zona = $this->input->post('zona');
        $data['usuarios'] = $this->admin_model->getUsuarios($tipoUsuario,$zona);
        $this->load->view('admin/detalle_usuarios_view', $data);
    }

    function banear(){
        $nombre = $this->input->post('nombreUB');
        $apellido = $this->input->post('apellidoUB');
        $correo = $this->input->post('correoUB');
        $idUsuario = $this->input->post('usuarioUB');
       
        $status = $this -> usuario_model -> banearUser($idUsuario, 1);

        /*$mensaje = '<link rel="stylesheet" href="'.base_url().'css/general.css" type="text/css" media="screen" /><table width="647" align="center"><tr>
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
<td colspan="7" ><p>&nbsp;  </p><font style="margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: '.$nombre.'!! </font>
</br></br><font> Tu cuenta en QUP ha sido bloqueada.</font>
<br/>
<p> Para mayor informacion contacta al administrador</p>
</td></tr><tr bgcolor="#6A2C91" ><td colspan="7" ><font style=" font-size:14px; padding-left:15px; color:#FFFFFF;"> Bienvenido </font>
<br/><font style=" font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QUP </font></td>
</tr>
</table>';*/
//$this->email_model->send_email('', $correo, 'Tu cuenta en QUP ha sido bloqueada', $mensaje);

        echo json_encode(true); 
    }


    function registrarAdmin(){
        $emailUsuario = $this->input->post('correo');
        $tipoUsuario = 0;
        $nivel = 0;

        $confirmationCode = $this->usuario_model->getNewConfirmationCode($emailUsuario);
        $recepcionCorreo = 1;
        
        $dataRegister = array(
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'telefono' => $this->input->post('telefono'),
                'correo' => $this->input->post('correo'),
                'contrasena' => $this->input->post('contrasena'),
                'recepcionCorreo' => 1, //1 - recepción de correo activa\n 0 - recepción de correo inactiva',
                'tipoUsuario' => 0, // '0 - Administrador\n1 - usuario normal\n2 - negocio\n3 - AC',
                'status'  => 0, //'0 - no activado\n1 - activo',
                'nivel' => $nivel,
                'fechaRegistro' => date('Y-m-d H:i:s', time()),
                'codigoConfirmacion' => $confirmationCode);

        
        $idUsuario = $this->usuario_model->registrarUsuario($dataRegister);
$mensaje = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notificacion-QuieroUnPerro.com</title>

</head>

<body>
<table width="647" align="center">
<tr>
<td width="231" height="129" colspan="2" valign="top">
<img src="http://quierounperro.com/quiero_un_perro/images/logo_mail.jpg"/>
</td>
</tr>
<tr>
<td>
<font style=" font-family:Verdana, Geneva, sans-serif; margin-top:100px; font-size:19px; font-weight:bold; color:#72A937;" >Hola: '.$this->input->post('nombre').' </font>
<br/>
<br/>


<font style="font-family:Verdana, Geneva, sans-serif;">Tu usuario '.$this->input->post('correo').' con la contraseña: '.$this->input->post('contrasena').' </br></br> ha sido registrado correctamente, solo falta un paso para completar tu registro. Haz clic en en el siguiente link:</font>
</br>
</br>
<font style="font-family:Verdana, Geneva, sans-serif;" color="#000066"><a href="'.base_url().'registro/activar/'.$confirmationCode.'">Activar cuenta QUP</a> </font>
<br/>

<p>Recuerda cambiar tu contraseña al ingresar por primera vez, ya que tu cuenta fue registrada por un administrador.</p>
</td>
</tr>

<tr bgcolor="#6A2C91" >
<td colspan="7" >
<font style=" font-family:Verdana, Geneva, sans-serif; font-size:14px; padding-left:15px; color:#FFFFFF;"> Bienvenido </font>
<br/>
<font style=" font-family:Verdana, Geneva, sans-serif; font-size:12px; padding-left:15px; color:#FFFFFF;"> Equipo QuieroUnPerro.com </font>
</td>
</tr>
</table>



</body>
</html>';

        if($this->email_model->send_email('', $this->input->post('correo'), 'Gracias por registrarte en QUP', $mensaje)){
            $data['response'] = true;
            $data['message'] = "Su registro se ha guardado con éxito, favor de revisar su correo para activar su usuario";
        }
        else{
            $data['response'] = false;
            $data['message'] = "Ocurrió un error intentelo nuevamente";
        }
        echo json_encode($data);
    }


    function guardarRaza(){
        $numRazas = count($this->admin_model->getContenidos(8));
        if($numRazas == 4){
            $razaAnterior = $this->admin_model->topContenido(8);
            $eliminarRaza = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'contenido');
            $eliminarFotos = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'fotoscontenido');
        }
        $data = array(
            'seccionID' => 8,
            'seccionDetalle' => 'Raza del mes',
            'fecha' => date('Y-m-d'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'mes' => $this->input->post('mes'),
            'origenes' => $this->input->post('origenes'),
            'caracter' => $this->input->post('caracter'),
            'cualidades' => $this->input->post('cualidades'),
            'colores' => $this->input->post('colores'),
            'acercaDe' => $this->input->post('acercaDe')
        );
        $contenidoID = $this->admin_model->insertItem('contenido',$data);
        //REGISTRO FOTOS
        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/raza_mes';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getRazaMes/8/'.$this->input->post('zonaRaza'));
        
    }

    function editarRaza($contenidoID){
        
        $data = array(
            'seccionID' => 8,
            'seccionDetalle' => 'Raza del mes',
            'fecha' => date('Y-m-d'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'mes' => $this->input->post('mes'),
            'origenes' => $this->input->post('origenes'),
            'caracter' => $this->input->post('caracter'),
            'cualidades' => $this->input->post('cualidades'),
            'colores' => $this->input->post('colores'),
            'acercaDe' => $this->input->post('acercaDe')
        );
        $this->admin_model->updateItem('contenidoID', $contenidoID, $data,'contenido');
        //REGISTRO FOTOS
        $imagen = $this->input->post('imagen');
        $this->admin_model->deleteFotosContenido($contenidoID);
                if( $imagen != null){
                    for($i=0;$i<=count($imagen)-1;$i++){
                        
                        if($imagen[$i] != ''){
                        $data = array(
                            'foto' => $imagen[$i], 
                            'contenidoID' => $contenidoID
                        );

                            $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
                        }
                    }
                }

        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/raza_mes';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getRazaMes/8/'.$this->input->post('zonaRaza'));
        
    }

    function guardarEvento(){
        $numRazas = count($this->admin_model->getContenidos(9));
        if($numRazas == 4){
            $razaAnterior = $this->admin_model->topContenido(9);
            $eliminarRaza = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'contenido');
            $eliminarFotos = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'fotoscontenido');
        }
        $data = array(
            'seccionID' => 9,
            'seccionDetalle' => 'Evento del mes',
            'fecha' => $this->input->post('fecha'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'lugar' => $this->input->post('lugar'),
            'horario' => $this->input->post('horario'),
            'domicilio' => $this->input->post('domicilio'),
            'texto' => $this->input->post('texto')
            
        );
        $contenidoID = $this->admin_model->insertItem('contenido',$data);
        //REGISTRO FOTOS
        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/curiosos';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getDatosCuriosos/9/'.$this->input->post('zonaRaza'));
        
    }

    function editarEvento($contenidoID){
        
        $data = array(
           'seccionID' => 9,
            'seccionDetalle' => 'Evento del mes',
            'fecha' => $this->input->post('fecha'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'lugar' => $this->input->post('lugar'),
            'horario' => $this->input->post('horario'),
            'domicilio' => $this->input->post('domicilio'),
            'texto' => $this->input->post('texto')
        );
        $this->admin_model->updateItem('contenidoID', $contenidoID, $data,'contenido');
        //REGISTRO FOTOS
        $imagen = $this->input->post('imagen');
        $this->admin_model->deleteFotosContenido($contenidoID);
                if( $imagen != null){
                    for($i=0;$i<=count($imagen)-1;$i++){
                        
                        if($imagen[$i] != ''){
                        $data = array(
                            'foto' => $imagen[$i], 
                            'contenidoID' => $contenidoID
                        );

                            $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
                        }
                    }
                }

        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/eventos';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getEventoMes/9/'.$this->input->post('zonaRaza'));
        
    }

    function guardarDato(){
        $numRazas = count($this->admin_model->getContenidos(10));
        if($numRazas == 4){
            $razaAnterior = $this->admin_model->topContenido(10);
            $eliminarRaza = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'contenido');
            $eliminarFotos = $this->admin_model->deleteItem('contenidoID', $razaAnterior, 'fotoscontenido');
        }
        $data = array(
            'seccionID' => 10,
            'seccionDetalle' => 'Dato Curioso',
            'fecha' => $this->input->post('fecha'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'texto' => $this->input->post('texto')
            
        );
        $contenidoID = $this->admin_model->insertItem('contenido',$data);
        //REGISTRO FOTOS
        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/datos_curiosos';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getDatosCuriosos/9/'.$this->input->post('zonaRaza'));
        
    }

    function editarDato($contenidoID){
        
        $data = array(
            'seccionID' => 10,
            'seccionDetalle' => 'Dato Curioso',
            'fecha' => $this->input->post('fecha'),
            'zonaID' => $this->input->post('zonaRaza'),
            'nombre' => $this->input->post('nombre'),
            'texto' => $this->input->post('texto')
            
        );
        $this->admin_model->updateItem('contenidoID', $contenidoID, $data,'contenido');
        //REGISTRO FOTOS
        $imagen = $this->input->post('imagen');
        $this->admin_model->deleteFotosContenido($contenidoID);
                if( $imagen != null){
                    for($i=0;$i<=count($imagen)-1;$i++){
                        
                        if($imagen[$i] != ''){
                        $data = array(
                            'foto' => $imagen[$i], 
                            'contenidoID' => $contenidoID
                        );

                            $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
                        }
                    }
                }

        $this->load->library('upload'); 

      
        $config['upload_path'] = 'images/datos_curiosos';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5120';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload("fotos")) { 
            $imagenes = $this->upload->get_multi_upload_data(); 
            foreach ($imagenes as $imagen) {
               $data = array(
                    'foto' => $imagen['file_name'], 
                    'contenidoID' => $contenidoID
                );

                $fotoID = $this->admin_model->insertItem('fotoscontenido',$data);
            }
        }

        redirect('admin/principal/getDatosCuriosos/9/'.$this->input->post('zonaRaza'));
        
    }


}
