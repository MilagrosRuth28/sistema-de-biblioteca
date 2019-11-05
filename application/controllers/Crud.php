<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller {


public function __construct()
{
    parent::__construct();
        $this->load->helper('url');
        $this->load->model('Crud_model');
 		
}


public function index()
{

$this->load->view("header");
 $this->load->view("portada.php");
}
    public function create() {
        $this->Crud_model->createData();
        redirect("Crud");
    }

    public function edit($id) {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crudEdit', $data);
     
    }

    public function update($id) {
        $this->Crud_model->updateData($id);
        redirect("Crud");
    }

    public function delete($id) {
        $this->Crud_model->deleteData($id);
        redirect("Crud");
    }
    public function cate(){
    $data['data'] = $this->db->get("categoria")->result();
    $this->load->view("header.php");
    $this->load->view("categoria.php", $data);
    
  }
  public function resultado(){
    
      $q=$_POST['q'];
      $this->load->view('categoria.php');
    
    $data = $this->ModelCate->getBusqueda($q);
    
  
} 
public function portada(){
    $this->load->view("header.php");
    $this->load->view("portada.php");
    $this->load->view("pie.php");
}
}
?>