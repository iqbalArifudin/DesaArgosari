-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 08.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `foto_berita` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `keterangan`, `tanggal`, `foto_berita`) VALUES
(2, 'Masyarakat Desa Argosari Jabung Malang, Menerima Pencairan BLT 2021', 'Setelah menjalankan BST( bantuan sosial tunai) di tahun 2020 lalu kembali desa Argosari Kecamatan Jabung lanjutkan penyaluran BLT(bantuan langsung tunai) di tahun 2021 yang rencananya akan di salurkan kepada 87 kepala keluarga selama satu tahun kedepan. Setiap KK mendapatkan bantuan setiap bulannya sebesar Rp 300 ribu perbulannya .  Seperti yang di terangkan carik Argosari Supriyadi penerima bantuan untuk tahun ini sebanyak 87 KK. “Kita data dan kita survey yang mendapatkan bantuan hanya 87 KK d', '2021-03-25', 'mlg.jpeg'),
(5, 'Pelantikan Kades Terpilih Desa Argosari dan Sidorejo Kec. Jabung', 'Sebanyak 2 Kepala Desa hasil dari Pemilihan Kepala Desa (Pilkades Jabung) yang dilaksanakan di pada tanggal 11 Nopember 2018 di Desa Argosari dan Desa Sidorejo Kec. Jabung, diambil Sumpah dan dilantik menjadi Kepala Desa (Kades) oleh Camat Jabung sekaligus Serah Terima Jabatan (Sertijab) Ketua Penggerak PKK dari kedua Desa tersebut, dengan bertempat di Pendopo Kec. Jabung Kab. Malang, pada hari Rabu (2/01/19) pukul 10.00 WIB s/d. 11.00 WIB yang dihadiri 75 orang.  Rangkaian susunan acara Pelanti', '2021-03-24', 'Pelantikan-kades-jabung-1.jpg'),
(6, '193 Warga Desa Argosari Kecamatan Jabung Kembali Menerima BLT-DD Tahap Ke 06', '193 Warga Desa Argosari Kecamatan Jabung Kabupaten Malang kembali menerima bantuan sosial tunai yang kesekian kalinya di bulan Desember 2020  Pantauan media, terlihat keceriaan di wajah penerima bantuan BLT-DD senilai Rp. 300 ribu yang diberikan langsung oleh petugas dari kantor pos.  Tak lupa petugas kantor pos menghimbau kepada warga sebelum mengambil bantuan, untuk mengikuti peraturtan dengan mengedepankan protokol kesehatan 3 M.  “Mohon sebelum antri, disiapkan KTP, wajib pakai masker dan te', '2021-03-25', 'PSX_20201231_131317-390x205.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `keterangan`, `tanggal`, `foto`) VALUES
(1, 'Tempat Cuci Tangan dengan Sistem Injak Kreasi Mahasiswa UMM', '2021-03-25', 'whatsapp-image-2020-12-19-at-20-34-24-5fde030e8ede486dd72d2ed22.jpeg'),
(2, 'Potensi Kecamatan Jabung Oke', '2021-03-25', 'Peta+Bid_Pendidikan+Kecamatan+Jabung.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_penduduk` varchar(100) NOT NULL,
  `jabatan` enum('Kepala Desa','Sekretaris Desa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gol_darah` enum('AB','O','A','B') NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('Admin','Pegawai','Penduduk','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
