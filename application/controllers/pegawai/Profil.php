<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Profil extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('penduduk_model');  
        }
        
        public function index()
        {
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
        $data['penduduk1'] = $this->penduduk_model->tampilPenduduk();
        $this->load->view('template pegawai/header',$data);
        $this->load->view('template pegawai/sidebar',$data);
        $this->load->view('template pegawai/topbar',$data); 
        $this->load->view('pegawai/Profil',$data);
        $this->load->view('template pegawai/footer',$data);  
        }

        public function profil($id_penduduk){
            $data['penduduk']=$this->penduduk_model->getDetail($id_penduduk);
            $this->load->view('template pegawai/header',$data);
            $this->load->view('template pegawai/sidebar');
            $this->load->view('template pegawai/topbar'); 
            $this->load->view('pegawai/Profil' ,$data);
            $this->load->view('template pegawai/footer'); 
        }
        
        public function edit($id_penduduk)
        {
            $data['penduduk'] = $this->penduduk_model->getPenduduk($this->session->userdata('id_penduduk'));
            $data ['penduduk1'] = $this->penduduk_model->getPenduduk($id_penduduk);
            $this->form_validation->set_rules('NIK', 'NIK', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('template pegawai/header',$data);
                $this->load->view('template pegawai/sidebar');
                $this->load->view('template pegawai/topbar'); 
                $this->load->view('pegawai/Edit_profil' ,$data);
                $this->load->view('template pegawai/footer'); 
            } else {

            //check jika ada gambar yang akan di upload
                $upload_file = $_FILES['foto']['name'];
                if ($upload_file) {
                    $config['upload_path'] = './assets/foto_penduduk/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size']     = '10000';
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto')) {
                        $old_file = $data['berita']['foto'];
                        if ($old_file != 'default.png') {
                            unlink(FCPATH . './assets/foto_penduduk/' . $old_file);
                        }
                        $new_file = $this->upload->data('file_name');
                        $this->db->set('foto', $new_file);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $this->db->where('id_penduduk', $id_penduduk);
                $this->db->update('penduduk');


                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('pegawai/Profil');
            }
        }
        

    }
        /* End of fils admin.php */
?>