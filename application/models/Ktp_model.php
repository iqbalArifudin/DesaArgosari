<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp_model extends CI_Model {

    public function tampilKtp()
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('ktp')->result();
    }

    public function tampilSuratKtp()
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        return $this->db->get('ktp')->result();
    }

    public function tampilKtpPenduduk($id_penduduk){
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('ktp.id_penduduk', $id_penduduk);
        return $this->db->get('ktp')->result();
    }
    
    public function tampilKtpPegawai()
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        $this->db->where('status !=', 'Diajukan Ke Ketua RW');
        $this->db->where('status !=', 'Diajukan Ke Pelayanan');
        return $this->db->get('ktp')->result();
    }

    public function tampilKtpAdmin()
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        $this->db->or_where('status !=', 'Ditolak');
        $this->db->or_where('status !=', 'Diajukan Ke Ketua RW');
        return $this->db->get('ktp')->result();
    }

    public function tampilKtpRW()
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('status !=', 'Diajukan');
        return $this->db->get('ktp')->result();
    }


    public function tambahKtp($upload, $upload1)
    {
        // data notifikasi
        $dataNotif  = array(

            'akses'         => "RT", // untuk siapa ?
            'id_penduduk'   => $this->session->userdata('id_penduduk'),
            'id_ktp'        => $this->input->post('id_ktp', true),
            'text'          => "Pengajuan KTP baru",
        );

        // data pengajuan
		$data=[ 
            'id_ktp'=>$this->input->post('id_ktp', true),
            'id_penduduk'=>$this->session->userdata('id_penduduk'),
            'status'=>'Diajukan',
            'keterangan'=>$this->input->post('keterangan', true),
            'alasan' => 'Belum Diterima', 
            'fc_kk'=>$upload['file']['file_name'],
            'surat_rt_rw' => $upload1['file']['file_name'],
		];
	    $this->db->insert('ktp', $data);

        // buat notifikasi 
        $judul      = "Pengajuan KTP Baru";
        $deskripsi  = "Terdapat pengajuan KTP baru pada ". date('d F Y H.i A');
        $hak_aksestujuan = "RT";
        
        insertDataNotifikasi( $judul, $deskripsi, $dataNotif, $hak_aksestujuan );
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

    public function upload1()
    {
        $config['upload_path'] = './assets/foto_ktp/';
        $config['allowed_types'] = 'doc|docx|pdf|png|jpg|jpeg';
        $config['max_size']     = '750000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('surat_rt_rw')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
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


        $status = $this->input->post('status', true); // inisialisasi nilai agar dapat digunakan di 2 objek berbeda
        $alasan = $this->input->post('alasan', true);

        // data notifikasi


        // ambil data informasi penduduk yang dituju 
        /** Karena parameter yang kita terima adalah @id_ktp maka kita harus memanggil 
         * data ktp dan berdasasrkan id_penduduk yang bersangkutan */

        #Informasi KTP
        $ambilDataInformasiKTPById = $this->db->get_where('ktp', ['id_ktp' => $id_ktp])->row_array(); // sorthand query 
        
        // alternate 
        /** $ambilDataInformasiKTPById = "SELECT * FROM ktp WHERE id_ktp = '$id_ktp'"; */
        
        $penerima = $ambilDataInformasiKTPById['id_penduduk']; // id_penduduk

        $dataNotif  = array(

            'akses'         => "Penduduk", // RT | RW | Admin | Pegawai | Penduduk
            'id_penduduk'   => $penerima,
            'id_ktp'        => $this->input->post('id_ktp', true),
            'text'          => $alasan,
        );

        // buat notifikasi 
        $judul      = "Pengajuan KTP";
        $deskripsi  = "Status ".$status;
        
        $hak_aksestujuan = "Penduduk";
        $event = $hak_aksestujuan.'-'.$penerima; // karena untuk penduduk dibutuhkan penerima

        insertDataNotifikasi( $judul, $deskripsi, $dataNotif, $event );



        // notifikasi untuk RW (dengan catatan status di acc)
        if ( $status == "Diajukan Ke Ketua RW" ) {


            // buat notifikasi untuk RW
            $dataNotifRW  = array(

                'akses'         => "RW", // RT | RW | Admin | Pegawai | Penduduk
                'id_penduduk'   => $penerima,
                'id_ktp'        => $this->input->post('id_ktp', true),
                'text'          => $status,
            );

             // buat notifikasi 
            $judulRW      = "Pengajuan KTP";
            $deskripsiRW  = "Status ".$status;
            
            $hak_aksestujuanRW = "RW";
            $event = $hak_aksestujuanRW;

            insertDataNotifikasi( $judulRW, $deskripsiRW, $dataNotifRW, $event );
        }


        // - - - - - - - - - -


		$data=[
            'status'=> $status,
            'alasan'=> $alasan,
		];
        $this->db->where('id_ktp', $id_ktp);	
        $this->db->update('ktp', $data);
    }


    public function getKtp($id_ktp)
    {
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_ktp', $id_ktp);
        return $this->db->get('ktp')->result();
    }
    
    public function getDetailKtp($id_ktp){
        $this->db->select('ktp.*, penduduk.*');
        $this->db->join('penduduk', 'ktp.id_penduduk = penduduk.id_penduduk');
        $this->db->where('id_ktp', $id_ktp);
        return $this->db->get('ktp')->result();
    }

    public function download($id_ktp){
        $query = $this->db->get_where('ktp',array('id_ktp'=>$id_ktp));
        return $query->row_array();
    }


    
}    