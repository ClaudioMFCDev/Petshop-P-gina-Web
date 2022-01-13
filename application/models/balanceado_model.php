<?php

/** 
* Class Balanceado_model
*
* @package Models
*
* @author CCMF
*/

class Balanceado_model extends CI_Model

{

	function __constructor()
	{

		parent:: __constructor();
	}


	//GUARDAR
	public function guardar_bal($data){

		$this->db->insert('balanceado', $data);
	}
	//TRAER CATEGORIAS
	public function select_categoria_bal(){

		$query = $this->db->get('producto_categoria');
		return $query->result();
	}

		public function select_categoria_tamanio(){

		$query = $this->db->get('tamanio_categoria');
		return $query->result();
	}

	public function select_categoria_etapa(){

		$query = $this->db->get('etapa_categoria');
		return $query->result();
	}	
	//TRAER TODOS LOS PRODUCTOS
		public function select_balanceado(){
			//
		$this->db->select('*');

		$this->db->from('balanceado');
		$this->db->join('producto_categoria', 'producto_categoria.id_categoria=balanceado.categoria');

		$this->db->join('etapa_categoria', 'etapa_categoria.id_etapa_categoria=balanceado.etapa_mascota');

		$this->db->join('tamanio_categoria', 'tamanio_categoria.id_tamanio_categoria=balanceado.tamanio_mascota');

		$query = $this->db->get();
		return $query->result();

	}

	public function select_balanceado_id($id){

		$this->db->select('*');
		$this->db->from('balanceado');
		$this->db->where('id_producto', $id);				

		$query = $this->db->get();	
		return $query->result();
	}

	public function select_balanceado_id_row($id){

		$this->db->select('*');
		$this->db->from('balanceado');
		$this->db->where('id_producto', $id);				

		$query = $this->db->get();	
		return $query->row();
	}	

	//Filtro por categoria
	public function select_balanceado_cat($cat){

		$this->db->select('*');
		$this->db->from('balanceado');
		$this->db->where('categoria', $cat);

		$this->db->join('producto_categoria', 'producto_categoria.id_categoria=balanceado.categoria');

		$this->db->join('etapa_categoria', 'etapa_categoria.id_etapa_categoria=balanceado.etapa_mascota');

		$this->db->join('tamanio_categoria', 'tamanio_categoria.id_tamanio_categoria=balanceado.tamanio_mascota');					

		$query = $this->db->get();
		return $query->result();

	}

	public function actualizar_bal($data, $id){

		$this->db->where('id_producto', $id);
		$this->db->update('balanceado', $data);
	}

	//TRAE SOLO PRODUCTOS ACTIVOS
	public function get_balanceado(){

		$this->db->select('*');
		$this->db->from('balanceado');



		//$this->db->join('stock>', 0);
		$this->db->join('producto_categoria', 'producto_categoria.id_categoria=balanceado.categoria');

		$this->db->join('etapa_categoria', 'etapa_categoria.id_etapa_categoria=balanceado.etapa_mascota');

		$this->db->join('tamanio_categoria', 'tamanio_categoria.id_tamanio_categoria=balanceado.tamanio_mascota');

		$query = $this->db->get();
		return $query->result();
	}





}