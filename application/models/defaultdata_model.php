<?php
if (!defined('BASEPATH'))
	die("No hay acceso directo a este script");

/*
 * Modelo para manejar datos defaults
 */

class Defaultdata_model extends CI_Model {

	var $tablas = array();

	function __construct() {
		parent::__construct();
		$this -> load -> config('tables', TRUE);
		$this -> tablas = $this -> config -> item('tablas', 'tables');
	}
  

	function getEstados() {
		return $this -> db -> get($this -> tablas['estado']) -> result();
	}
    
    
	
    function getPaises(){
        $this -> db -> order_by('nombrePais', 'asc');
        $query = $this -> db -> get($this-> tablas['pais']);
        if($query -> num_rows() > 0)
            return $query -> result();
        return null;
    }

    function getVisitas(){
    	$query = $this->db->get($this-> tablas['visita']);
    	$visitas = $query->row();
    	return $visita = $visitas->numeroVisitas;
    	
    }

    function registroVisita($data){
    	$this -> db -> where('idVisita', 1);
        $this -> db -> update($this -> tablas['visita'], $data);
        return true;
    }
	
    function getUsers(){
        $query = $this -> db -> get($this -> tablas['usuario']);
        return $query -> result();

    }

    function getAnnounces(){
        $query = $this -> db -> get($this -> tablas['publicaciones']);
        return $query -> result();
    }

    function getTable($tabla) {
        return $this -> db -> get($this -> tablas[$tabla]) -> result();
    }

    function getTablaDetalle($tabla, $tablaDetalle,$id1, $id2){
        
        $this->db->join($this -> tablas[$tablaDetalle],$this -> tablas[$tablaDetalle].'.'.$id1.' = '.$this -> tablas[$tabla].'.'.$id2,'left');
        $query = $this -> db -> get($this -> tablas[$tabla]);
        return $query -> result();

    }

    function getPaquetes($tipopaquete = NULL) {
        /**
         * Se realiza asi el select por que en detallepaquete y detallecupon exite la columna vigencia y se reemplaza 
         * la columna vigencia de detallepaquete por la columna vigencia de detallecupon
         */
        $this->db->select('p.paqueteID,
      p.nombrePaquete,
       dp.detalleID,
       dp.cantFotos,
       dp.caracteres, 
       dp.vigencia,
       dp.cupones,
       dp.videos,
       dp.precio,
       dp.tipoPaquete,
       c.cuponID,
       c.nombreCupon,
       cd.cuponDetalleID,
       cd.descripcion,
       cd.valor,
       cd.vigencia as vigenciaCupon,
       cd.tipoCupon');
        
        $this->db->from('paquete p');
        $this->db->join('detallepaquete dp', 'p.paqueteID=dp.paqueteID');
        $this->db->join('cupon c', 'p.paqueteID=c.paqueteID');
        $this->db->join('cupondetalle cd', 'c.cuponID=cd.cuponID');
        
        if(!is_null($tipopaquete)){
            $this->db->where('dp.tipoPaquete', $tipopaquete);
        }

        $resultSet = $this->db->get();

        return $resultSet->result();
    }

    function getRazas(){
        return $this->db->get($this->tablas['raza'])->result();
    }

    function getCupones(){
        $this->db->from('cupon c');
        $this->db->join('cupondetalle cd', 'c.cuponID=cd.cuponID');
        return $this->db->get()->result();
    }

    function getBanner(){
       return $this->db->get('banner')->result(); 
    }
    
    function getGiros(){
        return $this->db->get('giro')->result();
    }
}
?>
