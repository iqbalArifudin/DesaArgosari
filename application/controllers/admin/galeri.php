<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class galeri extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('galeri_model');  
        }
        
        public function index()
        {
        //    $this->admin_model->index();s
        // $data['user'] = $this->user_model->tampilUser($this->session->userdata('id_berita'));
        $data['galeri'] = $this->galeri_model->tampilGaleri();
        // $data['berita'] = $this->db->get('berita')->result();
        $this->load->view('template admin/header',$data);
        $this->load->view('template admin/sidebar',$data);
        $this->load->view('template admin/topbar',$data); 
        $this->load->view('admin/galeri/index',$data);
        $this->load->view('template admin/footer',$data);  
        }

        public function tambahgaleri(){
            $data['galeri'] = $this->galeri_model->tampilGaleri();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar');
                $this->load->view('template admin/topbar'); 
                $this->load->view('admin/galeri/tambah' ,$data);
                $this->load->view('template admin/footer');  
            }
            else{
                $upload = $this->galeri_model->upload();
                if ($upload['result'] == 'success'){
                    $this->galeri_model->tambahGaleri($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                    redirect('admin/galeri','refresh');
                } else {
                    echo $upload['error'];
                }
                // $this->session->set_flashdata('name', 'value');
            }
        }

        public function hapus($id_galeri)
        {
            if($this->galeri_model->hapus($id_galeri) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
                redirect('admin/galeri');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('admin/galeri','refresh');
            }
           
        }

        public function edit($id_galeri)
        {
        $data ['galeri'] = $this->galeri_model->getGaleri($id_galeri);
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
                $this->load->view('template admin/header',$data);
                $this->load->view('template admin/sidebar',$data);
                $this->load->view('template admin/topbar',$data); 
                $this->load->view('admin/galeri/edit',$data);
                $this->load->view('template admin/footer',$data); 
        } else {

            //check jika ada gambar yang akan di upload
            $upload_file = $_FILES['foto']['name'];
            if ($upload_file) {
                $config['upload_path'] = './assets/galeri/';    
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']     = '10000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_file = $data['gaeleri']['foto'];
                    if ($old_file != 'default.png') {
                        unlink(FCPATH . './assets/galeri/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('foto', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id_berita = $this->input->post('id_galeri');
            $keterangan = $this->input->post('keterangan');
            $tanggal = $this->input->post('tanggal');

            $this->db->set('keterangan', $keterangan);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id_galeri', $id_galeri);
            $this->db->update('galeri');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/galeri');
        }
    }
    
        public function detail($id_galeri){
            $data['galeri']=$this->galeri_model->getDetail($id_galeri);
            $this->load->view('template admin/header',$data);
            $this->load->view('template admin/sidebar');
            $this->load->view('template admin/topbar'); 
            $this->load->view('admin/galeri/detail' ,$data);
            $this->load->view('template admin/footer'); 
        } 

    }
        /* End of fils admin.php */
?>