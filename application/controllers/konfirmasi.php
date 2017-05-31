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
				$rows1 = $this -> booking -> dataBooking();
				$this->load->view('menu', ['rows'=>$rows]);
				$this->load->view('konfirmasi_view', ['rows1'=>$rows1]);
			}
		}else{
			$this->load->view('login_form_view');
		}
	}
	
	public function hapus($id_booking){
				$this -> booking -> id_booking = $id_booking;
				$this -> booking -> delete();
				redirect('booking');

	}
}
?>