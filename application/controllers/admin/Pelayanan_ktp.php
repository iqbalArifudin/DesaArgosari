<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pelayanan_ktp extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model');  
        }
        
        public function index()
        {
            $data['title'] = 'Halaman Admin';
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
           $this->load->view('template admin/header',$data);
           $this->load->view('template admin/sidebar');
           $this->load->view('template admin/topbar'); 
           $this->load->view('admin/Pelayanan/Ktp/index', $data);
           $this->load->view('template admin/footer');   
        }

        public function chart(){
            
        }

    }
        /* End of fils admin.php */
    

?>