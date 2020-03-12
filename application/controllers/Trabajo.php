<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('principal_view');
	}
	public function principal(){
		//$this->load->view('admin/principal_view');
	}
}
