<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	public function index()
	{
		$this->load->view('sitio/partes/navbar');
		$this->load->view('sitio/partes/contenido');
		$this->load->view('sitio/partes/footer');
	}
}


