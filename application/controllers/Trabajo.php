<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		

		$this->load->library('grocery_CRUD');
	}
	public function index()
	{
		redirect('trabajo/principal');
	}

	public function mostrar_vista($direccion=null,$output = null)
	{
		$this->load->view($direccion,(array)$output);
	}

	public function principal(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('usuarios');			
			$output = $crud->render();

			$this->mostrar_vista('principal_view',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
