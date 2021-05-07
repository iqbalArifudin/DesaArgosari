<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KTP
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <table id="dataTable" class="table table-striped">
                        <thead class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                                <th>KETERANGAN</th>
                                <th>Foto Copy KK</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($ktp as $ktp): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ktp->nama ?></td>
                                <td><span class="badge badge-warning"><?= $ktp->status ?></span></td>
                                <td><?= $ktp->alasan ?></td>
                                <td><img src="<?= base_url('assets/foto_ktp/') . $ktp->fc_kk ?>"
                                        style="width:50px; height:50px;"></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'pegawai/Pelayanan_ktp/hapus/'.$ktp->id_ktp ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'pegawai/Pelayanan_ktp/edit/'.$ktp->id_ktp ?>">
                                        <i class="fas fa-hourglass-half" aria-hidden="true"><span> Proses</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'pegawai/Pelayanan_ktp/detail/'.$ktp->id_ktp?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span>Detail</span></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>