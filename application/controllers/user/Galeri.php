<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Galeri extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
        $this->load->model('galeri_model');
        $this->load->model('pegawai_model');
        $this->load->model('penduduk_model');
            // $this->load->model('admin/user/user_model');
        }
        
        public function index()
        {
        // load view admin/overview.php
        $data['title'] = 'Halaman User';
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['galeri'] = $this->galeri_model->tampilGaleri();
        $data['pegawai'] = $this->pegawai_model->tampilPegawai();
        $this->load->view('template user/header', $data);
        $this->load->view('user/Galeri', $data);
        $this->load->view('template user/footer', $data);
    }
    }
        /* End of fils konsep.php */
    

?>