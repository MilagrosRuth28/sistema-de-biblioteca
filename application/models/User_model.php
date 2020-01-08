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
public function get_datos_by_id($id)
    {
        $query = $this->db->get_where('usuario', array('usua_id' => $id));
        
        return $query->row();
    }
public function actualizar()
    {
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $data = array(
            'usua_nombres' => $this->input->post('nombre'),
            'usua_apellidos' => $this->input->post('apellidos'),
            'usua_direccion' => $this->input->post('direccion'),
            'usua_email' => $this->input->post('email'),
            'usua_telefono' => $this->input->post('Telefono'),
            'usua_login' => $this->input->post('usuario'),
            'usua_password' => $this->input->post('Contraseña')
        );
        if (empty($id)) {
            return $this->db->insert('usuario', $data);
        } else {
            $this->db->where('usua_id', $id);
            return $this->db->update('usuario', $data);
        }
    }


}


?>
