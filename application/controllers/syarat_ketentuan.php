<?php
class syarat_ketentuan extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this -> load -> view('syarat_ketentuan_view');
	}
}
?>