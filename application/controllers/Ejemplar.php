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
        $data['date'] = $this->Ejemplar_model->notes_list();
        $data['title'] = 'Notes List';
        
        $this->load->view('ejemplar/lista', $data);

    }
     public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('ejemplar/crear', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }

  
    public function create()
    {
        $this->load->view('header');
        $data['title'] = 'Crear Ejemplar';
        $this->load->view('ejemplar/crear', $data);
    }
      
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
          $data['rem'] = $this->Ejemplar_model->get_notes_by_id($id);
          $this->load->view('header');
          $this->load->view('ejemplar/editar', $data);
        }
    }
    public function store()
    {
        
        $this->form_validation->set_rules('ejem_titulo', 'titulo', 'required');
        $this->form_validation->set_rules('ejem_paginas', 'paginas', 'required');
        $this->form_validation->set_rules('ejem_isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('ejem_idioma', 'idioma', 'required');
        $this->form_validation->set_rules('ejem_anio', 'anio', 'required');
 
        $id = $this->input->post('ejem_id');
 
        if ($this->form_validation->run() === FALSE)
        {  
            if(empty($id)){
              redirect( base_url('ejemplar/create') ); 
            }else{
             redirect( base_url('ejemplar/editar/'.$id) ); 
            }
        }
        else
        {
            $data['rem'] = $this->Ejemplar_model->createOrUpdate();
            redirect( base_url('Ejemplar/index') ); 
        }
         
    }
     
     
    public function delete()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
                 
        $rem = $this->Ejemplar_model->delete($id);
         
        redirect( base_url('Ejemplar/index') );        
    }

}
    