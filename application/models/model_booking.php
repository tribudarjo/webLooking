<?php
class model_booking extends CI_Model{
	/*function tampil_data(){
		return $this -> db -> get('booking');
	}*/
	
	function cariMobil(){
		$cari = $mobil;
		$data = $this -> db -> query("select id_mobil from mobil where nama_mobil='$cari'");
		return $data -> result();
	}
	
	function input_data($data,$table){
		$this -> db -> insert($table,$data);
	}
}
?>