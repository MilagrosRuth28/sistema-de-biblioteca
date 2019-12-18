<?php
class Categoria_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

     
    public function Update($id)
    {
        
        $query = $this->db->get_where('ejemplar', array('ejem_id' => $id));

        return $query->row();
    }
     
    public function createOrUpdate($data)
    {                
        if (empty($id)) 
               {
            return $this->db->insert('ejemplar', $data);
        } else {
            $this->db->where('ejem_id', $id);
            return $this->db->update('ejemplar', $data);
        }

    }
   public function resultado($buscar){
        return $this->db->like('ejem_titulo',$buscar)
                        ->get('ejemplar')
                        ->result();
                }   
    
}
