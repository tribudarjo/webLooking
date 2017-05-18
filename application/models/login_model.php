<?php
class login_model extends CI_model {
	
	function __construct(){
		parent::__construct();
		$this -> load -> database();
	}
 
	public function validate_user($data){
		$this -> db -> where('email', $data['username']);
		$this -> db -> where('password', $data['password']);
		return $this -> db -> get('member') -> row();
	}
	
	function __destruct(){
		$this -> db -> close();
	}
}
?>