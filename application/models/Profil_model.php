<?php 
	class Profil_model extends CI_Model{
		public $id_member;
		public $nama_member;
		public $email;
		public $no_hp;
		public $password;
		
		public $labels = [];
		
		public function __construct(){
			parent::__construct();
			$this->labels = $this->_attributeLabels();
			
			//membuat library database
			$this->load->database(); //fungsi untuk memuat database (library)
			}
			
			public function insert(){
				$sql = sprintf("insert into member values ('%s','%s','%s','%s','%s')",
						$this->id_member,
						$this->nama_member,  
						$this->email,  
						$this->no_hp,
						$this->password
						);
						
				$this->db->query($sql);
			}
				
			public function update(){
				$sql = sprintf("update member set nama_member='%s', email='%s', no_hp='%s', password='%s' where id_member='%s'",
						$this->nama_member, 
						$this->email,
						$this->no_hp,
						$this->password,
						$this->id_member
						);						
						
				$this->db->query($sql);
			}
			
			public function read(){
				$email = $_SESSION['email'];
				$sql = "select * from member WHERE email='$email'";
				$query = $this->db->query($sql);
				return $query->result();
			}
			
			private function _attributeLabels(){
				return [
					'id_member'=>'ID Member: ',
					'nama_member'=>'Nama Member: ',
					'email'=>'E-mail: ',
					'no_hp'=>'No HP: ',
					'password'=>'Password: '
				];
			}
		}
		
		?>
				
						
						