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
$data['result'] = $this->Crud_model->getAllData();
		$this->load->view('lista/crudView', $data);
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
}
?>