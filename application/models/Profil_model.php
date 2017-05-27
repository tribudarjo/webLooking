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
				$sql = sprintf("insert into member values ('%s','%s','%e','%f','%d')",
						$this->id_member,
						$this->nama_member,  
						$this->email,  
						$this->no_hp,
						$this->password
						);
						
				$this->db->query($sql);
			}
				
			public function update(){
				$sql = sprintf("update member set nama_member='%s', email=%e, no_hp=%f, password=%d where id_member='%s'",
						$this->nama_member, 
						$this->email,
						$this->no_hp,
						$this->password,
						$this->id_member
						);						
						
				$this->db->query($sql);
			}
			
			public function read(){
				$sql = "select * from member order by id_member";
				$query = $this->db->query($sql);
				return $query->result();
			}
			
			private function _attributeLabels(){
				return [
					'id_member'=>'id_member: ',
					'nama_member'=>'nama_member: ',
					'email'=>'email: ',
					'password'=>'password: ',
					'id_member'=>'id_member: '
				];
			}
		}
		
		?>
				
						
						