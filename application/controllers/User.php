<?php

class User extends CI_Controller {

public function __construct()
{
    parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');
}
public function index()
{
$this->load->view("login.php");
}
public function register_user(){

      $user=array(
      'usua_codigo'=>$this->input->post('usua_codigo'),
      'usua_nombres'=>$this->input->post('usua_nombres'),
      'usua_apellidos'=>$this->input->post('usua_apellidos'),
      'usua_direccion'=>$this->input->post('usua_direccion'),
      'usua_email'=>$this->input->post('usua_email'),
      'usua_telefono'=>$this->input->post('usua_telefono'),
      'usua_password'=>md5($this->input->post('usua_password')),
    
      
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['usua_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('usuario');


}

}

public function login_view(){

$this->load->view("login.php");

}

//FUNCIONES PARA LINKEAR LOGIN: 
function login_irRegistro(){
  $this->load->view("register.php");
}

function login_volverLogin(){
  $this->load->view("login.php");
}


function login_user(){
  $user_login=array(

  'usua_email'=>$this->input->post('usua_email'),
  'usua_password'=>md5($this->input->post('usua_password')),
    );

    $data=$this->user_model->login_user($user_login['usua_email'],$user_login['usua_password']);
      if($data)
    {
        $this->session->set_userdata('usua_id',$data['usua_id']);
        $this->session->set_userdata('usua_codigo',$data['usua_codigo']);
        $this->session->set_userdata('usua_nombres',$data['usua_nombres']);
        $this->session->set_userdata('usua_apellidos',$data['usua_apellidos']);
        $this->session->set_userdata('usua_direccion',$data['usua_direccion']);
        $this->session->set_userdata('usua_email',$data['usua_email']);
        $this->session->set_userdata('usua_telefono',$data['usua_telefono']);
        $this->session->set_userdata('usua_password',$data['usua_password']);

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

function user_profile(){

$this->load->view('user_profile.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
