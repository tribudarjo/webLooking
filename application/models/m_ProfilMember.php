<?php 
class m_ProfilMember extends CI_Model{ 
		
		function getall(){
			$ambil_data = $this->db->get('member');
  
			if ($ambil_data->num_rows() > 0 ){
				foreach ($ambil_data->result() as $data){
						$hasil[] = $data;
						
		
			//membuat library database
			$this->load->database(); //fungsi untuk memuat database (library)
			}
			
			
   }
   return $hasil;
  }
 }
 
?>
