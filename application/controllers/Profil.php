<?php
class Profil extends CI_Controller{

	public $model = NULL;
	public $Profil_model = NULL;
	public $user = NULL;
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Profil_model');
		$this->model = $this->Profil_model;
		
		$this->load->database();
		$this->load->helper('url'); //sebagai redirect
		$this->load->model('login_model');
		$this-> user = $this->login_model;
	
	//session_start();
		$this->model = $this->Profil_model;
	}
	
	public function index(){
		$this->read();
	}
	
	public function read(){
		if(isset($_SESSION['email']) && isset($_SESSION['password'])){
			$this->user->email = $_SESSION['email'];
			$this->user->password = $_SESSION['password'];
			$cek = $this->user->login();
			if($cek == 0){
				$this->load->view('login_form_view');
				unset($_SESSION['email']);
				unset($_SESSION['password']);
			}else{
				$rows = $this -> user -> read();
				$this->load->view('menu', ['rows'=>$rows]);
				$data = $this->model->read();
				$this->load->view('profil/Profil_read_view', ['data'=>$data]);
			}
		}else{
			$this->load->view('login_form_view');
		}
	}
	
	public function update ($id_member){
		if(isset($_SESSION['email']) && isset($_SESSION['password'])){
			$this->user->email = $_SESSION['email'];
			$this->user->password = $_SESSION['password'];
			$cek = $this->user->login();
			if($cek == 0){
				$this->load->view('login_form_view');
				unset($_SESSION['email']);
				unset($_SESSION['password']);
			}else{
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
			
					$rows = $this -> user -> read();
					$this->load->view('menu', ['rows'=>$rows]);
					$data = $this->model->read();
					$this->load->view('profil/Profil_update_view.php', ['model'=>$this->model, 'data'=>$data]);
				}
			}	
		}else{
			$this->load->view('login_form_view');
		}
	}
	
	public function hapus($id_member){
				$this -> model -> id_member = $id_member;
				$this -> model -> delete();
				redirect('login');

	}
		
}

?>