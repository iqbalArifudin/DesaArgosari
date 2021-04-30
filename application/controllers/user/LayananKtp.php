<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LayananKtp extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model');  
            $this->load->model('Pengaduan_model');  
            $this->load->model('Ktp_model');  
        }
        
        public function index()
        {
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        // $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduan();
        $data['ktp'] = $this->Ktp_model->tampilKtpPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->penduduk_model->tampilPendudukSaja($this->session->userdata('id_penduduk'));
        $this->load->view('template_layanan/header',$data);
        $this->load->view('template_layanan/sidebar',$data);
        $this->load->view('template_layanan/topbar',$data); 
        $this->load->view('user/Pelayanan/Ktp/index',$data);
        $this->load->view('template_layanan/footer',$data);  
        }

        public function tambahKtp(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            $data['ktp'] = $this->Ktp_model->tampilKtpPenduduk($this->session->userdata('id_penduduk'));
            // $data['pengaduan'] = $this->Pengaduan_model->tampilPengaduan();
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar');
                $this->load->view('template_layanan/topbar'); 
                $this->load->view('user/Pelayanan/Ktp/tambah' ,$data);
                $this->load->view('template_layanan/footer',$data);  

            }         
            else{
                $upload = $this->Ktp_model->upload();
                if ($upload['result'] == 'success'){
                    $this->Ktp_model->tambahKtp($upload);
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data berhasil di tambahkan ! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('user/LayananKtp','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
                
            }
        }

        public function hapus($id_ktp)
        {
            if($this->Ktp_model->hapusDataKtp($id_ktp) == false)
            {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data tidak dapat dihapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/Pengaduan');
            }else{
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                     Data Berhasil di hapus !
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/LayananKtp','refresh');
            }
           
        }

        public function edit($id_ktp)
        {
        $data ['ktp'] = $this->Ktp_model->getKtp($id_ktp);
        $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar',$data);
                $this->load->view('template_layanan/topbar',$data); 
                $this->load->view('user/Pelayanan/Ktp/edit',$data);
                $this->load->view('template_layanan/footer',$data);  
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['fc_kk']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_ktp/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('fc_kk')) {
                    $old_file = $data['ktp']['fc_kk'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_ktp/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('fc_kk', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_ktp = $this->input->post('id_ktp');
            $keterangan = $this->input->post('keterangan');

            $this->db->set('keterangan', $keterangan);
            $this->db->where('id_ktp', $id_ktp);
            $this->db->update('ktp');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('user/LayananKtp');
        }
    }
    
        public function detail($id_ktp){
            $data['ktp']=$this->Ktp_model->getDetailKtp($id_ktp);
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar'); 
            $this->load->view('user/Pelayanan/Ktp/detail' ,$data);
            $this->load->view('template_layanan/footer'); 
        } 

    }
        /* End of fils admin.php */
?>