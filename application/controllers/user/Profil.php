<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Profil extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('penduduk_model');  
        }
        
        public function index()
        {
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->penduduk_model->tampilPenduduk();
        $this->load->view('template_layanan/header',$data);
        $this->load->view('template_layanan/sidebar',$data);
        $this->load->view('template_layanan/topbar',$data); 
        $this->load->view('user/Profil',$data);
        $this->load->view('template_layanan/footer',$data);  
        }

        public function profil($id_penduduk){
            $data['penduduk']=$this->penduduk_model->getDetail($id_penduduk);
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar'); 
            $this->load->view('user/Profil' ,$data);
            $this->load->view('template_layanan/footer'); 
        } 
        

    }
        /* End of fils admin.php */
?>