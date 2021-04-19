<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
                    <div class="card-body">
                        <form action="<?= base_url('barang/proses_tambah') ?>" id="form-tambah" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama"><strong>NAMA</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama"><strong>NIK</strong></label>
                                    <input type="text" name="NIK" placeholder="" autocomplete="off" class="form-control"
                                        required value="" readonly>
                                </div>
                            </div>
                            <p>
                            <div class="form-row">
                                <label for="jenis_pengaduan"><strong>Jenis Pengaduan</strong></label>
                                <select name="jenis_pengaduan" id="jenis_pengaduan" class="form-control" required>
                                    <option value="" selected disabled>Pilih Nama</option>
                                    <?php foreach ($pengaduan as $j) : ?>
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