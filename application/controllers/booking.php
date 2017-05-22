<?php
class booking extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this -> load -> model('model_booking');
		$this -> load -> helper('url');
		
	}
	/*
	function index(){
		$data['user'] = $this -> model_booking -> tampil_data() -> result();
		$this -> load -> view('view_booking',$data);
	}*/
	
	function index(){
		$this -> load -> view('booking_input');
	}
	
	function tambah_aksi(){
		$data1['cari'] = $this -> model_booking -> cariMobil();
		$mobil = $data1;
		$tanggal_sewa = $this -> input -> post('tanggal_sewa');
		$waktu_sewa = $waktu_sewa_jam.":".$waktu_sewa_menit;
		$waktu_sewa = $this -> input -> post('jam_pinjam');
		$tanggal_kembali = $this -> input -> post('tanggal_kembali');
		$waktu_kembali = $waktu_kembali_jam.":".$waktu_kembali_menit;
		$waktu_kembali = $this -> input -> post('jam_kembali');
		
		$data = array(
		'id_mobil' => $mobil,
		'tanggal_sewa' => $tanggal_sewa,
		'tanggal_kembali' => $tanggal_kembali,
		'jam_pinjam' => $waktu_sewa,
		'jam_kembali' => $waktu_kembali
		);
		
		$this -> model_booking -> input_data($data,'user');
		redirect('booking/index');
	}	
}
?>