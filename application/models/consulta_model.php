<?php

/** 
* Class Consulta_model
*
* @package Models
*
* @author CCMF
*/

class Consulta_model extends CI_Model

{

	function __constructor()
	{

		parent:: __constructor();
	}


	public function guardar_consulta($data){

		$this->db->insert('mensajes', $data);	
	}

	public function select_mensajes(){

		$this->db->select('*');
		$this->db->from('mensajes');
		$this->db->join('mensajes_categoria', 'mensajes_categoria.id_categoria=mensajes.motivo');
		$query = $this->db->get();	
		return $query->result();
	}

	public function select_mensajes_cat(){

		$query = $this->db->get('mensajes_categoria');
		return $query->result();		

	}

	//Cambia estado de leido a no leido
	public function actualizar_mensaje($data, $id){

		$this->db->where('id_consulta', $id);
		$this->db->update('mensajes', $data);
	}
	


}