<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-envelope-square"></i>
    Surat Pengajuan
</div>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <p>
                        <a class='btn btn-primary' href="Surat/tambahSurat">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Minta Surat Pengajuan
                            </span>
                        </a>
                        <?php
                        foreach ($surat as $s) : ?>
                    <div class="card">
                        <div class="card-header">
                            <td><b>Nama : </b> <?= $s->nama ?></td>
                        </div>
                        <div class="card-body">
                            <td><b>Tanggal : </b><?= $s->tanggal ?></td>
                            <p>
                                <hr>
                                <td><b>Keterangan : </b><?= $s->keterangan ?></td>
                            <p>
                                <hr>
                                <td><b>Status :</b><span class="badge badge-warning"><?= $s->status_surat ?></span></td>
                            <p>
                                <hr>
                                <td><b>File Surat : </b><?= $s->file_surat ?></td>
                            <p>
                                <hr>
                                <a class='btn btn-danger'
                                    onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                    href="<?= base_url() . 'user/Surat/hapus/' . $s->id_surat ?>">
                                    <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                </a>
                                <a class='btn btn-info'
                                    href="<?= base_url() . 'user/Surat/download/' . $s->id_surat ?>">
                                    <i class="fas fa-download" aria-hidden="true"><span> download file surat</span></i>
                                </a>
                        </div>
                    </div>
                    <p>
                        <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>