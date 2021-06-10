<div class="our_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($berita as $ad) : ?>
            <div class="card-page  mr-3 mb-3" style="width:340px; height:530px">
                <center><img src="<?= base_url('assets/foto_berita/') . $ad->foto_berita ?>"
                        style="width:270px; height:300px;">
                    <br>
                </center>

                <center>
                    <hr width="90%">
                </center>
                <div class="text-muted">
                    <h6><?= $ad->judul ?></h6>
                    <small>Tanggal
                        :&nbsp; <?= date('d-m-Y H:i:s', strtotime($ad->tanggal)); ?></small>
                    <hr>
                    <a href='<?= base_url() . 'berita/detail/' . $ad->id_berita ?>'
                        class="btn btn-primary">Selengkapnya</a>
                </div>
                <center>
                    <br>
                </center>
            </div>
            <?php endforeach ?>

        </div>

    </div>
</div>