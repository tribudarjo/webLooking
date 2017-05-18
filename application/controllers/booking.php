<?php
class booking extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this -> load -> model('Model_booking');
		if(empty($this -> session -> userdata('id_user'))){
			$this -> session -> set_flashdata('flash_data','Anda tidak mempunyai akses!');
			redirect('login');
		}
	}
	
	public function index(){
		$this -> load -> view('booking_input');
		$id_mobil = $this -> load -> post('id_mobil');
		$waktu_sewa_jam = $this -> input -> post('waktu_sewa_jam');
		$waktu_kembali_jam = $this -> input -> post('waktu_kembali_jam');
		$this -> Model_booking -> cek_harga($id_mobil, $waktu_sewa_jam, $waktu_kembali_jam);
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
		$id_member = $this -> session -> userdata('id_member');
		$data1 = array(
		'id_mobil' => $mobil,
		'id_member' => $id_member,
		'tanggal_sewa' => $tanggal_sewa,
		'tanggal_kembali' => $tanggal_kembali,
		'jam_pinjam' => $waktu_sewa,
		'jam_kembali' => $waktu_kembali
		);
		
		$this -> load -> model('Model_booking');
		$this -> Model_booking -> input_data($data1,'booking');	
		redirect('booking/index');
	}

	public function logout(){
		$data = ['email', 'password'];
		$this -> session -> unset_userdata($data);
		 $this->session->sess_destroy();
		
		redirect('login');
	}

}
?>