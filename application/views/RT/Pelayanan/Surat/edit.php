<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-envelope-square"></i>
    Surat Pengajuan &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-hourglass-half"></i> Proses
</div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong> Pengajuan Surat </strong></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach ($surat as $j) : ?>
                                <input type="hidden" name="id_surat" value="<?= $j->id_surat; ?>">
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
                                <div class="form-row">
                                    <label for="nama"><strong>Keterangan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $j->keterangan; ?>" readonly>
                                </div>
                                <p>
                                <div class="form-group">
                                    <label for="nim"><strong>Status</label></strong>
                                    <?php if ($j->status_surat == "Diajukan") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status_surat" value="Diajukan" checked>Diajukan
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status_surat" value="Diajukan Ke Ketua RW">Diajukan Ke
                                        Ketua RW
                                    </div>
                                    <hr>

                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status_surat" value="Diajukan">Diajukan
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status_surat" value="Diajukan Ke Ketua RW"
                                            checked>Diajukan Ke
                                        Ketua RW
                                    </div>
                                    <hr>
                                    <?php endif ?>
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="satuan"><strong>File Surat</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file_surat" name="file_surat">
                                        <label class="custom-file-label" for="customFile"><?= $j->file_surat ?></label>
                                        <?= form_error('file_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>
                                    <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?= base_url("RT/Surat"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>