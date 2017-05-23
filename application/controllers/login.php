<?php
class login extends CI_Controller{
	public $model = NULL;
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		//session_start();
		$this->model = $this->login_model;
	}
	
	public function index(){
		$this -> load -> view('login_form_view');
	}
	
	public function login(){
		if(isset($_REQUEST['submit'])){
			$this->model->email = $_REQUEST['email'];
			$this->model->password = $_REQUEST['password'];
			$cek = $this->model->login();
			if($cek == 0){
				unset($_SESSION['email']);
				unset($_SESSION['password']);
				redirect('login');
			}else{
				$_SESSION['email'] = $_REQUEST['email'];
				$_SESSION['password'] = $_REQUEST['password'];
				redirect('booking');
			}
		}else{
			redirect('login');
		}
	}
	
	public function logout(){
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		redirect('login');
	}
		
}
?>