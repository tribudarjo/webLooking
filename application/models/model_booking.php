<?php
class Model_booking extends CI_Model{	
	
	public function input_data($data,$table){
		$this -> db -> insert($table,$data);
	}
	
	public function member(){
		$sql = "SELECT*FROM member WHERE email='$this -> model -> email'";
		$query = $this->db->query($sql);
		return $query->rows();
	}
}
?>