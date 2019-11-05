<?php
class Ejemplar extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ejemplar_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
  
    public function index()
    {
        $this->load->view('header');

        $data['ejemplares'] = $this->Ejemplar_model->lista();
        $this->load->view('ejemplar/lista', $data);
    }
  
    public function crear()
    {
        $this->load->view('header');
        $data['titulo'] = 'Crear Libro';
        $this->load->view('ejemplar/crear', $data);
    }
      
    public function editar($id)
    {
        $id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
          $this->load->view('header');
          $data['ejemplar'] = $this->Ejemplar_model->get_ejemplares_by_id($id);
          $data['categoria'] = $this->Ejemplar_model->get_cates_by_id($id);
          $this->load->view('ejemplar/editar', $data);
        }
    }
    public function validaciones()
    {
 
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|alpha');
        $this->form_validation->set_rules('editorial', 'Editorial', 'required');
        $this->form_validation->set_rules('isbn', 'Isbn', 'required');
        $this->form_validation->set_rules('idioma', 'Idioma', 'required');
        $this->form_validation->set_rules('paginas', 'Paginas', 'required');
        $this->form_validation->set_rules('categoria', 'required');
        $this->form_validation->set_rules('anio', 'Anio', 'required');
        $this->form_validation->set_rules('resumen', 'Resumen', 'required');
        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE)
        {  
            if(empty($id)){
              redirect( base_url('Ejemplar/crear/') ); 

            }else{
             redirect( base_url('Ejemplar/editar/'.$id) ); 
            }
        }
        else
        {
            $data['ejemplar'] = $this->Ejemplar_model->createOrUpdate();
            redirect( base_url('index.php/Ejemplar') ); 
        }
         
    }

     
     
    public function eliminar()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
                 
        $ejemplares = $this->Ejemplar_model->delete($id);
         
        redirect( base_url('index.php/Ejemplar') );        
    }
}