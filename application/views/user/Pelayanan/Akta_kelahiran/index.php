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
                        <a class='btn btn-success' href="akta_kelahiran/pdf">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <span>
                                Download Surat Pengantar RT / RW
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
                            <?php $no = 1;
                            foreach ($akta as $akta) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $akta->nama_akta ?></td>
                                <td><?= $akta->keterangan ?></td>
                                <td><?= $akta->tgl_mengajukan ?></td>
                                <td><span class="badge badge-warning"><?= $akta->status ?></span></td>
                                <td>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'user/akta_kelahiran/detail/' . $akta->id_akta ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span>&nbsp;Detail</span></i>
                                    </a>

                                    <?php if ($akta->status == "Disetujui") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diproses") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Ketua RW") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Pelayanan") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($akta->status == "Selesai") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php else : ?>
                                    <a class='btn btn-danger' href="#modalDelete" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/hapus/' . $akta->id_akta) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php endif ?>

                                    <!---Edit -->
                                    <?php if ($akta->status == "Disetujui") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diproses") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Ketua RW") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Pelayanan") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Selesai") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($akta->status == "Ditolak") : ?>
                                    <a class='btn btn-warning' href="#modalEdit3" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php else : ?>
                                    <a class='btn btn-warning'
                                        href="<?= base_url() . 'user/akta_kelahiran/edit/' . $akta->id_akta ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <?php endif ?>
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


<!-- Modal -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDelete2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan Anda tidak dapat di hapus karena telah diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEdit2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan Anda tidak dapat di Edit karena telah diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEdit3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan tidak dapat di Edit karena telah ditolak.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>