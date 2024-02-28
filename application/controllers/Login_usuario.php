<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_usuario extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Registro_model'); 
    }
	public function login()
	{
		$this->load->view('sitio/login/index');
	}
	public function registrar()
	{
		$this->load->view('sitio/registrarse/index');
	}

    //public function index() {
        // Vista de registro
        //$this->load->view('sitio/registrarse/index');
    //}

    public function guardar() {
        $data = array(
            'nombres' => $this->input->post('nombres'),
            'apellidos' => $this->input->post('apellidos'),
            'identificacion' => $this->input->post('identificacion'),
            'correo' => $this->input->post('correo'),
            'contraseña' => $this->input->post('contraseña'),
        );
        
		$this->Registro_model->guardar($data);
        
		redirect('index.php/iniciar-sesion');
    }

	public function iniciar_sesion() {
		
        // Obtener los datos del formulario de inicio de sesión
        $correo = $this->input->post('correo');
        $contraseña = $this->input->post('contraseña');

        // Verificar las credenciales llamando al método en el modelo de login
        $usuario = $this->Registro_model->verificar_credenciales($correo, $contraseña);

        if ($usuario) {
            $this->session->set_userdata('id_registro', $usuario['id_registro']);
        	$this->session->set_userdata('nombres', $usuario['nombres']); // Suponiendo que el campo se llame 'nombre' en tu tabla
        
			redirect('index.php/inicio');
        } else {
            // Si las credenciales son inválidas, redireccionar a una página de error o de nuevo al formulario de inicio de sesión
            redirect('index.php/iniciar-sesion');
        }
    }
    public function cerrar_sesion() {
        // Cerrar sesión
        $this->session->unset_userdata('id_registro');
        redirect('index.php/iniciar-sesion'); // Redireccionar a la página después de cerrar sesión
    }
}
?>

