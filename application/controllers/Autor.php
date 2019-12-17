<?php
class Autor extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Autor_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
  
    public function index()
    {
        $this->load->view('administrador/header');
        $data['autores'] = $this->Autor_model->notes_list();
        $data['titulo'] = 'Listado';
 
        $this->load->view('autores/lista_autor', $data);
    }
  
    public function crear()
    {
        $this->load->view('administrador/header');
        $data['titulo'] = 'Crear Autor';
        $this->load->view('administrador/autores/crear_autor', $data);
    }
      
    public function editar($id)
    {
        $id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
          $this->load->view('administrador/header');
          $data['autor'] = $this->Autor_model->get_notes_by_id($id);
          $this->load->view('administrador/autores/editar_autor', $data);
        }
    }
    public function validaciones()
    {
 
        $this->form_validation->set_rules('autor', 'Autor', 'required|alpha');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|alpha');
        $this->form_validation->set_rules('biografia', 'Biografia', 'required');
        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE)
        {  
            if(empty($id)){
              redirect( base_url('administrador/Autor/crear') ); 

            }else{
             redirect( base_url('administrador/Autor/editar/'.$id) ); 
            }
        }
        else
        {
            $data['autor'] = $this->Autor_model->createOrUpdate();
            redirect( base_url('index.php/Autor') ); 
        }
         
    }
     
     
    public function eliminar()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
                 
        $notes = $this->Autor_model->delete($id);
         
        redirect( base_url('index.php/Autor') );        
    }
}