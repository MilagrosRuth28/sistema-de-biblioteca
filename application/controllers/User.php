<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

          //! IMPORTANTE: ALGUNOS CODIGOS QUE ESTAN COMENTADOS ELIMINALOS SI QUIERES, YA QUE NO SE USA O NO SIRVE Xd
  
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

      //! ESTO ESTA CAMBIADO EN EL TRABAJO QUE ESTA EN EL github
      $user=array(
      'usua_codigo'=>$this->input->post('usua_codigo'),     
      'usua_nombres'=>$this->input->post('usua_nombres'),
      'usua_apellidos'=>$this->input->post('usua_apellidos'),
      'usua_direccion'=>$this->input->post('usua_direccion'),
      'usua_email'=>$this->input->post('usua_email'),
      'usua_telefono'=>$this->input->post('usua_telefono'),
      'usua_password'=>md5($this->input->post('usua_password')),
      //'usua_esadmin'=>$this->input->post('usua_esadmin'),
      
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['usua_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  /*$this->session->set_flashdata('error_msg', '<div class="alert alert-danger h6 role="alert">Error occured,Try again.</div>');*/
  $this->session->set_flashdata('error_msg', '<h6 style="background-color:red;">Error occured</h6>');
  redirect('user/register_user');


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
  $usua_email=$this->input->post('usua_email', TRUE); 
  $usua_password=$this->input->post('usua_password', TRUE);
  $res=$this->user_model->login_user($usua_email,$usua_password);
      if($res->num_rows() > 0){
        $data = $res->row_array();
        $usua_codigo = $data['usua_codigo'];
        $usua_email = $data['usua_email'];
        $usua_esadmin = $data['usua_esadmin'];
        $sesdata = array(
          'usua_codigo' =>$usua_codigo,
          'usua_email'  => $usua_email,
          'usua_esadmin'=> $usua_esadmin,
          'logged_in'   => TRUE 
        );
        $this->session->set_userdata($sesdata);
        if($usua_esadmin == '1'){ 
          redirect('administrador');      //! VA A LA class 'administrador' ->Esta class la encuentras en controllers/Administrador.php
        }else if($usua_esadmin == '0'){   
          redirect('usuario');            //! VA A LA class 'usuario' ->Esta class la encuentras en controllers/Usuario.php
        }
      }else{
        $this->session->set_flashdata('error_msg', '<h3 style="color:red;">Datos Incorrectos</h3>');
        //$this->load->view("login.php");
        redirect(base_url());        //! PARA REDIRECCIONARLO AL MISMO SITIO, YA QUE LOS DATOS INGRESADOS ESTAN MAL, O NO SE ENCUENTRA EL LA BASE DE DATOS  xD
      }

}
public function admin(){
    $this->load->view('administrador/header.php');
    //intente actualizar los datos de aadministrador...falta corregir
    /*$id = $this->input->post('id');
 
    $data = array(
            'usua_login' => $this->input->post('usuario'),
            'usua_nombres' => $this->input->post('nombres'),
            'usua_apellidos' => $this->input->post('apellidos'),
            'usua_direccion' => $this->input->post('direccion'),
            'usua_email' => $this->input->post('email'),
            'usua_codigo' => $this->input->post('codigo'),
            'usua_password' => $this->input->post('contraseña')
    );
    $this->db->where('usua_id', $id);
    $this->db->update('usuario', $data);*/
    $this->load->view('administrador/datos_admin.php');
  }
  public function usuario(){
    $this->load->view('usuario/header.php');
<<<<<<< HEAD
    //intente actualizar los datos de aadministrador...falta corregir
=======
    //intente actualizar los datos del usuario...falta corregir
>>>>>>> 99b2a9332b93648c221cb4d925baa15f7a1a98b7
    /*$id = $this->input->post('id');
 
    $data = array(
            'usua_login' => $this->input->post('usuario'),
            'usua_nombres' => $this->input->post('nombres'),
            'usua_apellidos' => $this->input->post('apellidos'),
            'usua_direccion' => $this->input->post('direccion'),
            'usua_email' => $this->input->post('email'),
            'usua_codigo' => $this->input->post('codigo'),
            'usua_password' => $this->input->post('contraseña')
    );
    $this->db->where('usua_id', $id);
    $this->db->update('usuario', $data);*/
    $this->load->view('usuario/datos_usuario.php');
  }
public function menu()      //! ESTA FUNCION LA ELIMINASTE EN EL QUE AHORA ESTA EN EL github
{

$this->load->view('header.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}
}
?>
