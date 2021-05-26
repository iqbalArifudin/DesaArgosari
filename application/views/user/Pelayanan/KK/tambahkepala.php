<!DOCTYPE html>
<html lang="en">
<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KK &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-plus-square"></i>
    Tambah Data KK
</div>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" data-url="<?= base_url('penjualan') ?>">
                <div class="container-fluid">
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 m-0 text-gray-800">Tambah Data Kartu Keluarga</h1>
                        </div>
                        <div class="float-right">
                            <a href="<?= base_url('user/LayananKK') ?>" class="btn btn-primary btn-sm"><i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <center>
                                    <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                                </center>
                                <div class="card-body">
                                    <?php foreach ($penduduk as $j) : ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <h5>Penanggung Jawab</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama</label>
                                                <input type="text" name="nama" placeholder="" autocomplete="off"
                                                    class="form-control" required value="<?= $j->nama; ?>" readonly>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="nama" placeholder="" autocomplete="off"
                                                    class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        <p>
                                        <h5>Data Kepala Keluarga</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama_kpl" class="form-control" id="nama_kpl">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="NIK_kpl" class="form-control" id="NIK_kpl">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_kpl" class="form-control"
                                                    id="alamat_kpl">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Kode Pos</label>
                                                <input type="text" name="kode_pos_kpl" class="form-control"
                                                    id="kode_pos_kpl">
                                            </div>
                                            <div class="form-group col-1">
                                                <label>RT</label>
                                                <input type="text" name="RT_kpl" class="form-control" id="RT_kpl">
                                            </div>
                                            <div class="form-group col-1">
                                                <label>RW</label>
                                                <input type="text" name="RW_kpl" class="form-control" id="RW_kpl">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-3">
                                                <label>Kelurahan</label>
                                                <input type="text" name="kelurahan_kpl" class="form-control"
                                                    id="kelurahan_kpl">
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Kecamatan</label>
                                                <input type="text" name="kecamatan_kpl" class="form-control"
                                                    id="kecamatan_kpl">
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Kabupaten / Kota</label>
                                                <input type="text" name="kabupaten_kpl" class="form-control"
                                                    id="kabupaten_kpl">
                                            </div>
                                            <div class="form-group col-3">
                                                <label>Provinsi</label>
                                                <input type="text" name="provinsi_kpl" class="form-control"
                                                    id="provinsi_kpl">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label for="satuan">Upload Foto Surat Nikah Laki-Laki</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="suratnikah_l"
                                                        name="suratnikah_l" required autofocus>
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="satuan">Upload Foto Surat Nikah Perempuan</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="suratnikah_p"
                                                        name="suratnikah_p" required autofocus>
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group">
                                                <button type="submit" name="submit"
                                                    class="btn btn-success ">Submit</button>
                                                <button type="reset" class="btn btn-danger"><i
                                                        class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                            </div>

                                        </div>

                                        <table class="table table-bordered" id="keranjang">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Alamat</th>
                                                    <th>Kelurahan</th>
                                                    <th>Keluarga</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <?php foreach ($kk1 as $kk) : ?>
                                                <tr>
                                                    <td><?= $kk->nama_kpl ?></td>
                                                    <td><?= $kk->NIK_kpl ?></td>
                                                    <td><?= $kk->alamat_kpl ?></td>
                                                    <td><?= $kk->kelurahan_kpl ?></td>
                                                    <td>
                                                        <a class='btn btn-primary'
                                                            href="<?= base_url() . 'user/LayananKK/tambahKel/' . $kk->id_kepala_kel ?>">
                                                            <i class="fas fa-plus" aria-hidden="true"><span>
                                                                    Tambah Data Anggota Keluarga</span></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class='btn btn-danger'
                                                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                                            href="<?= base_url() . 'user/LayananKK/hapus/' . $kk->id_kepala_kel ?>">
                                                            <i class="fa fa-trash" aria-hidden="true"><span>
                                                                    Hapus</span></i>
                                                        </a>
                                                        <a class='btn btn-warning'
                                                            href="<?= base_url() . 'user/LayananKK/edit/' . $kk->id_kepala_kel ?>">
                                                            <i class="fas fa-edit" aria-hidden="true"><span>
                                                                    Edit</span></i>
                                                        </a>
                                                        <a class='btn btn-info'
                                                            href='<?= base_url() . 'user/LayananKK/detail/' . $kk->id_kepala_kel ?>'
                                                            class='btn btn-biru'>
                                                            <i class="fas fa-eye"
                                                                aria-hidden="true"><span>Detail</span></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tfoot>
                                        </table>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>