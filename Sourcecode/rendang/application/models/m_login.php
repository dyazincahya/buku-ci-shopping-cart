<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password, $status/*, $level*/)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('status', $status);
    //$this->db->where('level', $level);
	   
    $query = $this->db->get();
    
//    return $query->num_rows();
return $query;
  }
  
  
  public function dataPengguna($username)
  {
   $this->db->select('username');
   $this->db->select('nama');
   $this->db->where('username', $username);
   $query = $this->db->get('user');
   
   return $query->row();
  }
  
}  

?>
