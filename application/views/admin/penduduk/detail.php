<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php foreach ($penduduk1 as $penduduk) : ?>
                    <div class="card" style="width: 20rem;">
                        <img src="<?= base_url('assets/foto_penduduk/') . $penduduk->foto ?>" class="card-img-top">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $penduduk->NIK ?></label></li>
                            <li class="list-group-item"><?= $penduduk->nama ?></li>
                            <li class="list-group-item"><?= $penduduk->no_KK ?></li>
                            <li class="list-group-item"><?= $penduduk->tempat_lahir ?></li>
                            <li class="list-group-item"><?= $penduduk->tanggal_lahir ?></li>
                            <li class="list-group-item"><?= $penduduk->agama ?></li>
                            <li class="list-group-item"><?= $penduduk->status_perkawinan ?></li>
                            <li class="list-group-item"><?= $penduduk->pekerjaan ?></li>
                            <li class="list-group-item"><?= $penduduk->gol_darah ?></li>
                            <li class="list-group-item"><?= $penduduk->jenis_kelamin ?></li>
                            <li class="list-group-item"><?= $penduduk->alamat ?></li>
                            <li class="list-group-item"><?= $penduduk->RT ?></li>
                            <li class="list-group-item"><?= $penduduk->RW ?></li>
                            <li class="list-group-item"><?= $penduduk->desa ?></li>
                            <li class="list-group-item"><?= $penduduk->Kecamatan ?></li>
                            <li class="list-group-item"><?= $penduduk->password ?></li>
                            <li class="list-group-item"><?= $penduduk->hak_akses ?></li>
                        </ul>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>