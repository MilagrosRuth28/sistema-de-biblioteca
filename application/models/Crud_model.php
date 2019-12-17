<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'usua_codigo' => $this->input->post('usua_codigo'),
            'usua_nombres' => $this->input->post('usua_nombres'),
            'usua_apellidos' => $this->input->post('usua_apellidos'),
            'usua_direccion' => $this->input->post('usua_direccion'),
            'usua_email' => $this->input->post('usua_email'),
            'usua_telefono' => $this->input->post('usua_telefono')
        );
        $this->db->insert('usuario', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM usuario');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM usuario WHERE `usua_id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'usua_codigo' => $this->input->post('usua_codigo'),
            'usua_nombres' => $this->input->post('usua_nombres'),
            'usua_apellidos' => $this->input->post('usua_apellidos'),
            'usua_direccion' => $this->input->post('usua_direccion'),
            'usua_email' => $this->input->post('usua_email'),
            'usua_telefono' => $this->input->post('usua_telefono')
        );
        $this->db->where('usua_id', $id);
        $this->db->update('usuario', $data);
    }

    function deleteData($id) {
        $this->db->where('usua_id', $id);
        $this->db->delete('usuario');
    }
}
