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
                // $data['error'] = $imagen['error'];
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


        $this->load->view("admin/anuncios_view", $data);
    }

    function anuncios_lista() {
        $aprobado = $this->input->post('validacion_admin');

        switch ($aprobado) {
            case "e_aprobacion":
                $aprobado = 0;
                break;
            case "aprobados":
                $aprobado = 1;
                break;
            case "rechazados":
                $aprobado = 2;
                break;
            default:
                $aprobado = 0;
        }

        $zonas = $this->input->post('zonas');

        if (empty($zonas) || $zonas == null) {
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
                $seccion = 1;
        }

        echo json_encode($this->admin_model->getAnuncios($aprobado, $seccion, $zonas));
    }


}