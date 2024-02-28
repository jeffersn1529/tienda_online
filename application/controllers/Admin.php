<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dashboard()
	{
		$this->load->view('admin/partes/cabecera');
		$this->load->view('admin/partes/navbar');
		$this->load->view('admin/partes/contenido');
		$this->load->view('admin/partes/footer');
	
	}
	public function productos()
	{
		$this->load->view('admin/partes/cabecera');
		$this->load->view('admin/partes/navbar');
		$this->load->view('admin/partes/contenido');
		$this->load->view('admin/partes/productos');
		$this->load->view('admin/partes/footer');
	}
}
