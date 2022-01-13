<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
	}

	
	
	public function index()
	{	
		$var=3;//pido producto id_categoria=3;
		$this->load->model('balanceado_model');
		$data['canes'] = $this->balanceado_model->select_balanceado_cat($var);
		$data['titulo'] = 'Catálogo de productos';

		$data['titulo']='Patitas';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/home_view.php');
		$this->load->view('Plantillas/footer.php');

	}

	/*public function catalogo_bal_sssssss(){

		$this->load->model('balanceado_model');
		$data['producto'] = $this->balanceado_model->get_balanceado();
		$data['titulo'] = 'Catálogo de productos';


		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/catalogo_view');
		$this->load->view('Plantillas/footer');
	}*/


	public function perros()
	{
		$data['titulo']='Catalogo de Perros';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/perros_view.php');
		$this->load->view('Plantillas/footer.php');

	}

	public function gatos()
	{
		$data['titulo']='Gatos';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/gatos_view.php');
		$this->load->view('Plantillas/footer.php');

	}

	public function aves()
	{
		$data['titulo']='Aves';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/aves_view.php');
		$this->load->view('Plantillas/footer.php');

	}

	public function roedores()
	{
		$data['titulo']='Roedores';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/roedores_view.php');
		$this->load->view('Plantillas/footer.php');

	}



	public function ofertas()
	{
		$data['titulo']='Ofertas';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/ofertas_view.php');
		$this->load->view('Plantillas/footer.php');

	}


	public function nosotros()
	{
		$data['titulo']='Nosotros';
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/nosotros_view');
		$this->load->view('Plantillas/footer');

	}

	public function blog()
	{
		$data['titulo']='Blog';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/blog_view.php');
		$this->load->view('Plantillas/footer.php');

	}

	public function contacto()
	{

		$this->load->model('consulta_model');
		$data['motivos'] = $this->consulta_model->select_mensajes_cat();
		$data['titulo'] = 'Catálogo de productos';

		$data['titulo']='Contacto';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/contacto_view.php');
		$this->load->view('Plantillas/footer.php');

	}

		public function tyc()
	{
		$data['titulo']='Términos y condiciones';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/tyc_view.php');
		$this->load->view('Plantillas/footer.php');

	}

		public function entregas()
	{
		$data['titulo']='Formas de entrega';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/entregas_view.php');
		$this->load->view('Plantillas/footer.php');

	}	

}
