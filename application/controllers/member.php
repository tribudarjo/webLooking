<?php
class member extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		if($this -> session -> userdata('status') != "login"){
			redirect(base_url("login_member"));
		}
	}
	
	function index(){
		$this -> load -> view('view_member');
	}
}
?>