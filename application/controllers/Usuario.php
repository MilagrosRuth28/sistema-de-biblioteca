<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		
class usuario extends CI_Controller {

public function __construct()
{
	    parent::__construct();
		/*if($this->session->userdata('logged_id') != TRUE){ 	//FUNCIONA PARA QUE NO PUEDAN ENTRAR OTROS CREO(usua, otros)XD
	    	redirect('user');
	    }*/        
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');
}

	function index(){
		if($this->session->userdata('usua_esadmin')==='0'){
			//$this->load->view('usuario/categoria/categoria');
			//$this->load->view('Administrador/header',$datos);

			$this->load->view('usuario/header');
			//$this->load->view('dashboard');
			//$this->load->view('footer');
			
		}else{
			//redirect(base_url().'Login');
			echo "<script>alert('Acceso Denegado!'); history.go(-1);</script>";	//NO PUEDEN ENTRAR EL ADMINITRADOR AQUI( Y VICEVERSA)
		}
	}
}