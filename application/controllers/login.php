<?php
class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('login_model');
		$this -> model = $this -> login_model;
	}
	
	public function index(){
		if(isset($_POST['submit'])){
			$this -> model -> username = $_POST['username'];
			$this -> model -> password = $_POST['password'];
			
			if($this -> model -> authenticate($this -> model -> username, $this -> model -> password)){
				$this -> load -> view('login_success_view');
			} else {
				$this -> load -> view('login_error_view');
			}
		} else {
			$this -> load -> view('login_form_view', ['model'=> $this -> model]);
		}
	}
}
?>