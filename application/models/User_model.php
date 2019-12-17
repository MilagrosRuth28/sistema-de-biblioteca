  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model{

public function register_user($user)
{
$this->db->insert('usuario', $user);
}

public function login_user($email,$pass)  
{
  $this->db->select('*');
  $this->db->from('usuario'); 
  $this->db->where('usua_email',$email);
  $this->db->where('usua_password',md5($pass));

  $resultado = $this->db->get();
  return $resultado;
}

public function email_check($email){

  $this->db->select('*');
  $this->db->from('usuario');
  $this->db->where('usua_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


}


?>
