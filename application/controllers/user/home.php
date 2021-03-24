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
            // load view admin/overview.php
            $this->load->view("user/home");
        }
    }
        /* End of fils konsep.php */
    

?>