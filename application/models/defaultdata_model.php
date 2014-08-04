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

    function getPaquetes() {
        $this->db->from('paquete p');
        $this->db->join('detallepaquete dp', 'p.paqueteID=dp.paqueteID');

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