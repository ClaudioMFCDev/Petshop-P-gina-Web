<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();

			if (!$this->session->userdata('login')) {
			redirect('inicio_sesion');
			}
	}

		
	public function index_admin()
	{
		$data['titulo']='Administrador';
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/adm_view');
		$this->load->view('Plantillas/footer');

	}

	public function ver_mensajes(){

		$this->load->model('consulta_model');
		$data['titulo'] = 'Mensajes';

		$data['mensajes'] = $this->consulta_model->select_mensajes();

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/listar_mensajes_view');
		$this->load->view('Plantillas/footer');		

	}

		public function ver_ventas(){

		$this->load->model('ventas_model');
		$data['titulo'] = 'Lista Ventas';

		$data['las_ventas'] = $this->ventas_model->select_ventas();

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/ventas_view');
		$this->load->view('Plantillas/footer');		

	}
		//min-height: 80vh;
		public function ver_detalle_venta($id){

		$this->load->model('ventas_model');
		$data['titulo'] = 'Lista Detalle';

		$data['detalle'] = $this->ventas_model->get_detalle_venta_id($id);

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/detalles_venta_view');
		$this->load->view('Plantillas/footer');		

	}

	public function ver_clientes(){

		$this->load->model('usuario_model');
		$data['titulo'] = 'Clientes';

		$data['clientes'] = $this->usuario_model->select_clientes();

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/listar_usuarios_view');
		$this->load->view('Plantillas/footer');		

	}			


}
