<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Notif_model extends CI_Model
{

    public function tampilNotif()
    {
        $this->db->select('*');
        return $this->db->get('notifikasi')->result();
    }

    // public function tampilSaranPenduduk($id_penduduk){
    //     $this->db->select('kritik_saran.*, penduduk.nama, penduduk.NIK');
    //     $this->db->join('penduduk', 'kritik_saran.id_penduduk = penduduk.id_penduduk');
    //     $this->db->where('kritik_saran.id_penduduk', $id_penduduk);
    //     return $this->db->get('kritik_saran')->result();
    // }

    public function tambahNotifPengaduan($text)
    {
        $data = [
            'id_penduduk' => $this->input->post('id_penduduk', true),
            // 'id_akta' => $this->input->post('id_akta', true),
            // 'id_ktp' => $this->input->post('id_ktp', true),
            // 'id_kepala_kel' => $this->input->post('id_kepala_kel', true),
            'id_pengaduan' => $this->input->post('id_pengaduan', true),
            // 'id_saran' => $this->input->post('id_saran', true),
            'text' => $text,
        ];
        $this->db->insert('notifikasi', $data);
    }


    public function hapusNotif($id_notif)
    {
        $this->db->where('id_notif', $id_notif);
        if (
            $this->db->delete('notifikasi')
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function ubahNotif($id_notif)
    {
        $data = [
            'text' => $this->input->post('text', true),
        ];
        $this->db->where('id_notif', $id_notif);
        $this->db->update('notifikasi', $data);
    }


    public function getNotif($id_notif)
    {
        $this->db->select('kritik_saran.*, penduduk.nama, penduduk.NIK');
        $this->db->join('penduduk', 'notifikasi.id_penduduk = penduduk.id_penduduk');
        $this->db->join('akta_kelahiran', 'notifikasi.id_akta = akta_kelahiran.id_akta');
        $this->db->join('ktp', 'notifikasi.id_ktp = ktp.id_ktp');
        $this->db->join('kepala_keluarga', 'notifikasi.id_kepala_kel = kepala_keluarga.id_kepala_kel');
        $this->db->join('pengaduan', 'notifikasi.id_pengaduan = pengaduan.id_pengaduan');
        $this->db->join('kritik_saran', 'notifikasi.id_saran = kritik_saran.id_saran');
        $this->db->where('id_notif', $id_notif);
        return $this->db->get('notifikasi')->result();
    }
}