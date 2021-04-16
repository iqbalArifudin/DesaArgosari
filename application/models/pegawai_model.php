<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai_model extends CI_Model {

    public function tampilPegawai()
    {
        $this->db->select('pegawai.*, penduduk.nama, penduduk.NIK, penduduk.jenis_kelamin');
        $this->db->join('penduduk', 'pegawai.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('pegawai')->result();
    }

    public function tambahDataPegawai($upload){
		$data=[
            'id_pegawai'=>$this->input->post('id_pegawai', true),
            'id_penduduk'=>$this->input->post('id_penduduk', true),
            'jabatan'=>$this->input->post('jabatan', true),
            'no_hp'=>$this->input->post('no_hp', true),
            'foto'=>$upload['file']['file_name'],
		];
	$this->db->insert('pegawai', $data);
    }
    
    public function upload(){    
        $config['upload_path'] = './assets/foto_pegawai/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    
   
    public function hapusDatapegawai($id_pegawai)
	{
        $this->db->where('id_pegawai', $id_pegawai);
        if(
            $this->db->delete('pegawai')
        ){
            return true;
        }else{
            return false;
        }
    }

    public function getPegawai($id_pegawai){  
        $this->db->select('pegawai.*, penduduk.nama, penduduk.NIK, penduduk.jenis_kelamin');
        $this->db->join('penduduk', 'pegawai.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->get('pegawai')->result();
    }
    
    public function getDetailPegawai($id_pegawai){
        $this->db->select('pegawai.*, penduduk.nama, penduduk.NIK, penduduk.jenis_kelamin');
        $this->db->join('penduduk', 'pegawai.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->get('pegawai')->result();
    }

    // public function ubahSurat($id_surat){
	// 	$data=[
    //         'id_surat'=>$this->input->post('id_surat', true),
    //         'dari'=>$this->input->post('dari', true),
    //         'perihal'=>$this->input->post('perihal', true),
    //         'tgl_masuk'=>$this->input->post('tgl_masuk', true),
    //         'tgl_diterima'=>$this->input->post('tgl_diterima', true),
    //         'status'=>$this->input->post('status', true),
    //         'keterangan'=>$this->input->post('keterangan', true),
	// 	];
    //     $this->db->where('id_surat', $id_surat);	
    //     $this->db->update('surat', $data);
    // }

    // public function download($id_surat){
    //     $query = $this->db->get_where('surat',array('id_surat'=>$id_surat));
    //     return $query->row_array();
    // }
    
}    