<?php
class konfirmasi_model extends CI_Model{
	public $id_booking;
	public function __construct(){
		parent::__construct();
		$this -> load -> database();
	}
	/*public function read(){
		$sql = "SELECT * FROM mobil a, booking b where a.id_mobil = b.id_mobil order by b.id_booking desc limit 1";
		$query = $this -> db -> query($sql);
		return $query -> result();
	}*/
	
	public function dataBooking(){
		$sql = "SELECT m.nama_mobil,a.id_booking, a.tanggal_sewa, a.jam_pinjam, a.tanggal_kembali, a.jam_kembali FROM booking a INNER JOIN mobil m ON a.id_mobil = m.id_mobil order by a.id_booking desc limit 1";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function delete(){
				$sql = sprintf("DELETE FROM booking where id_booking = '%s'", $this -> id_booking);
		$this -> db -> query($sql);
			}
}
?>