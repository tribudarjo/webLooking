<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_c extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function user(){
		$data['looking'] = $this->m_data->ambil_data()->result();
		$this->load->view('register_v.php',$data);
	}

}