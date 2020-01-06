<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		
class administrador extends CI_Controller {

public function __construct()
{
	    parent::__construct();
	    /*if($this->session->userdata('logged_id') != TRUE){ 	//FUNCIONA PARA QUE NO PUEDAN ENTRAR OTROS CREO(usua, otros)XD
	    	redirect('user');
	    }*/			
        //$this->load->helper('url');
        $this->load->model('ejemplar_model','pm');
        $this->load->model('user_model');
        $this->load->model('autor_model','aut');
        $this->load->library('session'); 

}

  	function index(){
		if($this->session->userdata('usua_esadmin')==='1'){
			$this->load->view('administrador/header');
			$this->load->view("administrador/vista");
			//$this->load->view('Administrador/header',$datos);
			
			//$this->load->view('header');
			//$this->load->view('dashboard');
			//$this->load->view('footer');
			
		}else{
			//redirect(base_url().'Login');
			echo "<script>alert('Acceso Denegado!'); history.go(-1);</script>";	//NO PUEDEN ENTRAR EL USUARIO AQUI( Y VICEVERSA)
		}   
	}
}