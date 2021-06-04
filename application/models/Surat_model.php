<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{

    public function tampilSurat()
    {
        $this->db->select('surat.*, penduduk.*');
        $this->db->join('penduduk', 'surat.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('surat')->result();
    }

    public function tampilSuratPenduduk($id_penduduk)
    {
        $this->db->select('surat.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'surat.id_penduduk = penduduk.id_penduduk');
        $this->db->where('surat.id_penduduk', $id_penduduk);
        return $this->db->get('surat')->result();
    }

    public function tambahDataSurat()
    {
        $data = [
            'id_surat' => $this->input->post('id_surat', true),
            'id_penduduk' => $this->session->userdata('id_penduduk'),
            'keterangan' => $this->input->post('keterangan', true),
            'status_surat' => 'Diajukan',
        ];
        $this->db->insert('surat', $data);
    }


    public function hapusData($id_surat)
    {
        $this->db->where('id_surat', $id_surat);
        if (
            $this->db->delete('surat')
        ) {
            return true;
        } else {
            return false;
        }
    }


    public function getSurat($id_surat)
    {
        $this->db->select('surat.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'surat.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_surat', $id_surat);
        return $this->db->get('surat')->result();
    }

    public function download($id_surat)
    {
        $query = $this->db->get_where('surat', array('id_surat' => $id_surat));
        return $query->row_array();
    }
}