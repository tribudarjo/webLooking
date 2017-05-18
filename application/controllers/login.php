<?php
class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> model('login_model', 'login');
		if(!empty($_SESSION['id_user']))
			redirect('booking');
	}
	
	public function index(){
		if($_POST){
			$result = $this -> login -> validate_user($_POST);
			if(!empty($result)){
				$data1 = [
				'email' => $result -> email,
				'nama_member' => $result -> username
				];
				
				$this -> session -> set_userdata('id_user',$data1);
				redirect('booking');
			} else {
				$this -> session -> set_flashdata('flash_data','email atau password salah!');
				redirect('login');
			}
		}
		$this -> load -> view('login_form_view');
	}
		
}
?>