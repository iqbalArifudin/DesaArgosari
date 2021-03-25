<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="berita/tambahberita">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <span>
                            Tambah
                        </span>
                    </a>
                    <p>
                    <table id="tabel" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>KETERANGAN BERITA</th>
                                <th>TANGGAL UPDATE</th>
                                <th>FOTO BERITA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($berita as $berita): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $berita->judul ?></td>
                                <td><?= $berita->keterangan ?></td>
                                <td><?= $berita->tanggal ?></td>
                                <td><img src="<?= base_url('assets/foto_berita/') . $berita->foto_berita ?>"
                                        style="width:50px; height:50px;"></td>
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/berita/hapus/'.$berita->id_berita ?>">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'admin/berita/edit/'.$berita->id_berita ?>">
                                        <i class="fas fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/berita/detail/'.$berita->id_berita?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"></i>
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