<?php
class login_model extends CI_model { 
	public function login(){
		$sql = "SELECT*FROM member WHERE email='$this->email' AND password='$this->password'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
	

}
?>