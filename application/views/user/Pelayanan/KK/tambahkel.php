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
                            <h1 class="h3 m-0 text-gray-800">Tambah Data Anggota Keluarga</h1>
                        </div>
                        <div class="float-right">
                            <a href="<?= base_url('user/LayananKK/tambahKK') ?>" class="btn btn-primary btn-sm"><i
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
                                    <?php foreach ($kk1 as $j) : ?>
                                    <form action="<?= base_url('user/LayananKK/tambahKel/') . $this->uri->segment(4) ?>"
                                        method="POST" enctype="multipart/form-data">
                                        <h5>Kepala Keluarga</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama</label>
                                                <input type="text" name="nama_kpl" placeholder="" autocomplete="off"
                                                    class="form-control" required value="<?= $j->nama_kpl; ?>" readonly>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="NIK_kpl" placeholder="" autocomplete="off"
                                                    class="form-control" required value="<?= $j->NIK_kpl; ?>" readonly>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        <p>
                                        <h5>Data Keluarga</h5>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama_kel" class="form-control" id="nama_kel"
                                                    required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>NIK</label>
                                                <input type="text" name="NIK_kel" class="form-control" id="NIK_kel"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    id="tempat_lahir" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    id="tanggal_lahir" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label for="agama">Agama</label>
                                                <select name="agama" id="agama" class="form-control" required>
                                                    <option value="" selected disabled>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                                    required>
                                                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <label>Pendidikan</label>
                                                <input type="text" name="pendidikan" class="form-control"
                                                    id="pendidikan" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="status_perkawinan">Status</label>
                                                <select name="status_perkawinan" id="status_perkawinan"
                                                    class="form-control" required>
                                                    <option value="" selected disabled>Pilih Status Perkawinan</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan"
                                                    required>
                                            </div>
                                            <p>
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn btn-success "><i
                                                        class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                                <button type="reset" class="btn btn-danger"><i
                                                        class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                            </div>
                                        </div>


                                        <table class="table table-bordered" id="keranjang">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>NIK</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <?php foreach ($keluarga as $kk) : ?>
                                                <tr>
                                                    <td><?= $kk->nama_kel ?></td>
                                                    <td><?= $kk->NIK_kel ?></td>
                                                    <td><?= $kk->tanggal_lahir ?></td>
                                                    <td><?= $kk->jenis_kelamin ?></td>
                                                    <td>
                                                        <a class='btn btn-danger'
                                                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                                            href="<?= base_url() . 'user/LayananKK/hapusKel/' . $kk->id_keluarga ?>">
                                                            <i class="fa fa-trash" aria-hidden="true"><span>
                                                                    Hapus</span></i>
                                                        </a>
                                                        <a class='btn btn-warning'
                                                            href="<?= base_url() . 'user/LayananKK/edit/' . $kk->id_keluarga ?>">
                                                            <i class="fas fa-edit" aria-hidden="true"><span>
                                                                    Edit</span></i>
                                                        </a>
                                                        <a class='btn btn-info'
                                                            href='<?= base_url() . 'user/LayananKK/detail/' . $kk->id_keluarga ?>'
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