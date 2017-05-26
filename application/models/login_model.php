<?php
class login_model extends CI_model { 
	public $id_member;
	public $nama_member;
	public $email;
	public $no_hp;
	public $password;
	
	public $label = [];
	
	public function __construct(){
		parent::__construct();
		$this -> label = $this -> _attributeLabels();
		$this -> load -> database();
	}
	
	public function login(){
		$sql = "SELECT*FROM member WHERE email='$this->email' AND password='$this->password'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function read(){
		$sql = "SELECT*FROM member where email='$this->email'";
		$query = $this -> db -> query($sql);
		return $query -> result();
	}
	
	private function _attributeLabels(){
		return [
		'id_member' => 'ID member: ',
		'nama_member' => 'Nama Member: ',
		'email' => 'Email: ',
		'no_hp' => 'No HP: ',
		'password' => 'Password: '
		];
	}
	
	
}
?>