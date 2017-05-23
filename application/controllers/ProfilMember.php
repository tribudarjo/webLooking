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
}
?>
