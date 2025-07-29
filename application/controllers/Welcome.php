<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends APP_Controller {
		
		function __construct(){
			parent::__construct();
	
		
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->database();

		}
   
		//-- funcion para cargar la vista principal --//
		public function index()
		{
			
			$this->load->view('header/header');
			$this->load->view('sistema/principal');
			$this->load->view('footer/footer');
		}

		//-- funciona para cargar la vista consulta --//
		public function consulta()
		{
			$this->load->view('header/header');
			$this->load->view('sistema/consulta');
			$this->load->view('footer/footer');		
		}

		//-- funciona para cargar la vista registro --//
		public function registro()
		{
			$this->load->config("tipos_bicicletas");
			$this->load->view('header/header');
			$this->load->view('sistema/registro');
			$this->load->view('footer/footer');	
		}
		//-- funciona para cargar la vista registro --//
		public function reporte()
		{
			$this->load->config("tipos_bicicletas");
			$this->load->view('header/header');
			$this->load->view('sistema/reporte');
			$this->load->view('footer/footer');	
		}

		//-- funciona para cargar la vista login --//
		public function login()
		{
			$this->load->view('header/header');
			$this->load->view('sistema/login');
			$this->load->view('footer/footer');	
		}

		//-- funciona para cargar los datos personales --//
		public function datospersonales()
		{
			$this->load->view('header/header');
			$this->load->view('sistema/datospersonales');
			$this->load->view('footer/footer');	
		}

		//-- funcion del resultado de la Consulta de la bike--//		
		public function resultadoConsulta()
		{
			//cargar el modelo
			$this->load->model('users');
			
			//se pide los datos
			$consulta = $this->input->post('nombreConsulta');
			//die(debug($consulta));
			//envio al modelo del dato ingresado			
			$query = $this->users->consultaUsers($consulta);
	
			//sacamos el n°serie y estado
			if ($query != null) {
			
				if($query["id_Estado"]==0)
					$estado="SinNovedad";
				else
					$estado="Robada";
			}	
			//die(debug($estado , $consulta));
		
			if ($query != null) {
					//si el n°serie es igual al datos ingresado cargue las vistas
				if ($query['numero_Serie'] == $consulta) {
					echo json_encode($estado,200);
				}else {
					echo json_encode("mconsulta",200);
				}

			}elseif ($query == null) {
				echo json_encode("mconsulta",200);
				
			}

		}

		function  bienconsulta($data){
			if($data=="sinNovedad"){
				$info="Sin Novedad";
			}else{
				$info="robada";
			}
			$da["data"]=$data;
			$da["reporte"]=$info;
			$this->load->view('header/header');
			$this->load->view('sistema/bienconsulta',$da);
			$this->load->view('footer/footer');	

		}
		function mconsulta(){
			$this->load->view('header/header');
			$this->load->view('sistema/mconsulta');
			$this->load->view('footer/footer');	
		}
		

		
		
		
		  
	}


