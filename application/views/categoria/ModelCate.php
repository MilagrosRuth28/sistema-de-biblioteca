<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categoria extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function getBusqueda($q)
	{
		return $this->db->query("SELECT * FROM categoria WHERE cate_nombre  LIKE '%$q%' ")->result();
	}

	
}