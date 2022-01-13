<?php
/**
* Class Consultas_controller
*
* @package Controllers
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
	}


	public function insertar_consulta(){

		$consulta = array (
			'nyap' => $this->input->post('nyap'), 
			'mail' => $this->input->post('mail'),
			'motivo' => $this->input->post('motivo'),
			'descripcion' => $this->input->post('descripcion'),
			'estado_mensaje' => 1
		);

		$this->load->model('consulta_model');
		$this->consulta_model->guardar_consulta($consulta);
		//Messaje de consulta registrada
		echo "<script>alert('Mensaje enviado, gracias!'); </script>";
		redirect('index', 'refresh');
	}


	public function registrar_consulta(){

		$this->form_validation->set_rules('nyap', 'nombre y apellido', 'required');
		$this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('valid_email', 'El email no es correcto');

		if ($this->form_validation->run() == FALSE) {

			redirect ('consultas');
		}else{

			$this->insertar_consulta();
		}
	}


	public function listar_mesajes(){ 

		$this->load->model('consulta_model');
		$data['mensajes'] = $this->consulta_model->select_mensajes();
		$data['titulo'] = 'Agregar balanceado';
		
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/listar_mensajes_view');
		$this->load->view('Plantillas/footer');
	}	

	public function fue_leido($id){

		$data = array('estado_mensaje' => '2' );

		$this->load->model('consulta_model');
		$this->consulta_model->actualizar_mensaje($data, $id);
		redirect('adm_mensajes');
	}

	public function fue_noLeido($id = NULL){

		$data = array('estado_mensaje' => '1' );

		$this->load->model('consulta_model');
		$this->consulta_model->actualizar_mensaje($data, $id);
		redirect('adm_mensajes');
	}

}