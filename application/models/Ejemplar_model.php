<?php
class Ejemplar_model extends CI_Model {

    //public $id = 'ejem_id';
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function notes_list()
    {
        $query = $this->db->query('select * from ejemplar,categoria where ejem_cate_id=cate_id');
        return $query->result();
    }
     
    public function get_notes_by_id($id)
    {
        $query = $this->db->get_where('ejemplar', array('ejem_id' => $id));
        return $query->row();
    }
     
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('ejem_id');
 
        $data = array(
            'ejem_titulo' => $this->input->post('ejem_titulo'),
            //'ejem_paginas' => $this->input->post('paginas'),
            'ejem_isbn' => $this->input->post('ejem_isbn'),
            'ejem_idioma' => $this->input->post('ejem_idioma'),
           // 'ejem_editorial' => $this->input->post('editorial'),
            'ejem_anio' => $this->input->post('ejem_anio')
            //'description' => $this->input->post('description')
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
