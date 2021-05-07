<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-comments"></i>
    Kritik Dan Saran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <p>
                        <a class='btn btn-primary' href="Kritik/tambahSaran">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Tambah Kritik Dan Saran
                            </span>
                        </a>
                        <?php
            foreach ($saran as $s) : ?>
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
                                <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'user/Kritik/hapus/'.$s->id_saran ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'user/Kritik/edit/'.$s->id_saran ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
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