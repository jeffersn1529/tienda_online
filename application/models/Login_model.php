<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            // Cargar la base de datos si no lo has hecho ya en tu configuración
            $this->load->database();
        }
        
// Inicio de sesión
        public function verificar_datos($correo1, $contraseña1) {
            // Verificar las credenciales en la base de datos
            $query = $this->db->get_where('login', array('correo' => $correo1, 'contraseña' => $contraseña1));
    
            if ($query->num_rows() == 1) {
                // Si se encuentra un usuario con las credenciales proporcionadas, devolver sus datos
                return $query->row_array();
            } else {
                return false; 
            }
        }
    }
