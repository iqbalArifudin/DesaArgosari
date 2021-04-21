<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Isi Form Pengaduan Dibawah Ini!</strong></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach($pengaduan as $j):?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NAMA</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>

                                    <?php foreach($pengaduan as $p):?>
                                <div class="form-group">
                                    <label for="nim">Status</label>
                                    <?php if($p->status == "Disetujui"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui" checked>Disetujui
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>

                                    <?php elseif($p->status == "Ditolak"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>

                                    <?php else: ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses" checked>Diproses
                                    </div>
                                    <?php endif ?>
                                </div>

                                <p>
                                <div class="form-row">
                                    <label for="nama_barang"><strong>Alasan</strong></label>
                                    <input type="text" name="alasan" autocomplete="off" class="form-control"
                                        value="<?=$p->alasan;?>" required>
                                </div>
                                <p>
                                    <?php endforeach ?>
                                    <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?=base_url("pegawai/Pengaduan");?>" class="btn btn-info">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>