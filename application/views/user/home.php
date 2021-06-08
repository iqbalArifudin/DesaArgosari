<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<body id="top">
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <article>
            <h3 class="heading">DESA ARGOSARI - JABUNG</h3>
            <p>Desa Argosari adalah sebuah desa terdiri dari 3 Padukuhan yakni pateguhan, gentong, dan bendrong yang
                berada di
                wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
            <footer>
                <ul class="nospace inline pushright">
                    <li><a class="btn" href="#">Tentang Kami</a></li>
                    <li><a class="btn inverse" href="<?php echo base_url() . 'Login' ?>">Masuk</a></li>
                </ul>
            </footer>
        </article>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear">
            <?php foreach ($berita as $berita) : ?>
            <div class="excerpt">
                <article><a class="" href="#"><img src="<?= base_url('assets/foto_berita/') . $berita->foto_berita ?>"
                            alt="" style="width: 500px;"></a>
                    <p>
                    <div class="card-body">
                        <bold>
                            <h5 class="card-title"><?= $berita->judul ?></h5>
                        </bold>
                        <p class="card-text"><?= $berita->keterangan ?></p>
                        <p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                            <hr>
                    </div>
            </div>
            <?php endforeach ?>
            <p>
                <!-- ################################################################################################ -->
                <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>

    <div class="sectiontitle">
        <p class="heading underline font-x2">STRUKTUR DESA ARGOSARI</p>
    </div>
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <!-- <div class=" d-flex flex-wrap"> -->
            <?php foreach ($pegawai as $pegawai) : ?>
            <div class="card-page mr-3 ml-3 mb-3 " style="width:340px; height:500px">
                <center>
                    <figure><img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>"
                            style="width:240px; height:250px;"></figure>
                </center>
                <center>

                    <div class="text-muted">
                        <figcaption><strong>
                                &nbsp;<?= $pegawai->nama ?>
                                <br>
                            </strong>
                            &nbsp;<?= $pegawai->jabatan ?>
                            <br>
                        </figcaption>
                    </div>
                </center>
            </div>
            <?php endforeach ?>

        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="heading underline font-x2">Jumlah Penduduk</p>
            </div>
            <ul id="stats" class="nospace group">
                <li><i class="fab fa-sticker-mule"></i>
                    <p><a href="#">123</a></p>
                    <p>Phasellus tincidunt</p>
                </li>
                <li><i class="fab fa-pied-piper-alt"></i>
                    <p><a href="#">1234</a></p>
                    <p>Egestas maximus</p>
                </li>
                <li><i class="fas fa-globe"></i>
                    <p><a href="#">12345</a></p>
                    <p>Aliquam neque</p>
                </li>
                <li><i class="fas fa-ribbon"></i>
                    <p><a href="#">6789</a></p>
                    <p>Curabitur sodales</p>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->


    </html>