<?php
class Model_booking extends CI_Model{	
	
	public function input_data($data,$table){
		$this -> db -> insert($table,$data);
	}
	
	public function get(){
  return $this->db->get("mobil");
 }
}
?>