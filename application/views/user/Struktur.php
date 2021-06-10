<div class="our_section layout_padding">
    <div class="sectiontitle">
        <p class="heading underline font-x3">
            <font color="black">STRUKTUR DESA ARGOSARI</font>
        </p>
    </div>
    <div class="price_section_2">
        <div class="row justify-content-center">
            <?php foreach ($pegawai as $pegawai) : ?>
            <div class="card-page mr-3 ml-3 mb-3 " style="width:340px; height:500px">
                <center>
                    <figure><img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>"
                            style="width:240px; height:250px;"></figure>
                </center>
                <center>

                    <div class="card-body">
                        <figcaption><strong>
                                <font color="black">
                                    &nbsp;<?= $pegawai->nama ?>
                                    <br>
                            </strong>
                            &nbsp;<?= $pegawai->jabatan ?>
                            <br>
                            </font>
                        </figcaption>
                    </div>
                </center>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</div>