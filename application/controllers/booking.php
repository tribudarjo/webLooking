<?php
class booking extends CI_Controller{
	public $model = NULL;
	public $member = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this-> model = $this->login_model;
				//$this -> load -> model('model_booking');
		/*$model_booking = $this -> load -> model('model_booking');
		$result = $model_booking ->member;
		$this -> member[] = $result;*/
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
				
				$this->load->view('booking_input');
			}
		}else{
			$this->load->view('login_form_view');
		}
	}
	function tambah_aksi(){

		$mobil = $this -> input -> post('nama_mobil');
		$tanggal_sewa = $this -> input -> post('tgl_sewa');
		$waktu_sewa_jam = $this -> input -> post('waktu_sewa_jam');
		$waktu_sewa_menit = $this -> input -> post('waktu_sewa_menit');
		$waktu_sewa = $waktu_sewa_jam.":".$waktu_sewa_menit;
		$tanggal_kembali = $this -> input -> post('tgl_kembali');
		$waktu_kembali_jam = $this -> input -> post('waktu_kembali_jam');
		$waktu_kembali_menit = $this -> input -> post('waktu_kembali_menit');
		$waktu_kembali = $waktu_kembali_jam.":".$waktu_kembali_menit;
		//$id_member = $this -> member;
		$data1 = array(
		'id_mobil' => $mobil,
		//'id_member' => $id_member,
		'tanggal_sewa' => $tanggal_sewa,
		'tanggal_kembali' => $tanggal_kembali,
		'jam_pinjam' => $waktu_sewa,
		'jam_kembali' => $waktu_kembali
		);
		
		$this -> load -> model('Model_booking');
		$this -> Model_booking -> input_data($data1,'booking');	
		redirect('booking/index');
		
	}

	

}
?>