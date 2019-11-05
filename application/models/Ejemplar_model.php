<?php
class Ejemplar_model extends CI_Model {

    //public $id = 'ejem_id';
  
    public function __construct()

    {
        parent::__construct();
        $this->load->database();
    }
     
    public function notes_list()
    {   
        $query = $this->db->query('select * from ejemplar,categoria where ejem_cate_id=cate_id');
        return $query->result();
    }
     
    public function Update($id)
    {
        
        $query = $this->db->get_where('ejemplar', array('ejem_id' => $id));

        return $query->row();
    }
     
    public function createOrUpdate($data)
    {                
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
