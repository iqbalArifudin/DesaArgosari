<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Kartu Keluarga &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 m-0 text-gray-800">Detail Data Kartu Keluarga</h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url('user/LayananKK') ?>" class="btn btn-primary btn-sm"><i
                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                </div>
            </div>
            <hr>

            <h5> Data Pengajuan Kepala Keluarga :</h5>
            <br>
            <?php foreach ($kepala as $k) : ?>

            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Nama Kepala</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <?php foreach ($kepala as $k) : ?>
                            <td><?= $k->nama_kpl ?></td>
                            <td><?= $k->NIK_kpl ?></td>
                            <td><?= $k->alamat_kpl ?></td>
                            <td><?= $k->kelurahan_kpl ?></td>
                            <td>
                                <a class='btn btn-warning'
                                    href="<?= base_url() . 'user/LayananKK/detail_all/' . $k->id_kepala_kel ?>">
                                    <i class="fas fa-eye" aria-hidden="true"><span>
                                            Detail Keluarga</span></i>
                                </a>
                            </td>
                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
            <center>
                <a class='btn btn-info' href="<?= base_url() . 'user/LayananKK/tambahKel/' . $k->id_kepala_kel ?>">
                    <i class="fas fa-plus" aria-hidden="true"><span>
                            Tambah Data Anggota Keluarga</span></i>
                </a>
            </center>
            <p>

                <?php endforeach ?>
            <h5> Data Pengajuan Keluarga :</h5>
            <br>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tempat / Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <?php foreach ($kk as $kk) : ?>
                            <td><?= $kk->nama_kel ?></td>
                            <td><?= $kk->NIK_kel ?></td>
                            <td><?= $kk->tempat_lahir ?> / <?= $kk->tanggal_lahir ?></td>
                            <td>
                                <a class='btn btn-danger'
                                    onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                    href="<?= base_url() . 'user/LayananKK/hapusKel/' . $kk->id_keluarga ?>">
                                    <i class="fa fa-trash" aria-hidden="true"><span>
                                            Hapus</span></i>
                                </a>
                                <a class='btn btn-warning'
                                    href="<?= base_url() . 'user/LayananKK/editKel/' . $kk->id_keluarga ?>">
                                    <i class="fas fa-edit" aria-hidden="true"><span>
                                            Edit</span></i>
                                </a>
                                <a class='btn btn-info'
                                    href="<?= base_url() . 'user/LayananKK/detailKel/' . $kk->id_keluarga ?>">
                                    <i class="fas fa-eye" aria-hidden="true"><span>
                                            Detail</span></i>
                                </a>
                            </td>
                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>