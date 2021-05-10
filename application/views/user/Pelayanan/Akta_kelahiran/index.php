<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Akta Kelahiran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <p>
                        <a class='btn btn-primary' href="akta_kelahiran/tambahAkta">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Tambah Data Akta Kelahiran
                            </span>
                        </a>
                    <table id="dataTable" class="table table-striped">
                        <thead class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NAMA AKTA</th>
                                <th>KETERANGAN</th>
                                <th>TANGGAL MENGAJUKAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($akta as $akta): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $akta->nama_akta ?></td>
                                <td><?= $akta->keterangan ?></td>
                                <td><?= $akta->tgl_mengajukan ?></td>
                                <td><span class="badge badge-warning"><?= $akta->status ?></span></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'user/akta_kelahiran/hapus/'.$akta->id_akta ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'user/akta_kelahiran/edit/'.$akta->id_akta ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'user/akta_kelahiran/detail/'.$akta->id_akta?>'
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