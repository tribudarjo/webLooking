<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class m_ProfilMember extends CI_Model{  
 function getall(){
  $ambil_data = $this->db->get('member');
  
  if ($ambil_data->num_rows() > 0 ){
   foreach ($ambil_data->result() as $data){
    $hasil[] = $data;
   }
   return $hasil;
  }
 }
}
?>
