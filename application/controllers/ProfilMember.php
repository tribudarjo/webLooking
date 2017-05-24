<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
Class ProfilMember extends CI_Controller { 
    function __construct(){  
        parent::__construct();  
  $this->load->model('m_ProfilMember');
  $this->load->helper('url');
    }
 function index(){
  $data['hasil'] = $this->m_ProfilMember->getall();
  $this->load->view('v_ProfilMember', $data);
		
	}
	
	public function create(){
		if(isset($_POST['btnSubmit'])){
			
			$this->model->nama_member = $_POST['nama_member'];
			$this->model->email = $_POST['email'];
			$this->model->no_hp = $_POST['no_hp'];
			
			$this->model->insert();
			
		}else{
			$this->load->view('v_ProfilMember', ['model'=>$this->model]);
		}
	}
}
?>
