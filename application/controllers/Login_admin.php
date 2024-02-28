<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model'); 
    }
	public function login()
	{
		$this->load->view('admin/login/index');
	}
	public function iniciar_admin() {
		
        // Obtener los datos del formulario de inicio de sesión
        $correo1 = $this->input->post('correo');
        $contraseña1 = $this->input->post('contraseña');

        // Verificar las credenciales llamando al método en el modelo de login
        $usuario_admin = $this->Login_model->verificar_datos($correo1, $contraseña1);

        if ($usuario_admin) {
            $this->session->set_userdata('id_admin', $usuario_admin['id_admin']);
        	$this->session->set_userdata('nombres', $usuario_admin['nombres']); // Suponiendo que el campo se llame 'nombre' en tu tabla
        
			redirect('index.php/dashboard');
        } else {
            // Si las credenciales son inválidas, redireccionar a una página de error o de nuevo al formulario de inicio de sesión
            redirect('index.php/login');
        }
    }
    public function cerrar_sesion_admin() {
        // Cerrar sesión
        $this->session->unset_userdata('id_admin');
        redirect('index.php/login'); // Redireccionar a la página después de cerrar sesión
    }
}
?>

