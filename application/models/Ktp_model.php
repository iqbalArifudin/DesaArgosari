<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp_model extends CI_Model {

    public function tampilKtp()
    {
        $this->db->select('ktp.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('ktp')->result();
    }

    public function tampilKtpPenduduk($id_penduduk){
        $this->db->select('ktp.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('ktp.id_penduduk', $id_penduduk);
        return $this->db->get('ktp')->result();
    }
    public function tampilKtpPegawai()
    {
        $this->db->select('ktp.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        return $this->db->get('ktp')->result();
    }


    public function tambahKtp($upload){
		$data=[
            'id_ktp'=>$this->input->post('id_ktp', true),
            'id_penduduk'=>$this->session->userdata('id_penduduk'),
            'status'=>'Diajukan',
            'keterangan'=>$this->input->post('keterangan', true),
            'alasan'=>'Belum Diterima',
            'fc_kk'=>$upload['file']['file_name'],
		];
	$this->db->insert('ktp', $data);
    }
    
    public function upload(){    
        $config['upload_path'] = './assets/foto_ktp/';  
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';  
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('fc_kk')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    
   
    public function hapusDataKtp($id_ktp)
	{
        $this->db->where('id_ktp', $id_ktp);
        if(
            $this->db->delete('ktp')
        ){
            return true;
        }else{
            return false;
        }
    }
    
    public function ubahKtp($id_ktp){
		$data=[
            'status'=>$this->input->post('status', true),
            'alasan'=>$this->input->post('alasan', true),
		];
        $this->db->where('id_ktp', $id_ktp);	
        $this->db->update('ktp', $data);
    }


    public function getKtp($id_ktp){  
        $this->db->select('ktp.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_ktp', $id_ktp);
        return $this->db->get('ktp')->result();
    }
    
    public function getDetailKtp($id_ktp){
        $this->db->select('ktp.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_ktp', $id_ktp);
        return $this->db->get('ktp')->result();
    }

    public function download($id_ktp){
        $query = $this->db->get_where('ktp',array('id_ktp'=>$id_ktp));
        return $query->row_array();
    }
    
}    