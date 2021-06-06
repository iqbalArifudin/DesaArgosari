<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pegawai_model');
        $this->load->model('penduduk_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman RW';
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar');
        $this->load->view('template RW/topbar');
        $this->load->view('RW/home', $data);
        $this->load->view('template RW/footer');
    }
}
        /* End of fils admin.php */