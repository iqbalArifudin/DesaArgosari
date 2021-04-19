<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header"><strong>Isi Form Pengaduan Dibawah Ini!</strong></div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php foreach($penduduk as $j):?>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama"><strong>NAMA</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $j->nama; ?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama"><strong>NIK</strong></label>
                                    <input type="text" name="NIK" placeholder="" autocomplete="off" class="form-control"
                                        required value="<?= $j->NIK; ?>" readonly>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <p>
                            <div class="form-row">
                                <label for="jenis_pengaduan"><strong>Jenis Pengaduan</strong></label>
                                <select name="jenis_pengaduan" id="jenis_pengaduan" class="form-control" required>
                                    <option value="" selected disabled>Pilih Nama</option>
                                    <?php foreach ($pengaduan2 as $j) : ?>
                                    <option value="<?= $j->id_pengaduan ?>"><?= $j->jenis_pengaduan ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <p>
                            <div class="form-row">
                                <label for="satuan"><strong>Keterangan</strong></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <p>

                            <div class="form-row">
                                <label for="satuan"><strong>Bukti</strong></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file_surat" name="file_surat"
                                        required autofocus>
                                    <label class="custom-file-label" for="customFile">Upload Bukti</label>
                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn btn-danger"><i
                                        class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p>
                    <table id="dataTable" class="table table-striped table-hover ">
                        <thead class="table-primary">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>NIK / NO KTP</th>
                                <th>JENIS PENGADUAN</th>
                                <th>TANGGAL</th>
                                <th>KETERANGAN</th>
                                <th>BUKTI</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($pengaduan as $pengaduan): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pengaduan->nama ?></td>
                                <td><?= $pengaduan->jenis_pengaduan ?></td>
                                <td><?= $pengaduan->tanggal ?></td>
                                <td><?= $pengaduan->keterangan ?></td>
                                <td><?= $pengaduan->bukti ?></td>

                                <td><img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>"
                                        style="width:50px; height:50px;"></td>
                                <td><?= $pengaduan->status ?></td>
                                <!-- <td>
                                    <a class='btn btn-danger'
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')"
                                        href="<?= base_url().'admin/pegawai/hapus/'.$pegawai->id_pegawai ?>">
                                        <i class="fa fa-trash" aria-hidden="true"><span> Hapus</span></i>
                                    </a>
                                    <a class='btn btn-warning'
                                        href="<?= base_url().'admin/pegawai/edit/'.$pegawai->id_pegawai ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/pegawai/detail/'.$pegawai->id_pegawai?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span> Detail</span></i>
                                    </a>
                                </td> -->
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>