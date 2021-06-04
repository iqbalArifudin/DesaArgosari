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
        $this->load->model('Pengaduan_model');
        $this->load->model('Surat_model');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['surat'] = $this->Surat_model->tampilSurat();
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template RT/header', $data);
        $this->load->view('template RT/sidebar', $data);
        $this->load->view('template RT/topbar', $data);
        $this->load->view('RT/Pelayanan/Surat/index', $data);
        $this->load->view('template RT/footer', $data);
    }

    public function hapus($id_surat)
    {
        if ($this->Surat_model->hapusDataSurat($id_surat) == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('RT/Surat');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil di hapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
            );
            redirect('RT/Surat', 'refresh');
        }
    }

    public function edit($id_surat)
    {
        $data['surat'] = $this->Surat_model->getSurat($id_surat);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('status_surat', 'status_surat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template RT/header', $data);
            $this->load->view('template RT/sidebar', $data);
            $this->load->view('template RT/topbar', $data);
            $this->load->view('RT/Pelayanan/Surat/edit', $data);
            $this->load->view('template RT/footer', $data);
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['file_surat']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/surat_pengajuan/';
                $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_surat')) {
                    $old_file = $data['surat']['file_surat'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/surat_pengajuan/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('file_surat', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_surat = $this->input->post('id_surat');
            $status_surat = $this->input->post('status_surat');

            $this->db->set('status_surat', $status_surat);
            $this->db->where('id_surat', $id_surat);
            $this->db->update('surat');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('RT/Surat');
        }
    }

    public function detail($id_surat)
    {
        $data['surat'] = $this->Surat_model->getDetailSurat($id_surat);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->load->view('template RT/header', $data);
        $this->load->view('template RT/sidebar');
        $this->load->view('template RT/topbar');
        $this->load->view('user/Pelayanan/Surat/detail', $data);
        $this->load->view('template RT/footer');
    }

    public function pdf()
    {

        $data['surat'] = $this->Surat_model->tampilSurat();
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat Penerbitan KTP RT/RW.pdf";
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->load_view('RT/Pelayanan/Surat/surat_rt_rw_pdf', $data);
    }
}
        /* End of fils admin.php */