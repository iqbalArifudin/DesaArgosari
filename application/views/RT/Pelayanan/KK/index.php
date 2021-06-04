<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-newspaper"></i>
    Pelayanan KK
</div>
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
                                <th>NAMA KEPALA KELUARGA</th>
                                <th>TANGGAL MENGAJUKAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kk as $kk) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kk->nama_kpl ?></td>
                                <td><?= $kk->tgl_mengajukan ?></td>
                                <td><span class="badge badge-warning"><?= $kk->status ?></span></td>
                                <td>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel ?>'
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