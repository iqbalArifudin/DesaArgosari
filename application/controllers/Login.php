<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model("Login_model");
	}
	public function index(){
		$data ['title']='Login';
        $this->load->view('template user/header',$data);
		$this->load->view('Login', $data);
        $this->load->view('template user/footer',$data);
	}
	public function proses_login(){
		$this->load->model("Login_model");
		$NIK=htmlspecialchars($this->input->post('NIK'));
		$password=htmlspecialchars($this->input->post('password'));
		$ceklogin=$this->Login_model->login($NIK, $password);
		if ($ceklogin != false) {
			foreach ($ceklogin as $row) {
				$this->load->library('session');
				$this->session->set_userdata('id_penduduk', $row->id_penduduk);
				$this->session->set_userdata('NIK', $row->NIK);
				$this->session->set_userdata('hak_akses', $row->hak_akses);

				if($this->session->userdata('hak_akses')=='Admin'){
					redirect('admin/home');
				}
				else if($this->session->userdata('hak_akses')=='Penduduk'){
					redirect('user/LayananKtp');
				}
				else if($this->session->userdata('hak_akses')=='Pegawai'){
					redirect('pegawai/home');
				}
			}
		}
		else{
				$this->load->view('Login');
				$this->session->set_flashdata('pesan','Username dan Password Anda salah');
				redirect('Login');
			}
	}
	
}
?>