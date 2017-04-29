 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('nama_member', 'NAMA_MEMBER','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
		 $this->form_validation->set_rules('no_hp', 'NO_HP','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('v_register');
         }else{
 
             $data['nama_member']   =    $this->input->post('nama_member');
             $data['email']  =    $this->input->post('email');
			 $data['no_hp'] =    $this->input->post('no_hp');
             $data['password'] =    md5($this->input->post('password'));
 
             $this->m_account->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('v_success',$pesan);
         }
     }
 }