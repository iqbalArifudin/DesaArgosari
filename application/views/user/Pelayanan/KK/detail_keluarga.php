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
                    <h1 class="h3 m-0 text-gray-800">Detail Data Anggota Keluarga</h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url('user/LayananKK/detail/') . $this->uri->segment(4) ?>"
                        class="btn btn-primary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
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
                                        href="<?= base_url() . 'user/LayananKK/editKel/' . $kk->id_keluarga ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span>
                                                Edit</span></i>
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