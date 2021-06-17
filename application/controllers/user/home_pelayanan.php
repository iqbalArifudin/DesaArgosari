<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class home_pelayanan extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model');  
        }
        
        public function index()
        {
            $data['title'] = 'Halaman User';
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
           $this->load->view('template_layanan/header',$data);
           $this->load->view('template_layanan/sidebar');
           $this->load->view('template_layanan/topbar'); 
           $this->load->view('user/home_pelayanan', $data);
           $this->load->view('template_layanan/footer');
        }

        public function chart(){
            
        }

    }
        /* End of fils admin.php */
    

?>