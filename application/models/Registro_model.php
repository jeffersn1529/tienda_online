<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            // Cargar la base de datos si no lo has hecho ya en tu configuración
            $this->load->database();
        }
        
        // Registrarse
        public function guardar($data) {
            // Guardar los datos en la base de datos
            $this->db->insert('registro', $data);
        }

        // Inicio de sesión
        public function verificar_credenciales($correo, $contraseña) {
            // Verificar las credenciales en la base de datos
            $query = $this->db->get_where('registro', array('correo' => $correo, 'contraseña' => $contraseña));
    
            if ($query->num_rows() == 1) {
                // Si se encuentra un usuario con las credenciales proporcionadas, devolver sus datos
                return $query->row_array();
            } else {
                return false; 
            }
        }
    }
?>
