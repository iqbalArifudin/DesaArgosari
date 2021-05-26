<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class akta_kelahiran extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model'); 
            $this->load->model('akta_kelahiran_model');  
            $this->load->model('akta_kelahiran_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->akta_kelahiran_model->tampilAll();
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Pelayanan/Akta_kelahiran/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function hapus($id_akta)
        {
            if($this->akta_kelahiran_model->hapusData($id_akta) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/akta_kelahiran');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('admin/akta_kelahiran','refresh');
            } 
        }

        public function edit($id_akta){
            $this->load->library('form_validation');
            $data ['akta'] = $this->akta_kelahiran_model->getAkta($id_akta);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/Pelayanan/Akta_kelahiran/detail' ,$data);
                $this->load->view('template admin/footer',$data);
            }
            else{
                    $this->akta_kelahiran_model->ubahAkta($id_akta);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
                    redirect('admin/akta_kelahiran','refresh');
            }
        }
    
        public function detail($id_akta){
            $data['akta']=$this->akta_kelahiran_model->getDetailAkta($id_akta);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/Pelayanan/Akta_kelahiran/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 


    }
        /* End of fils admin.php */