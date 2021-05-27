<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-id-badge"></i>
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
                                        href='<?= base_url() . 'admin/akta_kelahiran/edit/' . $akta->id_akta ?>'
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