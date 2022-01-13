<?php
/**
* Class Usuarios_controller
*
* @package Controllers
*
* @author CCMF
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_controller extends CI_Controller {

	function __constructor()
	{

		parent:: __constructor();
	}

	
	public function login()
	{

		$data['titulo']='Login';
		
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Contenido/login_view.php');
		$this->load->view('Plantillas/footer.php');
	}


	public function registrarse()
	{

		$data['titulo']='Registrarse';
		$this->load->view('Plantillas/header.php', $data);
		$this->load->view('Plantillas/nav.php');
		$this->load->view('Contenido/registrarse_view.php');
		$this->load->view('Plantillas/footer.php');
	}

	/*---------------------------------*/
	public function registrar_usuario()
	{
		
		$this->form_validation->set_rules('nombre', 'Nombre del usuario', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido del usuario', 'required');
		$this->form_validation->set_rules('mail', 'Email', 'required|valid_email|is_unique[personas.mail]');
		$this->form_validation->set_rules('telefono', 'Telefono del usuario', 'required|integer');
		$this->form_validation->set_rules('domicilio', 'Domicilio del usuario', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Confimar Password', 'trim|required|matches[password]');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('is_unique', 'El cliente está registrado');
		$this->form_validation->set_message('valid_email', 'El campo %s es inválido');
		$this->form_validation->set_message('integer', 'El campo %s solo debe contener números');
		$this->form_validation->set_message('min_length', 'El campo %s debe contener un minimo de %d caracteres');
		$this->form_validation->set_message('matches', 'Las contraseñas deben ser las mismas');

		//Si form_validation->run() es verdadero, el formulario
		//está completo y correcto y se llama a insertar_usuario().
		if ($this->form_validation->run() == FALSE) {

			$this->registrarse();
		}else{

			$this->insertar_usuario();
		}
	}

	public function insertar_usuario()
	{
		//Creamos array $usuario, con los datos del formulario.
		$usuario = array (
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'telefono' => $this->input->post('telefono'),
			'mail' => $this->input->post('mail'),
			'domicilio' => $this->input->post('domicilio'),
			'password' => base64_encode($this->input->post('password')),
			'perfil_id' => 1,
			'estado' => 1
		);

		//Llamamos al modelo, para usar su funcion, guardar_usuario()
		//Despues de guardar, redireccionamos a la ruta 'index'.
		$this->load->model('usuario_model');
		$this->usuario_model->guardar_usuario($usuario);

		//Messaje de usuario registrado
		echo "<script>alert('Registro exitoso!'); </script>";
		redirect('index', 'refresh' );
	}

	public function eliminar_cliente($id){

		$data = array('estado' => '0' );

		$this->load->model('usuario_model');
		$this->usuario_model->actualizar_usuario($data, $id);
		redirect('adm_clientes');
	}

	public function activar_cliente($id = NULL){

		$data = array('estado' => '1' );

		$this->load->model('usuario_model');
		$this->usuario_model->actualizar_usuario($data, $id);
		redirect('adm_clientes');
	}


  /*----------------------------------------*/
	public function iniciar_sesion() {

		$this->form_validation->set_rules('mail', 'Usuario', 'required');
		$this->form_validation->set_rules('password', 'Password', 
		'required|callback_verificar_password');

		$this->form_validation->set_message('required', 'Usuario y/o contraseña invalidos');
		

			if($this->form_validation->run() ==FALSE){

				$this->login();
			} else {

				$this->usuario_logueado();
			}
	}

	function verificar_password($password){

		$usuario = $this->input->post('mail');
		$pass = $this->input->post('password');

		$contrasenia = base64_encode($pass);

		$this->load->model('usuario_model');

		$usuario = $this->usuario_model->buscar_usuario($usuario, $contrasenia);

		if($usuario) {

			$datos_usuario = array(
			'id_usuario' => $usuario->id_persona,
			'nombre' => $usuario->nombre,
			'apellido' => $usuario->apellido,
			'perfil' => $usuario->perfil_id,
			'login' => TRUE
			);

			$this->session->set_userdata($datos_usuario);
			return true;
		} else {

			 $this->form_validation->set_message('verificar_password', 'Usuario y/o contraseña invalidos');
			 return false;
		}
	}




	public function usuario_logueado() {

		if($this->session->userdata('login')){

			switch ($this->session->userdata('perfil')) {
				case '1':
					redirect('index');
					break;
				
				case '2':
					redirect ('index_admin');
					break;
			}
		}
	}


	public function cerrar_sesion() {

		$this->session->sess_destroy();
		redirect ('index');
	}



}