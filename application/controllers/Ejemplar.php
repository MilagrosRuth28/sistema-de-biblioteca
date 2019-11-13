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
   /* public function portada()
    {
        $this->load->view('header'); 
        
        $this->load->view('', $data);
        $this->load->view('Pie');
    }*/
    function provar()
    {
        $this->load->view('provar');
    }
    public function ejemplar()
    {

        $this->load->view('header'); 
        $data['ejemplares'] = $this->Ejemplar_model->notes_list();
        $data['title'] = 'Notes list';
        $this->load->view('ejemplar/lista', $data);
        $this->load->view('Pie');
    }


     public function upload_Port()
        {
        $this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('paginas', 'paginas', 'required');
        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('idioma', 'idioma', 'required');
        $this->form_validation->set_rules('anio', 'anio', 'required');
            $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => 0,
            'max_height' => 0,
            'max_width' => 0

            );
        $this->load->library('upload', $config);
          if ($this->upload->do_upload('portada'))
            $dat =  $this->upload->data("file_name");
        else $dat = NULL;
        $data = [
            'ejem_titulo'=>$this->input->post('titulo'),
            'ejem_paginas'=>$this->input->post('paginas'),
            'ejem_portada'=>$dat,
            'rela_auto_id'=>$this->input->post('autor'),
            'id_autor'=>$this->input->post('autor'),
            'ejem_cate_id'=>$this->input->post('categoria'),
            'ejem_isbn'=>$this->input->post('isbn'),
            'ejem_resumen'=>$this->input->post('resumen'),
            'ejem_idioma'=>$this->input->post('idioma'),
            'ejem_anio'=>$this->input->post('anio'),
        ];

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
            redirect( base_url('Ejemplar/ejemplar') ); 
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
        /*$autores = $this->input->post('autores');
        $this->ejemplar_model->update($id,$data);

        $this->db->query("DELETE FROM ejemplar_autor WHERE rela_ejem_id='{$id}'");
        foreach($autores as $autor){
            $this->db->insert('ejemplar_autor',array('rela_auto_id'=>$autor,'rela_ejem_id'=>$id));*/
        }
          $data['ejemplar'] = $this->Ejemplar_model->Update($id);
          $this->load->view('header');
          $this->load->view('ejemplar/editar', $data);
    }
     
     
    public function eliminar()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
        $ejemplares = $this->Ejemplar_model->delete($id);
        redirect( base_url('Ejemplar/ejemplar') );        
    }

}
    