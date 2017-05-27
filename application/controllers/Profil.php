<?php
class Profil extends CI_Controller{

	public $model = NULL;
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Profil_model');
		$this->model = $this->Profil_model;
		
		$this->load->database();
		$this->load->helper('url'); //sebagai redirect
	}
	
	public function index(){
		$this->read();
	}
	
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_member = $_POST['id_member'];
			$this->model->nama_member = $_POST['nama_member'];
			$this->model->email = $_POST['email'];
			$this->model->no_hp = $_POST['no_hp'];
			$this->model->password = $_POST['password'];
			$this->model->insert();
			redirect('Profil');
		}else{
			$this->load->view('profil/Profil_create_view.php', ['model'=>$this->model]);
		}
	}
	
	public function read(){
		$data = $this->model->read();
		$this->load->view('profil/Profil_read_view.php', ['data'=>$data]);
	}
	
	public function update ($id_member){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_member = $_POST['id_member'];
			$this->model->nama_member = $_POST['nama_member'];
			$this->model->email = $_POST['email'];
			$this->model->no_hp = $_POST['no_hp'];
			$this->model->password = $_POST['password'];
			
			$this->model->update();
			redirect('Profil');
		}else{
			$query = $this->db->query("select * from member where id_member='$id_member'");
			$data = $query->row();
			$this->model->id_member = $data->id_member;
			$this->model->nama_member = $data->nama_member;
			$this->model->email = $data->email;
			$this->model->no_hp = $data->no_hp;
			$this->model->password = $data->password;
			
			$this->load->view('profil/Profil_update_view.php', ['model'=>$this->model]);
		}
	}
}


?>