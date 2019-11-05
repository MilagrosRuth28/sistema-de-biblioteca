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
        $this->load->view('portada'); 
        $this->load->view('Pie');

    }
    function ejemplar(){

        $this->load->view('header'); 
        $data['ejemplares'] = $this->Ejemplar_model->notes_list();
        $data['title'] = 'Notes list';
        
        $this->load->view('ejemplar/lista', $data);
        $this->load->view('Pie');
    }


     public function upload_Port()
        {
       $this->form_validation->set_rules('ejem_titulo', 'titulo', 'required');
        $this->form_validation->set_rules('ejem_paginas', 'paginas', 'required');
        $this->form_validation->set_rules('ejem_isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('ejem_idioma', 'idioma', 'required');
        $this->form_validation->set_rules('ejem_anio', 'anio', 'required');
            $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => 0,
            'max_height' => 0,
            'max_width' => 0

            );
          $this->load->library('upload', $config);
          if ($this->upload->do_upload('ejem_portada'))
            $dat =  $this->upload->data("file_name");
        else $dat = NULL;
        $data = [
            'ejem_titulo'=>$this->input->post('ejem_titulo'),
            
            'ejem_paginas'=>$this->input->post('ejem_paginas'),
            'ejem_portada'=>$dat,
            'ejem_cate_id'=>$this->input->post('ejem_categoria'),
            'ejem_isbn'=>$this->input->post('ejem_isbn'),
            'ejem_resumen'=>$this->input->post('ejem_resumen'),
            'ejem_idioma'=>$this->input->post('ejem_idioma'),
            'ejem_anio'=>$this->input->post('ejem_anio'),
            

        ];
        $id = $this->input->post('ejem_id');
             
       if ($this->form_validation->run() === FALSE)
        {  
            if(empty($id)){
              redirect( base_url('ejemplar/crear') ); 
            }else{
             redirect( base_url('ejemplar/editar/'.$id) ); 
            }
        }
        else
        {
            $data['ejemplar'] = $this->Ejemplar_model->createOrUpdate($data);
            redirect( base_url('Ejemplar/index') ); 
        }
    }


  
    public function crear()
    {
        $this->load->view('header');
        $data['title'] = 'Crear Ejemplar';
        $this->load->view('ejemplar/crear', $data);
    }
      
    public function editar()
    {
        $id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
          $data['ejemplar'] = $this->Ejemplar_model->Update($id);
          $this->load->view('header');
          $this->load->view('ejemplar/editar', $data);
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
         
        redirect( base_url('Ejemplar/index') );        
    }

}
    