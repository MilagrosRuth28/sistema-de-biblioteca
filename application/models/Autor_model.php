<?php
class Autor_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function notes_list()
    {
        $query = $this->db->get('autor');
        return $query->result();
    }
     
    public function get_notes_by_id($id)
    {
        $query = $this->db->get_where('autor', array('auto_id' => $id));
        
        return $query->row();
    }
     
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $data = array(
            'auto_nombres' => $this->input->post('autor'),
            'auto_apellidos' => $this->input->post('apellidos'),
            'auto_biografia' => $this->input->post('biografia')
        );
        if (empty($id)) {
            return $this->db->insert('autor', $data);
        } else {
            $this->db->where('auto_id', $id);
            return $this->db->update('autor', $data);
        }
    }
     
    public function delete($id)
    {
        $this->db->where('auto_id',$id);
            $this->db->delete('autor');
        
    }
}