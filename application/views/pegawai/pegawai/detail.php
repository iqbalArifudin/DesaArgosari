<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php foreach ($pegawai as $pegawai) : ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>" class="card-img-top"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nama : <?= $pegawai->nama ?></h5>
                                    <h5 class="card-title">Jabatan : <?= $pegawai->jabatan ?></h5>
                                    <h5 class="card-title">NIK : <?= $pegawai->NIK ?></h5>
                                    <h5 class="card-title">Jenis Kelamin : <?= $pegawai->jenis_kelamin ?></h5>
                                    <h5 class="card-title">No. Hp : <?= $pegawai->no_hp ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>