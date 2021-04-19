<body id="top">
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <article>
            <h3 class="heading">DESA ARGOSARI - JABUNG</h3>
            <p>Desa Argosari adalah sebuah desa terdiri tiga padukuhan Yakni pateguhan, gentong, dan bendrong yang
                berada di
                wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
            <footer>
                <ul class="nospace inline pushright">
                    <li><a class="btn" href="#">Tentang Kami</a></li>
                    <li><a class="btn inverse" href="<?php echo base_url().'Login' ?>">Masuk</a></li>
                </ul>
            </footer>
        </article>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    </div>


    <div class="wrapper row3">
        <main class="hoc container clear">
            <?php foreach ($berita as $berita): ?>
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

    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="heading underline font-x2">Struktur Organisasi Desa Argosari</p>
            </div>
            <?php foreach ($pegawai as $pegawai): ?>
            <ul class="nospace group team">
                <li class="one_quarter">
                    <figure><img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>" alt=""></a>
                        <figcaption><strong><?= $pegawai->nama ?></strong> <em><?= $pegawai->jabatan ?></em>
                        </figcaption>
                    </figure>
                    <p>
                </li>
            </ul>
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