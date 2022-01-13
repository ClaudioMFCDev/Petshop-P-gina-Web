<?php
/**
* Class Ventas_model
*
* @package Models
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	function __constructor()
	{

		parent:: __constructor();
	
	}

	public function guardar_venta($data){

		$this->db->insert('ventas', $data);
	}

	public function guardar_detalle_venta($data){

		$this->db->insert('detalle_venta', $data);
	}

	public function select_ventas(){

		$this->db->select('*');
		$this->db->from('ventas');
		//$this->db->join('detalle_venta', 'detalle_venta.id_venta=ventas.id_venta');
		$query = $this->db->get();	
		return $query->result();		
	}

	public function get_detalle_venta_id($id){

		$this->db->select('*');
		$this->db->from('detalle_venta');
		$this->db->where('venta_id', $id);
		//$this->db->join('detalle_venta', 'detalle_venta.id_venta=ventas.id_venta');
		$query = $this->db->get();	
		return $query->result();		
	}	

	


}//fin modelo