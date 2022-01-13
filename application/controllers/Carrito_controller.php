<?php
/**
* Class Carrito_controller
*
* @package Controllers
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
		
	}

	public function ver_carrito(){

		$data['titulo'] = 'Carrito';

		if(!$this->cart->contents()) {

			$data['messaje'] = 'No hay productos en su carrito';
		}else{

			$data['messaje'] = 'Productos agregados';
		}

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/carrito_view', $data);
		$this->load->view('Plantillas/footer');
	}

	public function agregar_carrito() {

		$data = array(
			'id' => $this->input->post('id'),
			'options' => $this->input->post('categoria'),
			'name' => $this->input->post('titulo'),
			'price' => $this->input->post('precio'),
			'qty' => 1
			 );

		$this->cart->insert($data);

		redirect('carrito');
	}

	function borrar ($id){

		if ($id == "all") {
			$this->cart->destroy();
		}else{

			$data = array(
				'rowid' => $id,
				'qty' => 0,
				 );
			$this->cart->update($data);
		}
		redirect('Carrito_controller/ver_carrito');
	}
}