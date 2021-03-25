<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Galeri
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <br>

                                <div class="form-group">
                                    <label for="nim">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                </div>
                                <label for="">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" required
                                        autofocus>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>

                                <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                                <a href="<?=base_url("admin/galeri");?>" class="btn btn-info">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->