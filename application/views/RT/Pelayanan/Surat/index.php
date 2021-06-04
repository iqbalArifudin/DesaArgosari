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
                    <table id="dataTable" class="table table-striped">
                        <thead class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>TANGGAL MENGAJUKAN</th>
                                <th>KETERANGAN</th>
                                <th>STATUS</th>
                                <th>FILE SURAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($surat as $s) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s->nama ?></td>
                                <td><?= $s->tanggal ?></td>
                                <td><?= $s->keterangan ?></td>
                                <td><span class="badge badge-warning"><?= $s->status_surat ?></span></td>
                                <td><?= $s->file_surat ?></td>
                                <td>
                                    <a class='btn btn-info' href='<?= base_url() . 'RT/Surat/edit/' . $s->id_surat ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-hourglass-half"
                                            aria-hidden="true"><span>&nbsp;Proses</span></i>
                                    </a>
                                    <a href="<?= base_url() . 'RT/Surat/pdf/' . $s->id_penduduk ?>"
                                        class="btn btn-success"><i class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>
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