<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="h5 align-middle m-0 font-weight-bold text-dark">
                        Data Pengaduan
                    </h2>
                    <p>
                    <p>
                        <a class='btn btn-primary' href="Pengaduan/tambahpengaduan">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Tambah Pengaduan
                            </span>
                        </a>
                    <table id="dataTable" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>JENIS PENGADUAN</th>
                                <th>KETERANGAN PENGADUAN</th>
                                <th>BUKTI</th>
                                <th>STATUS</th>
                                <th>ALASAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($pengaduan as $pengaduan): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pengaduan->tanggal ?></td>
                                <td><?= $pengaduan->jenis_pengaduan ?></td>
                                <td><?= $pengaduan->keterangan ?></td>
                                <td><img src="<?= base_url('assets/foto_pengaduan/') . $pengaduan->bukti ?>"
                                        style="width:50px; height:50px;"></td>
                                <td><?= $pengaduan->status ?></td>
                                <td><?= $pengaduan->alasan ?></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'user/Pengaduan/hapus/'.$pengaduan->id_pengaduan ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'user/Pengaduan/edit/'.$pengaduan->id_pengaduan ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
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