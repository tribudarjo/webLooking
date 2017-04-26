<?php
class login_model extends CI_model {
	public $username;
	public $password;
	public $labels =[];
	
	public function __construct(){
		parent::__construct();
		$this -> load -> database();
		$this -> labels = $this -> _attributLabels();
	}
	
	public function authenticate($username, $password){
		$this -> username = $username;
		$this -> password = $password;
		
		if (isset($this -> username) && isset($this -> password)){
			$sql = "SELECT * FROM member WHERE email='".$this -> username."' and password='".$this -> password."'";
			$quer = $this -> db -> query($sql);
			if ($quer -> num_rows() > 0){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	public function _attributLabels(){
		return[
		'username'=>'Username : ',
		'password'=>'Password : '
		];
	}
}
?>