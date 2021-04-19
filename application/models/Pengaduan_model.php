<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_model extends CI_Model {

    public function tampilPengaduan()
    {
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('pengaduan')->result();
    }

    public function tampilJenisPengaduan()
    {
          $pengaduansaja = 'Pengaduan';
        $query = $this->db->order_by('id_pengaduan', 'DESC')->get_where('pengaduan', array('jenis_pengaduan' => $pengaduansaja));
            return $query->result();
    }

    public function tambahDataPengaduan($upload){
		$data=[
            'id_pengaduan'=>$this->input->post('id_pengaduan', true),
            'id_penduduk'=>$this->input->post('id_penduduk', true),
            'jenis_pengaduan'=>$this->input->post('jenis_pengaduan', true),
            'tanggal'=>$this->input->post('tanggal', true),
            'alasan'=>$this->input->post('alasan', true),
            'keterangan'=>$this->input->post('keterangan', true),
            'bukti'=>$upload['file']['file_name'],
            'status'=>$this->input->post('status', true),
		];
	$this->db->insert('pengaduan', $data);
    }
    
    public function upload(){    
        $config['upload_path'] = './assets/foto_pengaduan/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('bukti')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    
   
    public function hapusDatapengaduan($id_pengaduan)
	{
        $this->db->where('id_pengaduan', $id_pengaduan);
        if(
            $this->db->delete('pengaduan')
        ){
            return true;
        }else{
            return false;
        }
    }

    public function getPengaduan($id_pengaduan){  
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->get('pengaduan')->result();
    }
    
    public function getDetailPengaduan($id_pengaduan){
        $this->db->select('pengaduan.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'pengaduan.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_pengaduan', $id_pengaduan);
        return $this->db->get('pengaduan')->result();
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