<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ejemplar_usuario extends CI_Controller {


public function __construct()
{
    parent::__construct();
        $this->load->helper('url');
        $this->load->model('Categoria_model');
}


public function index()
{
        $this->load->view("usuario/header");
        $this->load->view("usuario/portadas");
        //$data['result'] = $this->Crud_model->getAllData();
        //$this->load->view('usuario/lista/crudView', $data);
        $this->load->view('usuario/Pie');
}
    public function create() {
        $this->Crud_model->createData();
        redirect("Ejemplar_usuario");
    }

    public function edit($id) {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('usuario/crudEdit', $data);
     
    }

    public function update($id) {
        $this->Crud_model->updateData($id);
        redirect("Ejemplar_usuario");
    }

    public function delete($id) {
        $this->Crud_model->deleteData($id);
        redirect("Ejemplar_usuario");
    }
    
    public function cate(){
    $data['categoria'] = $this->db->query("SELECT *  FROM ejemplar,categoria where ejem_cate_id=cate_id")->result();
    $this->load->view("usuario/header.php",$data);
    $this->load->view("usuario/categoria.php", $data);
    
  }
    public function BuscarLibro(){
    $buscar = $this->input->post('buscar');
        $datos['resultado'] = $this->Categoria_model->resultado($buscar);
        $this->load->view("usuario/header.php",$datos);
        $this->load->view('usuario/categoria',$datos);
        
    }
    public function Portada(){
        $datos['resultado'] = $this->Categoria_model->obtiene_ejemplar();
        $this->load->view('usuario/header',$datos);
         $this->load->view('usuario/portadas', $datos);
         $this->load->view('usuario/Pie');
    }
}

?>