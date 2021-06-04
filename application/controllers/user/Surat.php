<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pegawai_model');
        $this->load->model('penduduk_model');
        $this->load->model('Surat_model');
    }

    public function index()
    {
        $data['surat'] = $this->Surat_model->tampilSuratPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template_layanan/header', $data);
        $this->load->view('template_layanan/sidebar', $data);
        $this->load->view('template_layanan/topbar', $data);
        $this->load->view('user/Pelayanan/Surat/index', $data);
        $this->load->view('template_layanan/footer', $data);
    }

    public function tambahSurat()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['surat'] = $this->Surat_model->tampilSurat();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar');
            $this->load->view('user/Pelayanan/Surat/tambah', $data);
            $this->load->view('template_layanan/footer');
        } else {
            $this->Surat_model->tambahDataSurat();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Permintaan Anda Berhasil Dikirim ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('user/Surat', 'refresh');
        }
    }

    public function edit($id_surat)
    {
        $this->load->library('form_validation');
        $data['surat'] = $this->Surat_model->getSurat($id_surat);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_layanan/header', $data);
            $this->load->view('template_layanan/sidebar', $data);
            $this->load->view('template_layanan/topbar', $data);
            $this->load->view('user/Pelayanan/Surat/edit', $data);
            $this->load->view('template_layanan/footer', $data);
        } else {
            $this->Surat_model->ubahSurat($id_surat);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Permintaan Anda Berhasil Diedit !
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            </div>'
            );
            redirect('user/Surat', 'refresh');
        }
    }

    public function hapus($id_surat)
    {
        if ($this->Surat_model->hapusData($id_surat) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/Surat');
        } else {
            $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('user/Surat', 'refresh');
        }
    }

    public function download($id_surat)
    {
        $this->load->helper('download');
        $fileinfo = $this->Surat_model->download($id_surat);
        $file = './assets/surat_pengajuan/' . $fileinfo['file_surat'];
        force_download($file, NULL);
    }
}
        /* End of fils admin.php */