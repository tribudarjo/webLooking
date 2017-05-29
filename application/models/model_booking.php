<?php
class model_booking extends CI_Model{	
	
	public function input_data($data,$table){
		$this -> db -> insert($table,$data);
	}
	
	
	public function read(){
		$sql = "SELECT*FROM mobil";
		$query = $this -> db -> query($sql);
		return $query -> result();
	}
}
?>