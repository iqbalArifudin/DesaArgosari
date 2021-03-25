<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class home extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            // $this->load->model('admin/surat/surat_model');
            // $this->load->model('admin/user/user_model'); 
        }
        
        public function index()
        {
            $data['title'] = 'Halaman Admin';
           $this->load->view('template admin/header',$data);
           $this->load->view('template admin/sidebar');
           $this->load->view('template admin/topbar'); 
           $this->load->view('admin/home', $data);
           $this->load->view('template admin/footer');   
        }

        public function chart(){
            
        }

    }
        /* End of fils admin.php */
    

?>