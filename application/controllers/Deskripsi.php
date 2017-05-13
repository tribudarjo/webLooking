<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');
Class Deskripsi extends CI_Controller { 
    function __construct(){  
        parent::__construct();  
  $this->load->model('m_deskripsi');
  $this->load->helper('url');
    }
 function index(){
  $data['hasil'] = $this->m_deskripsi->getall();
  $this->load->view('v_deskripsi', $data);
 }
}
?>
