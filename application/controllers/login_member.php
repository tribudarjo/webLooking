<?php
class login_member extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this -> load -> model('model_login');
	}
	
	function index(){
		$this -> load -> view('view_login');
	}
	
	function act_login(){
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$where = array(
		'email' => $username,
		'password' => $password);
		$cek = $this -> model_login -> cek_login("member",$where) -> num_rows();
		if($cek > 0){
			$data_session = array(
			'nama' => $username,
			'status' => "login"
			);
			
			$this -> session -> set_userdata($data_session);
			redirect(base_url("member"));
		} else {
			echo "Username atau password salah!";
		}
	}
	
	function logout(){
		$this -> session -> sess_destroy();
		redirect(base_url('member'));
	}
}
?>	