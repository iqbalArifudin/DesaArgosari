<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Galeri extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            // $this->load->model('user/surat/surat_model');
            // $this->load->model('user/user/user_model'); 
        }
        
        public function index()
        {
            $data['title'] = 'Halaman user';
           $this->load->view('template user/header',$data);
           $this->load->view('user/Galeri', $data);
           $this->load->view('template user/footer');   
        }

    }
        /* End of fils user.php */
    

?>