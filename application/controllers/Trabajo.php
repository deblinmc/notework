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
		$this->load->view('plantilla_header',(array)$output);
		$this->load->view($direccion,(array)$output);
		$this->load->view('plantilla_footer',(array)$output);
	}

	public function principal(){

			$output=array();
			$this->load->model('trabajo_model');
			$fecha=date('Y-m-d');
			$data_actividades = $this->trabajo_model->obtener_actividades_day($fecha);
			
			$output['data_actividades'] = $data_actividades;
			$this->mostrar_vista('principal_view',$output);

		
	}
	public function actividades(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('actividades');
			$crud->order_by('id','desc');			
			$output = $crud->render();

			$this->mostrar_vista('plantilla_crud',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function centros(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('centros');			
			$output = $crud->render();

			$this->mostrar_vista('plantilla_crud',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function mensajes(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('mensajes');
			$crud->set_relation('id_remitente','usuarios','nombre');
			$crud->set_relation('id_destinatario','usuarios','nombre');		
			$crud->order_by('id','desc');	
			$output = $crud->render();

			$this->mostrar_vista('plantilla_crud',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function trabajos(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('trabajos');
			$crud->set_relation('id_actividad','actividades','nombre');
			$crud->set_relation('id_usuario','usuarios','nombre');		
			$crud->order_by('id','desc');	
			$output = $crud->render();

			$this->mostrar_vista('plantilla_crud',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function usuarios(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_table('usuarios');			
			$output = $crud->render();

			$this->mostrar_vista('plantilla_crud',$output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function calendario(){
		$output=array();
		$this->mostrar_vista('calendario_view',$output);

	}
}
