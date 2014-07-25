<?php
if (!defined('BASEPATH'))
	die("No hay acceso directo a este script");

/*
 * Modelo para manejar datos defaults
 */

class Admin_model extends CI_Model {

	var $tablas = array();

	function __construct() {
		parent::__construct();
		$this -> load -> config('tables', TRUE);
		$this -> tablas = $this -> config -> item('tablas', 'tables');
	}
  

	function getZonasG(){
        return $this -> db -> get($this -> tablas['zonageografica']) -> result();
    }

    function insertBanner($data){
    	$this -> db -> insert($this -> tablas['banner'], $data);
        $bannerID = $this -> db -> insert_id();               
                return $bannerID;
    }

    function getBannerC($seccionID,$zonaID){
    	$this->db->where('seccionID', $seccionID);
    	$this->db->where('zonaID', $zonaID);
    	//$this->db->where('posicion', $posicion);
    	$query = $this->db->get($this -> tablas['banner']);
    	if($query -> num_rows() > 0)
            return $query -> result();
        return null;
	}

	function getBanner(){
    	$query = $this->db->get($this -> tablas['banner']);
    	if($query -> num_rows() > 0)
            return $query -> result();
        return null;
	}

    function deleteContent($idContent,$idZona, $idSeccion,$posicion){
        if($idContent != 0){
           $this -> db -> where('bannerID', $idContent);
           $this -> db -> delete($this -> tablas['banner']);
        } else {
          $this -> db -> where('zonaID', $idZona);
          $this -> db -> where('seccionID', $idSeccion);
          $this -> db -> where('posicion', $posicion);
          $this -> db -> delete($this -> tablas['banner']);
        }

        
    }

    function updateBannerText($bannerID,$data){
        $this -> db -> where('bannerID',$bannerID);
        $this -> db -> update($this -> tablas['banner'], $data);
        return true;
    }

    // TIENDA 

    function getCatalogoProductos(){
        $this->db->select('catalogoproductos.*, (select foto from fotostienda where fotostienda.productoID = catalogoproductos.productoID group by fotostienda.productoID limit 1) as foto');
        
        $query = $this -> db -> get($this -> tablas['catalogoproductos']);
        return $query -> result();

    }

    function insertItem($tabla, $data){
        $this -> db -> insert($this -> tablas[$tabla], $data);
        $itemID = $this -> db -> insert_id();               
                return $itemID;
    }

    function updateItem($itemID,$ID,$data,$tabla){
        $this -> db -> where($itemID,$ID);
        $this -> db -> update($this -> tablas[$tabla], $data);
        return true;
    }

    function updateProduct($data,$idUsuario,$productoID,$talla,$color){
        $this -> db -> where('usuarioID',$idUsuario);
        $this -> db -> where('productoID',$productoID);        
        $this->db->where('talla',$talla);
        $this->db->where('color',$color);
        $this -> db -> update($this -> tablas['carrito'], $data);
        return true;
    }

    function deleteItem($idTabla,$id,$tabla){
        $this -> db -> where($idTabla, $id);
        $this -> db -> delete($this -> tablas[$tabla]);
        return true;
    }

    function getSingleItem($idTabla,$id,$tabla){
        $this->db->where($idTabla,$id);
        $query = $this -> db -> get($this -> tablas[$tabla]);
        if($query->num_rows() == 1){
            return $query -> row();
        } elseif($query->num_rows() > 1){
            return $query -> result();
        } else{
            return null;
        }   
    }

    function getSingleItems($idTabla,$id,$tabla){
        $this->db->where($idTabla,$id);
        $query = $this -> db -> get($this -> tablas[$tabla]);
        if($query->num_rows() >= 1){
            return $query -> result();
        } 
    }


    function getProducto($productoID){
        $this->db->where('productoID',$productoID);
        $query = $this -> db -> get($this -> tablas['catalogoproductos']);
        if($query->num_rows() == 1){
            return $query -> row();
        } else{
            return null;
        }        
    }

    function getCarrito($usuarioID){
       $this->db->select('carrito.*, (select foto from fotostienda where fotostienda.productoID = carrito.productoID group by fotostienda.productoID limit 1) as foto');
       $this->db->where('usuarioID',$usuarioID);
       //$this->db->join($this -> tablas['fotostienda'],$this -> tablas['fotostienda'].'.productoID = '.$this -> tablas['carrito'].'.productoID','left');
       //$this->db->group_by($this -> tablas['fotostienda'].'.foto');
       $query = $this -> db -> get($this -> tablas['carrito']);
        return $query -> result(); 
    }

    function getCarritoProducto($usuarioID, $productoID,$talla,$color){
       $this->db->where('usuarioID',$usuarioID);
       $this->db->where('productoID',$productoID);
       $this->db->where('talla',$talla);
       $this->db->where('color',$color);
       $query = $this -> db -> get($this -> tablas['carrito']);
        return $query -> row(); 
    }

    function getAnuncios($aprobado = null, $seccion = null, $zona = null)
    {
        $this->db->select("*");
        $this->db->from("publicaciones p");
        $this->db->join("fotospublicacion fp", "p.detalleID=fp.detalleID AND p.paqueteID=fp.paqueteID AND p.publicacionID=fp.publicacionID AND p.servicioID=fp.servicioID");
        $this->db->join("serviciocontratado sc", "p.detalleID=sc.detalleID AND p.paqueteID=sc.paqueteID AND p.servicioID=sc.servicioID");
        $this->db->join("detallepaquete dp", "sc.paqueteID=dp.paqueteID AND sc.detalleID=dp.detalleID");
        $this->db->join("raza r", "p.razaID=r.razaID");
        /*
         * No se debe relacionar porque puede traer uno a n links debe traerse por ajax
        $this->db->join("videos v", "p.detalleID=v.detalleID AND p.paqueteID=v.paqueteID AND p.publicacionID=v.publicacionID AND p.servicioID=v.servicioID");
        */
        $this->db->join("paquete pa", "dp.paqueteID=pa.paqueteID");
        $this->db->join("seccion se", "p.seccion=se.seccionID");
        $this->db->join("usuario u", "sc.idUsuario=u.idUsuario");

        if ($zona != null) {
            $this->db->join("usuariodato ud", "u.idUsuario=ud.idUsuario");
            $this->db->join("ubicacionusuario uu", 'ud.idUsuarioDato=uu.idUsuarioDato');
            $this->db->where("uu.zonageograficaID", $zona);
        }

        if ($aprobado != null) {
            $this->db->where("p.aprobada", $aprobado);
        }

        if ($seccion != null) {
            $this->db->where("p.seccion", $seccion);
        }

        $resultSet = $this->db->get();

        return array('data' => $resultSet->result(), 'count'=> $resultSet->num_rows);

    }

    public function getCountSalePets()
    {
        $this->db->from("publicaciones");
        $this->db->where("seccion", 2);

        return $this->db->count_all_results();
    }

    public function getCountCrossPets(){
        $this->db->from("publicaciones");
        $this->db->where("seccion", 3);

        return $this->db->count_all_results();
    }

    public function getCountAdoptionPets() {
        $this->db->from("publicaciones");
        $this->db->where("seccion", 6);

        return $this->db->count_all_results();
    }

    public function getCountLostPets() {
        $this->db->from("publicaciones");
        $this->db->where("seccion", 7);

        return $this->db->count_all_results();
    }

    public function getCountDirectory() {
        $this->db->from("publicaciones");
        $this->db->where("seccion", 4);

        return $this->db->count_all_results();
    }



}
?>