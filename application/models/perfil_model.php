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


	function infoFiscal($idUsuario){
		
		$query = $this->db-> query('SELECT b.razonSocial, b.rfc, b.calle, b.noExterior, b.cp, b.municipio, b.estadoID, b.idPais
from usuario a INNER JOIN usuarioDato b ON a.idUsuario = b.idUsuario 
where a.idUsuario ='.$idUsuario);
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return null;
		}

	}

	function infoDetalleN($idUsuario){
		$query = $this->db-> query('SELECT b.nombreNegocio, b.nombreContacto, b.telefono, b.calle, b.numero, b.colonia, b.municipioC, b.idEstado, b.cp, b.correo, b.paginaWeb, b.Logo, b.descripcion, d.latitud, d.longitud
FROM usuario a, usuarioDetalle b , UbicacionUsuario D WHERE a.idUsuario = b.idUsuario AND b.idUsuario = d.idUsuarioDato AND a.idUsuario ='.$idUsuario);
		if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return null;
		}

	}
	function updateItem($itemID, $ID, $data, $tabla)
    {
        $this->db->where($itemID, $ID);
        $this->db->update($this->tablas[$tabla], $data);
        return true;
    }

    function getAnuncios($idUsuario){
	$query = $this->db->query('SELECT distinct a.NombrePaquete, c.seccionNombre, b.titulo, b.vigente, b.fechaVencimiento, b.numeroVisitas, d.idusuario
									FROM publicaciones b
									join paquete a on a.`paqueteID` = b.paqueteID
									join seccion c on c.`seccionID` = `b`.`seccion`
									join `serviciocontratado` d on `d`.`servicioID` = `b`.`servicioID`
									join `usuario` e on `e`.`idUsuario` = `d`.`idUsuario`
									where e.idusuario =  '.$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}

    }

    function getAnunciosAct($idUsuario){
    	$query = $this->db->query('SELECT distinct a.NombrePaquete, c.seccionNombre, b.titulo, b.vigente, b.fechaVencimiento, b.numeroVisitas, d.idusuario
									FROM publicaciones b
									join paquete a on a.`paqueteID` = b.paqueteID
									join seccion c on c.`seccionID` = `b`.`seccion`
									join `serviciocontratado` d on `d`.`servicioID` = `b`.`servicioID`
									join `usuario` e on `e`.`idUsuario` = `d`.`idUsuario`
									AND b.vigente = 1
									And e.idusuario ='.$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}

    }

    function getAnunciosInAct($idUsuario){
    	$query = $this->db->query('SELECT distinct a.NombrePaquete, c.seccionNombre, b.titulo, b.vigente, b.fechaVencimiento, b.numeroVisitas, d.idusuario
									FROM publicaciones b
									join paquete a on a.`paqueteID` = b.paqueteID
									join seccion c on c.`seccionID` = `b`.`seccion`
									join `serviciocontratado` d on `d`.`servicioID` = `b`.`servicioID`
									join `usuario` e on `e`.`idUsuario` = `d`.`idUsuario`
									AND b.vigente = 0
									And e.idusuario ='.$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}

    }

    function getMensajes($idUsuario){
    	$query = $this->db->query('SELECT mensajeID,asunto, mensaje FROM mensajes where idusuario ='.$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}


    }

    function getCupones($idUsuario){
    	$query = $this->db->query('SELECT b.tipocupon, b.descripcion, b.valor, b.vigencia
		from serviciocontratado a,cuponadquirido b
		where b.servicioID = a.servicioID
		and a.idUsuario ='.$idUsuario);
		if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}

    }

    function getFavoritos($idUsuario){
    	$query = $this->db->query('SELECT * from favoritos d, publicaciones a, serviciocontratado b, usuario c, estado e
			where a.servicioID = b.servicioID
			and b.idUsuario = c.idUsuario
			and d.publicacionID = a.publicacionID
			and a.estadoID = e.estadoID
			and d.idusuario =' .$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }

    function getFacturas($idUsuario){
    	$query = $this->db->query('select *
from `compradetalle`
where `compradetalle`.`compraID` in (select compraID
from compra
where compra.`usuarioID` ='.$idUsuario.')');
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }

    function getCompras($idUsuario){
    	$query = $this->db->query('select *
from compra
where compra.`usuarioID` ='.$idUsuario);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }
    function getRazas(){
    	$query = $this->db->query('SELECT * FROM raza');
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }


    function getPublicacion($publicacionID){
    	$query = $this->db->query('SELECT * FROM publicaciones where publicacionID = '.$publicacionID);
    	if ($query->num_rows() == 1){
			return $query->row();
		} else {
			return null;
		}
    }

    function getImagenes($publicacionID){
    	$query = $this->db->query('SELECT * FROM fotospublicacion where publicacionID = '.$publicacionID);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }

     function getVideos($publicacionID){
    	$query = $this->db->query('SELECT * FROM videos where publicacionID = '.$publicacionID);
    	if ($query->num_rows() >= 1){
			return $query->result();
		} else {
			return null;
		}
    }

    function deleteVideos($id){
        $this -> db -> where('publicacionID', $id);
        $this -> db -> delete($this -> tablas['videos']);
        return true;
    }

    function deleteFotos($id){
        $this -> db -> where('publicacionID', $id);
        $this -> db -> delete($this -> tablas['fotospublicacion']);
        return true;
    }

}

?>
