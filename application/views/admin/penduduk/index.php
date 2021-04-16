<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class='btn btn-primary' href="penduduk/tambahpenduduk">
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
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>NO KK</th>
                                <!-- <th>TEMPAT LAHIR</th>
                                <th>TANGGAL LAHIR</th> -->
                                <!-- <th>AGAMA</th> -->
                                <!-- <th>STATUS</th>
                                <th>PEKERJAAN</th>
                                <th>GOL DARAH</th> -->
                                <th>JENIS KELAMIN</th>
                                <th>ALAMAT</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>AKSES</th>
                                <!-- <th>DESA</th>
                                <th>FOTO</th>
                                <th>PASSWORD</th> -->
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($penduduk as $penduduk): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $penduduk->NIK ?></td>
                                <td><?= $penduduk->nama ?></td>
                                <td><?= $penduduk->no_KK ?></td>
                                <!-- <td><?= $penduduk->tempat_lahir ?></td>
                                <td><?= $penduduk->tanggal_lahir ?></td>
                                <td><?= $penduduk->agama ?></td>
                                <td><?= $penduduk->status_perkawinan ?></td>
                                <td><?= $penduduk->pekerjaan ?></td>
                                <td><?= $penduduk->gol_darah ?></td> -->
                                <td><?= $penduduk->jenis_kelamin ?></td>
                                <td><?= $penduduk->alamat ?></td>
                                <td><?= $penduduk->RT ?></td>
                                <td><?= $penduduk->RW ?></td>
                                <td><?= $penduduk->hak_akses ?></td>
                                <!-- <td><?= $penduduk->desa ?></td> -->
                                <!-- <td><img src="<?= base_url('assets/foto_penduduk/') . $penduduk->foto ?>"
                                        style="width:50px; height:50px;"></td>
                                <td><?= $penduduk->password ?></td> -->
                                <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/penduduk/hapus/'.$penduduk->id_penduduk ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'admin/penduduk/edit/'.$penduduk->id_penduduk ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/penduduk/detail/'.$penduduk->id_penduduk?>'
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