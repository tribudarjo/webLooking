<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
Class Deskripsi extends CI_Controller {
public $model = NULL;	
    function __construct(){  
        parent::__construct(); 
	$this->load->model('login_model');
		$this-> model = $this->login_model;		
  $this->load->model('m_deskripsi');
  $this->load->helper('url');
    }
 function index(){
	 if(isset($_SESSION['email']) && isset($_SESSION['password'])){
			$this->model->email = $_SESSION['email'];
			$this->model->password = $_SESSION['password'];
			$cek = $this->model->login();
			if($cek == 0){
				$this->load->view('login_form_view');
				unset($_SESSION['email']);
				unset($_SESSION['password']);
			}else{
				$data['hasil'] = $this->m_deskripsi->getall();
				$rows = $this -> model -> read();
				$this->load->view('menu', ['rows'=>$rows]);
				$this->load->view('v_deskripsi', $data);
			}
		}else{
			$this->load->view('login_form_view');
		}
	}
  
 
}
?>
