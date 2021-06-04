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
            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Nama Kepala Keluarga</th>
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
                            <?php foreach ($kk as $kk) : ?>
                            <tr>
                                <td><?= $kk->nama_kpl ?></td>
                                <td><?= $kk->NIK_kpl ?></td>
                                <td><?= $kk->alamat_kpl ?></td>
                                <td><?= $kk->kelurahan_kpl ?></td>
                                <td>
                                    <?php foreach ($keluarga as $j) : ?>
                                    <?= $j->nama_kel ?>
                                    <hr>
                                    <?php endforeach ?>
                                </td>
                                <td>
                                    <a class='btn btn-primary'
                                        href="<?= base_url() . 'user/LayananKK/tambahKel/' . $kk->id_kepala_kel ?>">
                                        <i class="fas fa-plus" aria-hidden="true"><span>
                                                Anggota Keluarga</span></i>
                                    </a>
                                    <p>
                                    <p>
                                        <a class='btn btn-info'
                                            href="<?= base_url() . 'user/LayananKK/detailKel/' . $kk->id_kepala_kel ?>">
                                            <i class="fas fa-users" aria-hidden="true"><span>
                                                    Anggota Keluarga</span></i>
                                        </a>
                                    <p>
                                    <p>
                                        <a class='btn btn-warning'
                                            href="<?= base_url() . 'user/LayananKK/detail_all/' . $kk->id_kepala_kel ?>">
                                            <i class="fas fa-eye" aria-hidden="true"><span>
                                                    Detail Keluarga</span></i>
                                        </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>