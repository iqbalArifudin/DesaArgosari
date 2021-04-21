<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class home extends CI_Controller {
    
        
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
           $this->load->view('template pegawai/header',$data);
           $this->load->view('template pegawai/sidebar');
           $this->load->view('template pegawai/topbar'); 
           $this->load->view('pegawai/home', $data);
           $this->load->view('template pegawai/footer');   
        }

        public function chart(){
            
        }

    }
        /* End of fils admin.php */
    

?>