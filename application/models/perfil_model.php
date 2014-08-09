<?php
if (!defined('BASEPATH'))
    die("No hay acceso directo a este script");

/*
 * Modelo para manejar datos defaults
 */

class Perfil_model extends CI_Model{
	var $tablas = array();

	function __construct(){
		parent::__construct();
		$this->load->config('tables', TRUE);
		$this->tablas = $this->config->item('tablas', 'tables');
	}


	function myInfo($idUsuario){
		
		$this->db->select($this->tablas['usuario'].'.*,'.$this->tablas['usuariodato'].'.*,'.$this->tablas['usuariodetalle'].'.*');
		$this->db->join($this->tablas['usuariodato'],$this->tablas['usuariodato'].'.idUsuario = '.$this->tablas['usuario'].'.idUsuario','left');
		$this->db->join($this->tablas['usuariodetalle'],$this->tablas['usuariodetalle'].'.idUsuario = '.$this->tablas['usuario'].'.idUsuario','left');
		$this->db->where($this->tablas['usuario'].'.idUsuario', $idUsuario);
		$query = $this->db->get($this->tablas['usuario']);
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return null;
		}
	}

	function myInfoR($idUsuario){
		
		$this->db->select($this->tablas['usuario'].'.*,'.$this->tablas['usuariodato'].'.idUsuarioDato,'.$this->tablas['usuariodetalle'].'.idUsuarioDetalle');
		$this->db->join($this->tablas['usuariodato'],$this->tablas['usuariodato'].'.idUsuario = '.$this->tablas['usuario'].'.idUsuario','left');
		$this->db->join($this->tablas['usuariodetalle'],$this->tablas['usuariodetalle'].'.idUsuario = '.$this->tablas['usuario'].'.idUsuario','left');
		$this->db->where($this->tablas['usuario'].'.idUsuario', $idUsuario);
		$query = $this->db->get($this->tablas['usuario']);
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return null;
		}
	}





}

?>