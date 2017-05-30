<?php
class konfirmasi extends CI_Controller{
	public $model = NULL;
	public $booking = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this-> model = $this->login_model;
		$this -> load -> model('konfirmasi_model');
		$this -> booking = $this -> konfirmasi_model;
	}
	
	public function index(){
		$this -> isLogin();
	}
	
	public function isLogin(){
	if(isset($_SESSION['email']) && isset($_SESSION['password'])){
			$this->model->email = $_SESSION['email'];
			$this->model->password = $_SESSION['password'];
			$cek = $this->model->login();
			if($cek == 0){
				$this->load->view('login_form_view');
				unset($_SESSION['email']);
				unset($_SESSION['password']);
			}else{
				$rows = $this -> model -> read();
				$data_booking = $this -> booking -> read();
				$this->load->view('menu', ['rows'=>$rows]);
				//$data['booking'] = $this -> konfirmasi_model -> read();
				$this->load->view('konfirmasi_view', ['data'=>$data_booking]);
				//$this->load->view('konfirmasi_view', $data);
			}
		}else{
			$this->load->view('login_form_view');
		}
	}
}
?>