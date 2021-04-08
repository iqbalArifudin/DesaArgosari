<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="galeri/tambahgaleri">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>
                            Tambah
                        </span>
                    </a>
                    <p>
                    <table id="dataTable" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th>NO</th>
                                <th>KETERANGAN</th>
                                <th>TANGGAL</th>
                                <th>FOTO</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($galeri as $galeri): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $galeri->keterangan ?></td>
                                <td><?= $galeri->tanggal ?></td>
                                <td><img src="<?= base_url('assets/galeri/') . $galeri->foto ?>"
                                        style="width:50px; height:50px;"></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/galeri/hapus/'.$galeri->id_galeri ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'admin/galeri/edit/'.$galeri->id_galeri ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/galeri/detail/'.$galeri->id_galeri?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span> Detail</span></i>
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