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
        $data['ktp'] = $this->Ktp_model->tampilKtpAdmin();
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/Pelayanan/Ktp/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function hapus($id_ktp)
        {
            if($this->Ktp_model->hapusDataKtp($id_ktp) == false)
            {
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
                redirect('admin/Pelayanan_ktp');
            }else{
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
                redirect('admin/Pelayanan_ktp','refresh');
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
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/Pelayanan/Ktp/detail' ,$data);
                $this->load->view('template admin/footer',$data);
            }
            else{
                    $this->Ktp_model->ubahKtp($id_ktp);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                       Data Telah Diajukan Ke Kepala Desa ! 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
            );
                    redirect('admin/Pelayanan_ktp','refresh');
            }
        }
    
        public function detail($id_ktp){
            $data['ktp']=$this->Ktp_model->getDetailKtp($id_ktp);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/Pelayanan/Ktp/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 


    }
        /* End of fils admin.php */
    

?>