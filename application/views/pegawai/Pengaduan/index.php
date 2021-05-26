<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Pengaduan
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <h2 class="h5 align-middle m-0 font-weight-bold text-dark">
                        Data Pengaduan
                    </h2>
                    <p>
                    <table id="dataTable" class="table table-bordered">
                        <thead class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>TANGGAL</th>
                                <th>JENIS PENGADUAN</th>
                                <th>KETERANGAN PENGADUAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengaduan as $pengaduan) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pengaduan->nama ?></td>
                                <td><?= $pengaduan->tanggal ?></td>
                                <td><?= $pengaduan->jenis_pengaduan ?></td>
                                <td><?= $pengaduan->keterangan ?></td>
                                <td><span class="badge badge-success"><?= $pengaduan->status ?></span></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url() . 'pegawai/Pengaduan/hapus/' . $pengaduan->id_pengaduan ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url() . 'pegawai/Pengaduan/edit/' . $pengaduan->id_pengaduan ?>">
                                        <i class="fas fa-hourglass-half" aria-hidden="true"><span> Proses</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'pegawai/Pengaduan/detail/' . $pengaduan->id_pengaduan ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span>&nbsp;Detail</span></i>
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