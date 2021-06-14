<?php

defined('BASEPATH') or exit('No direct script access allowed');

class akta_kelahiran extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pegawai_model');
        $this->load->model('penduduk_model');
        $this->load->model('akta_kelahiran_model');
    }

    public function index()
    {
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['akta'] = $this->akta_kelahiran_model->tampilAll();
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar', $data);
        $this->load->view('template RW/topbar', $data);
        $this->load->view('RW/Pelayanan/Akta_kelahiran/index', $data);
        $this->load->view('template RW/footer', $data);
    }

    public function hapus($id_akta)
    {
        if ($this->akta_kelahiran_model->hapusData($id_akta) == false) {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Gagal Di hapus, Karena Data User di pakai ! 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>'
            );
            redirect('RW/akta_kelahiran');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Dihapus ! 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>'
            );
            redirect('RW/akta_kelahiran', 'refresh');
        }
    }

    public function edit($id_akta)
    {
        $this->load->library('form_validation');
        $data['akta'] = $this->akta_kelahiran_model->getAkta($id_akta);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('status', 'status', 'required');
        // $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template RW/header', $data);
            $this->load->view('template RW/sidebar', $data);
            $this->load->view('template RW/topbar', $data);
            $this->load->view('RW/Pelayanan/Akta_kelahiran/detail', $data);
            $this->load->view('template RW/footer', $data);
        } else {
            $this->akta_kelahiran_model->ubahDataAkta($id_akta);
            $this->session->set_flashdata('pesan3', 'Data Berhasil Di edit');
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       Data Telah Di update ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
            );
            redirect('RW/akta_kelahiran', 'refresh');
        }
    }

    public function detail($id_akta)
    {
        $data['akta'] = $this->akta_kelahiran_model->getDetailAkta($id_akta);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RW/header', $data);
        $this->load->view('template RW/sidebar');
        $this->load->view('template RW/topbar');
        $this->load->view('RW/Pelayanan/Akta_kelahiran/detail', $data);
        $this->load->view('template RW/footer');
    }
}
        /* End of fils RT.php */