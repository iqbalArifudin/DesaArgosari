<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->model('pegawai_model');
        $this->load->model('penduduk_model');
        // $this->load->model('admin/user/user_model');
    }

    public function index()
    {
        // load view admin/overview.php
        $data['title'] = 'Halaman User';
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['berita'] = $this->berita_model->tampilBerita();
        $data['pegawai'] = $this->pegawai_model->tampilPegawai();
        $this->load->view('template user/header', $data);
        $this->load->view('user/Berita', $data);
        $this->load->view('template user/footer', $data);
    }

    public function detail($id_berita)
    {
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['berita'] = $this->berita_model->getDetail($id_berita);
        $this->load->view('template user/header', $data);
        $this->load->view('user/Detail_berita', $data);
        $this->load->view('template user/footer', $data);
    } 
}
        /* End of fils konsep.php */