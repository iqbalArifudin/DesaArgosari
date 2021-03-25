<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class berita extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('berita_model');  
        }
        
        public function index()
        {
        //    $this->admin_model->index();s
        // $data['user'] = $this->user_model->tampilUser($this->session->userdata('id_berita'));
        $data['berita'] = $this->berita_model->tampilBerita();
        // $data['berita'] = $this->db->get('berita')->result();
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/berita/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function tambahberita(){
            $data['berita'] = $this->berita_model->tampilBerita();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar');
                $this->load->view('template admin/topbar'); 
                $this->load->view('admin/berita/tambah' ,$data);
                $this->load->view('template admin/footer');  
            }
            else{
                $upload = $this->berita_model->upload();
                if ($upload['result'] == 'success'){
                    $this->berita_model->tambahBerita($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                    redirect('admin/berita','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_berita)
        {
            if($this->berita_model->hapusDataUser($id_berita) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/berita');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('admin/berita','refresh');
            }
           
        }

        public function edit($id_berita)
        {
        $data ['berita'] = $this->berita_model->getBerita($id_berita);
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/berita/edit',$data);
                $this->load->view('template admin/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto_berita']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/foto_berita/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_berita')) {
                    $old_file = $data['berita']['foto_berita'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/foto_berita/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto_berita', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_berita = $this->input->post('id_berita');
            $judul = $this->input->post('judul');
            $keterangan = $this->input->post('keterangan');
            $tanggal = $this->input->post('tanggal');

            $this->db->set('judul', $judul);
            $this->db->set('keterangan', $keterangan);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id_berita', $id_berita);
            $this->db->update('berita');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/berita');
        }
    }
    
        public function detail($id_berita){
            $data['berita']=$this->berita_model->getDetail($id_berita);
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/berita/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 

    }
        /* End of fils admin.php */
?>