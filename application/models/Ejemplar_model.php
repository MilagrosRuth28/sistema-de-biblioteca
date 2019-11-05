<?php
class Ejemplar_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function lista()
    {
        $query = $this->db->get('ejemplar');
        return $query->result();
    }
     
    public function get_ejemplares_by_id($id)
    {
        $query = $this->db->get_where('ejemplar', array('ejem_id' => $id));
        return $query->row();
    }
    public function get_cates_by_id($id)
    {
        $query = $this->db->get_where('categoria', array('cate_id' => $id));
        return $query->row();
    }
     
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $data = array(
            'ejem_titulo' => $this->input->post('titulo'),
            'ejem_editorial' => $this->input->post('editorial'),
            'ejem_isbn' => $this->input->post('isbn'),
            'ejem_idioma' => $this->input->post('idioma'),
            'ejem_paginas' => $this->input->post('paginas'),
            'ejem_cate_id' => $this->input->post('categoria'),
            'ejem_anio' => $this->input->post('anio'),
            'ejem_resumen' => $this->input->post('resumen')
        );
        if (empty($id)) {
            return $this->db->insert('ejemplar', $data);
        } else {
            $this->db->where('ejem_id', $id);
            return $this->db->update('ejemplar', $data);
        }
    }
     
    public function delete($id)
    {
        $this->db->where('ejem_id', $id);
        return $this->db->delete('ejemplar');
    }
}