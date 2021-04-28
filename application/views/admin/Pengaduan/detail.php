<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <div class="card mb-3  border-bottom-primary">
        <div class="card-header py-3">
            <center>
                <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
            </center>
        </div>
        <br>
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php foreach ($pengaduan as $p) : ?>
                <img src="<?= base_url('assets/foto_pengaduan/') . $p->bukti ?>" class="card-img" alt="..."
                    width="100px">
            </div>


            <div class="col-md-8 ">
                <div class="card-body">
                    <h5 class="card-title text-dark"><b>Nama</b>&nbsp;:
                        <?= $p->nama ?>
                        <hr>
                        <h5 class="card-title text-dark"><b>Tanggal</b>
                            &nbsp;:
                            <?= date('d F Y', strtotime($p->tanggal)); ?> </h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Jenis Pengaduan</b>&nbsp;:
                            <?= $p->jenis_pengaduan ?></h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Keterangan Pengaduan
                            </b>&nbsp;: <?= $p->keterangan ?></h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Status Pengaduan
                            </b>&nbsp;: <?= $p->status ?></h5>
                        <hr>

                        <?php endforeach ?>
                        <p>
                            <a href="<?php echo base_url("admin/Pengaduan"); ?>" class="btn btn-primary"> <i
                                    class="far fa-arrow-left"></i>&nbsp;Kembali</a>
                        <div class="form-group">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <a style="color:white">Ajukan </a>

                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <script
                                                src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                                            </script>
                                            <div class="card-header">
                                                <center><strong>Pengaduan</strong></center>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <?php foreach($pengaduan as $j):?>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="nama"><strong>NAMA</strong></label>
                                                            <input type="text" name="nama" placeholder=""
                                                                autocomplete="off" class="form-control" required
                                                                value="<?= $j->nama; ?>" readonly>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="nama"><strong>NIK</strong></label>
                                                            <input type="text" name="NIK" placeholder=""
                                                                autocomplete="off" class="form-control" required
                                                                value="<?= $j->NIK; ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <p>

                                                    <h5 class="card-title text-dark"><b>Jenis Pengaduan</b>&nbsp;:
                                                        <?= $j->jenis_pengaduan ?></h5>
                                                    <hr>
                                                    <h5 class="card-title text-dark"><b>Keterangan Pengaduan
                                                        </b>&nbsp;: <?= $j->keterangan ?></h5>
                                                    <hr>
                                                    <p>

                                                        <!-- <div class="form-group">
                                                        <h5 class="card-title text-dark"><b>Status Pengaduan
                                                            </b>
                                                            <div class="form-check">
                                                                <input type="radio" name="status"
                                                                    value="Diajukan ke Kepala Desa"> Diajukan ke Kepala
                                                                Desa
                                                            </div>
                                                    </div> -->
                                                        <?php endforeach ?>



                                                        <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"><a
                                                                style="color:white">Ajukan
                                                            </a></button>
                                                        <button type="button" class="btn btn-dark"
                                                            data-dismiss="modal">Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->