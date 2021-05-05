<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Data Penduduk &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Proses Pelayanan KTP</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach($ktp as $penduduk):?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_ktp" value="<?= $penduduk->id_ktp;?>">

                                <div class="form-row">
                                    <label for="nama"><strong>Nama</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->nama; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>NIK</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->NIK; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Tanggal Mengajukan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->tanggal_buat; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Status</strong></label>
                                    <input type="text" name="status" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->status; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Keterangan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $penduduk->keterangan; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan FC KK</strong></label>
                                    <img src="<?= base_url('assets/foto_ktp/') . $penduduk->fc_kk ?>" class="card-img"
                                        alt="..." width="100px">
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="nim"><strong>Status</label></strong>
                                    <?php if($penduduk->status == "Disetujui"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui" checked>Disetujui
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif($penduduk->status == "Ditolak"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif($penduduk->status == "Diproses"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses" checked>Diproses
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif($penduduk->status == "Selesai"): ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai" checked>Selesai
                                    </div>

                                    <?php else: ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Disetujui">Disetujui
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <hr>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>
                                    <hr>
                                    <?php endif ?>
                                </div>

                                <div class="form-row">
                                    <label for="nama_barang"><strong>Alasan / Keterangan</strong></label>
                                    <input type="text" name="alasan" autocomplete="off" class="form-control">
                                </div>


                                <?php endforeach ?>
                                <p>
                                    <hr>

                                    <button type="submit" name="submit" class="btn btn-success ">Simpan</button>
                                    <a href="<?=base_url("pegawai/Pelayanan_ktp");?>" class="btn btn-info">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>