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
                    <table id="dataTable" class="table table-bordered">
                        <thead class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>KRITIK / SARAN</th>
                                <th>TANGGAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($saran as $s): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $s->nama ?></td>
                                <td><?= $s->keterangan ?></td>
                                <td><?= $s->tanggal ?></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/Kritik/hapus/'.$s->id_penduduk ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
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