<?php
class konfirmasi_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this -> load -> database();
	}
	public function read(){
		$sql = "SELECT * FROM mobil a, booking b where a.id_mobil = b.id_mobil order by b.id_booking desc limit 1";
		$query = $this -> db -> query($sql);
		return $query -> result();
	}
	
}
?>