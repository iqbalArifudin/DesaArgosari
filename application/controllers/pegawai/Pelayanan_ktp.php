<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pelayanan_ktp extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model'); 
            $this->load->model('Ktp_model');  
        }
        
        public function index()
        {
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['ktp'] = $this->Ktp_model->tampilKtp();
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/Pelayanan/Ktp/index',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function hapus($id_ktp)
        {
            if($this->Ktp_model->hapusDataKtp($id_ktp) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('pegawai/Pelayanan_ktp');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('pegawai/Pelayanan_ktp','refresh');
            } 
        }

        public function edit($id_ktp){
            $this->load->library('form_validation');
            $data ['ktp'] = $this->Ktp_model->getKtp($id_ktp);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
            $this->form_validation->set_rules('status', 'status', 'required');
            // $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar',$data);
                $this->load->view('template pegawai/topbar',$data); 
                $this->load->view('pegawai/Pelayanan/Ktp/edit' ,$data);
                $this->load->view('template pegawai/footer',$data);
            }
            else{
                    $this->Ktp_model->ubahKtp($id_ktp);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
                    redirect('pegawai/Pelayanan_ktp','refresh');
            }
        }
    
        public function detail($id_ktp){
            $data['ktp']=$this->Ktp_model->getDetailKtp($id_ktp);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/Pelayanan/Ktp/detail' ,$data);
            $this->load->view('template pegawai/footer'); 
        } 


    }
        /* End of fils admin.php */
    

?>