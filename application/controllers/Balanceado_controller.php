<?php
/**
* Class Balanceado_controller
*
* @package Controllers
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Balanceado_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
	


		if (!$this->sesssion->userdata('login')){

			redirect('inicio_sesion');
		}	
	}


	public function form_agregar_bal(){

		$this->load->model('balanceado_model');

		$data['cate_bal'] = $this->balanceado_model->select_categoria_bal();
		$data['cate_tamanio'] = $this->balanceado_model->select_categoria_tamanio();
		$data['cate_etapa'] = $this->balanceado_model->select_categoria_etapa();

		$data['titulo'] = 'Agregar balanceado';

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/agregar_bal_view');
		$this->load->view('Plantillas/footer');		
	}


	public function registrar_bal(){

		$this->form_validation->set_rules('marca', 'Marca', 'required');
		$this->form_validation->set_rules('tamanio_mascota', 'Tamaño de mascota', 'required');
		$this->form_validation->set_rules('etapa_mascota', 'Etapa de vida', 'required');
		$this->form_validation->set_rules('imagen', 'Seleccionar una imagen', 'callback_validar_imagen');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->form_validation->set_rules('categoria', 'Seleccionar una categoria', 'required|callback_select_validate');
		$this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
		$this->form_validation->set_rules('stock', 'Marca', 'required|integer');


		$this->form_validation->set_message('numeric', 'Debe ingresar valores numéricos');
		$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');



		if ($this->form_validation->run() == FALSE) {
			
			$this->form_agregar_bal();
			
		} else {

			$this->guardar_bal();
		}
	}


	function validar_imagen($imagen){

		//verifica que se ingreso una imagen.
		$nombre_imagen = $_FILES['imagen']['name'];//obtiene el nombre de la imagen
		if(empty($nombre_imagen)){

			$this->form_validation->set_message('validar_imagen', 'Seleccionar una imagen');
			return false;
		} else {

			return true;
		}

	}


	function select_validate($categoria){

		//verifica que se selecciono una categoria del libro.
		if ($categoria == '0') {
			$this->form_validation->set_message('select_validate', 'Seleccione una categoria');
			return false;
		} else {

			return true;
		}
	}

	function guardar_bal(){

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
		$config['remove_spaces'] = TRUE;
		$config['max_size'] = '1024';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('imagen')) {
			echo "<script type=\"text/javascript\">alert('No se pudo cargar el archivo');</script>";
			$this->form_agregar_bal();
		} else {

			$data = array(
				'marca' => $this->input->post('marca'),
				'tamanio_mascota' => $this->input->post('tamanio_mascota'),
				'etapa_mascota' => $this->input->post('etapa_mascota'),
				'imagen' => $_FILES['imagen']['name'],
				'precio' => $this->input->post('precio'),
				'stock' => $this->input->post('stock'),
				'descripcion' => $this->input->post('descripcion'),
				'categoria' => $this->input->post('categoria'),
				'estado' => 1
				 );

				$this->load->model('balanceado_model');
				$this->balanceado_model->guardar_bal($data);

				echo "<script>alert('Producto agregado exitosamente!'); </script>";
				redirect('adm_agregar', 'refresh');
		}

	}
		//Metodo solo admin
	public function catalogo_id(){

		$idprod = array('id_producto' => 'idprod' );

		$this->load->model('balanceado_model');
		$data['producto'] = $this->balanceado_model->select_balanceado_id($idprod);
		$data['cate_prod'] = $this->balanceado_model->select_categoria_bal();
		$data['titulo'] = 'Catálogo de productos';

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');	
		$this->load->view('Contenido/catalogo_view');
		$this->load->view('Plantillas/footer');

	}	


	public function el_catalogo(){

		$this->load->model('balanceado_model');
		$data['producto'] = $this->balanceado_model->get_balanceado();
		$data['cate_prod'] = $this->balanceado_model->select_categoria_bal();
		$data['titulo'] = 'Catálogo de productos';

		$this->load->view('Plantillas/header', $data);

		//Nav o navAdmin
		if (($this->session->userdata('perfil') == 2)) {
		$this->load->view('Plantillas/nav_admin');	
		}else{

			$this->load->view('Plantillas/nav');
		}

		$this->load->view('Contenido/catalogo_view');
		$this->load->view('Plantillas/footer');

	}

	public function el_catalogo_x_cat($cat){

		if ($cat == 0) {
			redirect('el_catalogo');
		}

		$this->load->model('balanceado_model');
		$data['producto'] = $this->balanceado_model->select_balanceado_cat($cat);
		$data['cate_prod'] = $this->balanceado_model->select_categoria_bal();
		$data['titulo'] = 'Catálogo de productos';

		$this->load->view('Plantillas/header', $data);

		//Nav o navAdmin
		if (($this->session->userdata('perfil') == 2)) {
		$this->load->view('Plantillas/nav_admin');	
		}else{

			$this->load->view('Plantillas/nav');
		}

		$this->load->view('Contenido/catalogo_view');
		$this->load->view('Plantillas/footer');

	}	

	/*public function catalogo_cat($cat){

		$this->load->model('balanceado_model');
		$data['catalogo_x_cat'] = $this->balanceado_model->select_balanceado_cat($cat);
		$data['titulo'] = 'Catálogo';

		$this->load->view('Plantillas/header', $data);
		
		$this->load->view('Plantillas/nav');
		$this->load->view('Contenido/catalogo_view');		
		$this->load->view('Plantillas/footer');

	}*/	

	public function gestionar_bal(){

		$this->load->model('balanceado_model');
		$data['balanceado'] = $this->balanceado_model->select_balanceado();
		$data['titulo'] = 'Gestionar Balanceado';


		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/gestionar_bal_view');
		$this->load->view('Plantillas/footer');
	}

	public function eliminar_bal($id){

		$data = array('estado' => '0' );

		$this->load->model('balanceado_model');
		$this->balanceado_model->actualizar_bal($data, $id);
		redirect('Balanceado_controller/gestionar_bal');
	}

	public function activar_bal($id = NULL){

		$data = array('estado' => '1' );

		$this->load->model('balanceado_model');
		$this->balanceado_model->actualizar_bal($data, $id);
		redirect('Balanceado_controller/gestionar_bal');
	}

	public function editar_bal($id){

		$data['titulo'] = 'Editar Balanceado';
		$this->load->model('balanceado_model');
		$balanceado = $this->balanceado_model->select_balanceado_id($id);

		$data['cate_bal'] = $this->balanceado_model->select_categoria_bal();
		$data['cate_tamanio'] = $this->balanceado_model->select_categoria_tamanio();
		$data['cate_etapa'] = $this->balanceado_model->select_categoria_etapa();

		


		foreach ($balanceado as $row) {
			$data['id_producto'] = $row->id_producto;
			$data['categoria'] = $row->categoria;
			$data['marca'] = $row->marca;
			$data['tamanio_mascota'] = $row->tamanio_mascota;
			$data['etapa_mascota'] = $row->etapa_mascota;
			$data['imagen'] = $row->imagen;
			$data['precio'] = $row->precio;
			$data['stock'] = $row->stock;
			$data['descripcion'] = $row->descripcion;
			
			$data['estado'] = $row->estado;
		}

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/nav_admin');
		$this->load->view('Contenido_adm/editar_bal_view');
		$this->load->view('Plantillas/footer');

	}

	public function actualizar_bal($id){

		//VALIDAR LOS DATOS INGRESADOS

		$this->form_validation->set_rules('marca', 'Marca', 'required');
		$this->form_validation->set_rules('tamanio_mascota', 'Tamaño de mascota', 'required');
		$this->form_validation->set_rules('etapa_mascota', 'Etapa de vida', 'required');
		$this->form_validation->set_rules('imagen', 'Seleccionar una imagen', 'callback_validar_imagen');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->form_validation->set_rules('categoria', 'Seleccionar una categoria', 'required|callback_select_validate');
		$this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
		$this->form_validation->set_rules('stock', 'Marca', 'required|integer');


		$this->form_validation->set_message('numeric', 'Debe ingresar valores numéricos');
		$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');



		if ($this->form_validation->run() == FALSE) {
			
			$this->editar_bal($id);
			
		}

			$imagen = $_FILES['imagen']['name'];

			if (!empty($imagen)) {

						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
						$config['remove_spaces'] = TRUE;
						$config['max_size'] = '1024';

						$this->load->library('upload', $config);
						$this->upload->do_upload('imagen');

						$data = array(
							
							'marca' => $this->input->post('marca'),
							'tamanio_mascota' => $this->input->post('tamanio_mascota'),
							'etapa_mascota' => $this->input->post('etapa_mascota'),
							'imagen' => $imagen,
							'precio' => $this->input->post('precio'),
							'stock' => $this->input->post('stock'),
							'descripcion' => $this->input->post('descripcion'),
							'categoria' => $this->input->post('categoria')
							
						);

						$this->load->model('balanceado_model');
						$this->balanceado_model->actualizar_bal($data, $id);
			} else {

				$data = array(
					
					'marca' => $this->input->post('marca'),
					'tamanio_mascota' => $this->input->post('tamanio_mascota'),
					'etapa_mascota' => $this->input->post('etapa_mascota'),
					'precio' => $this->input->post('precio'),
					'stock' => $this->input->post('stock'),
					'descripcion' => $this->input->post('descripcion'),
					'categoria' => $this->input->post('categoria'),
					'estado' => 1
				);

				$this->load->model('balanceado_model');
				$this->balanceado_model->actualizar_bal($data, $id);				
			}
			
		redirect('gestionar_balanceado');	
	}
}