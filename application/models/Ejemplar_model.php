<?php
class Ejemplar_model extends CI_Model {

    //public $id = 'ejem_id';

    public function __construct()

    {
        parent::__construct();
        $this->load->database();
    }

    function notes_list()
    {   
        $query = $this->db->query('SELECT ejem_titulo,ejem_anio, cate_nombre, ejem_editorial, ejem_paginas, ejem_isbn, tipo_nombre, ejem_id, GROUP_CONCAT(auto_nombres)as auto_nombres, ejem_portada FROM ejemplar,categoria,ejemplar_tipo,ejemplar_autor, autor WHERE ejem_cate_id=cate_id AND ejem_tipo_id=tipo_id AND ejem_id=rela_ejem_id AND rela_auto_id=auto_id GROUP BY ejem_id ORDER BY ejem_id DESC');
        return $query->result();
        /*$query = $this->db->query('select * from ejemplar, categoria where ejem_cate_id = cate_id');
        return $query->result();*/
    }
    function lista_historial()
    {   
        ////////aqui va la base de datos aiuda :v esta la de ejemplares por ahora....
        $query = $this->db->query('SELECT ejem_titulo, cate_nombre, tipo_nombre, ejem_id, GROUP_CONCAT(auto_nombres)as auto_nombres, ejem_portada FROM ejemplar,categoria,ejemplar_tipo,ejemplar_autor, autor WHERE ejem_cate_id=cate_id AND ejem_tipo_id=tipo_id AND ejem_id=rela_ejem_id AND rela_auto_id=auto_id GROUP BY ejem_id ORDER BY ejem_id DESC');
        return $query->result();        
    }
    function lista_peticion()
    {   
        return $this->db->query("SELECT * FROM peticion,ejemplar,usuario WHERE peti_ejem_id=ejem_id AND peti_usua_id=usua_id")->result();
    }
    function lista_prestamo()
    {   
        //ayuda
    }  

    function Update($id)
    {
        $query = $this->db->get_where('ejemplar', array('ejem_id' => $id));
        return $query->row();
    }

    function createOrUpdate($data)
    {  
        $this->load->helper('url');
        $id = $this->input->post('id');   

        if (empty($id)) {
            return $this->db->insert('ejemplar', $data);
        } else {
           return $this->db->where('ejem_id', $id);
            return $this->db->update('ejemplar', $data);
        }
    }
    function getEjemCat($id){
        //$this->db->where('ejem_id', $id);
        $query=$this->db->query("SELECT * FROM ejemplar,categoria where ejem_cate_id=cate_id and ejem_id='{$id}'"); 
        if($query->num_rows()>0){
            return $query->row();
        }else{
            return false;
        }
    }

    function GetCategoria(){
        $query=$this->db->query('SELECT * FROM categoria');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    function delete($id)
    {   
        $this->db->delete('ejemplar_autor', array('rela_ejem_id' => $id));
        return $this->db->delete('ejemplar', array('ejem_id' => $id)); 
        /*? true : 
        false;*/
    }    
    
	

}
