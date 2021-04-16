<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kritik extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pegawai_model');  
            $this->load->model('penduduk_model');  
        }
        
        public function index()
        {
        $data['pegawai'] = $this->pegawai_model->tampilPegawai();
        $this->load->view('template_layanan/header',$data);
        $this->load->view('template_layanan/sidebar',$data);
        $this->load->view('template_layanan/topbar',$data); 
        $this->load->view('user/Kritik',$data);
        $this->load->view('template_layanan/footer',$data);  
        }

        public function tambahpegawai(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
            $data['pegawai'] = $this->pegawai_model->tampilPegawai();
            $data['penduduk'] = $this->penduduk_model->tampilPendudukPegawai();
            if($this->form_validation->run() == FALSE){
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar');
                $this->load->view('template_layanan/topbar'); 
                $this->load->view('admin/pegawai/tambah' ,$data);
                $this->load->view('template_layanan/footer');  
            }
            else{
                $upload = $this->pegawai_model->upload();
                if ($upload['result'] == 'success'){
                    $this->pegawai_model->tambahDataPegawai($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                    redirect('admin/pegawai','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_pegawai)
        {
            if($this->pegawai_model->hapusDatapegawai($id_pegawai) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/pegawai');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('admin/pegawai','refresh');
            }
           
        }

        public function edit($id_pegawai)
        {
        $data ['pegawai'] = $this->pegawai_model->getPegawai($id_pegawai);
        $this->form_validation->set_rules('NIK', 'NIK', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template_layanan/header',$data);
                $this->load->view('template_layanan/sidebar',$data);
                $this->load->view('template_layanan/topbar',$data); 
                $this->load->view('admin/pegawai/edit',$data);
                $this->load->view('template_layanan/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_pegawai/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_file = $data['berita']['foto'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_pegawai/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto_pegawai', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_pegawai = $this->input->post('id_pegawai');
            $NIK = $this->input->post('NIK');
            $no_KK = $this->input->post('no_KK');
            $nama = $this->input->post('nama');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $agama = $this->input->post('agama');
            $status_perkawinan = $this->input->post('status_perkawinan');
            $pekerjaan = $this->input->post('pekerjaan');
            $gol_darah = $this->input->post('gol_darah');
            $alamat = $this->input->post('alamat');
            $RT = $this->input->post('RT');
            $RW = $this->input->post('RW');
            $desa = $this->input->post('desa');
            $password = $this->input->post('password');

            $this->db->set('NIK', $NIK);
            $this->db->set('no_KK', $no_KK);
            $this->db->set('nama', $nama);
            $this->db->set('tempat_lahir', $tempat_lahir);
            $this->db->set('tanggal_lahir', $tanggal_lahir);
            $this->db->set('agama', $agama);
            $this->db->set('status_perkawinan', $status_perkawinan);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('gol_darah', $gol_darah);
            $this->db->set('alamat', $alamat);
            $this->db->set('RT', $RT);
            $this->db->set('RW', $RW);
            $this->db->set('desa', $desa);
            $this->db->set('password', $password);
            $this->db->where('id_pegawai', $id_pegawai);
            $this->db->update('pegawai');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/pegawai');
        }
    }
    
        public function detail($id_pegawai){
            $data['pegawai']=$this->pegawai_model->getDetail($id_pegawai);
            $this->load->view('template_layanan/header',$data);
            $this->load->view('template_layanan/sidebar');
            $this->load->view('template_layanan/topbar'); 
            $this->load->view('admin/pegawai/detail' ,$data);
            $this->load->view('template_layanan/footer'); 
        } 

    }
        /* End of fils admin.php */
?>