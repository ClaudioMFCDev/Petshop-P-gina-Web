<?php

/** 
* Class Usuario_model
*
* @package Models
*
* @author CCMF
*/

class Usuario_model extends CI_Model

{

	function __constructor()
	{

		parent:: __constructor();
	}

	public function guardar_usuario($data){

		$this->db->insert('personas', $data);	
	}

	public function buscar_usuario($usuario, $contrasenia){

		$this->db->select('*');
		$this->db->from('personas');
		$this->db->where('mail', $usuario);
		$this->db->where('password', $contrasenia);
		$query = $this->db->get();
		$resultado = $query->row();
		return $resultado;

	}

	public function select_clientes(){

		$this->db->select('*');
		$this->db->from('personas');
		$this->db->where('perfil_id', 1);

		$query = $this->db->get();	
		return $query->result();
	}



	public function actualizar_usuario($data, $id){

		$this->db->where('id_persona', $id);
		$this->db->update('personas', $data);
	}
	



}