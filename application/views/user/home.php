<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- Top Background Image Wrapper -->

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
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
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <?php foreach ($berita as $berita): ?>
            <ul id="latest" class="nospace group">
                <li class="one_third first">
                    <article><img src="<?= base_url('assets/foto_berita/') . $berita->foto_berita ?>"></a>
                        <ul class="nospace meta group">
                            <li><i class=""></i> <a href="#"></a></li>
                            <li><i class="far fa-clock"></i>
                                <time datetime="2045-04-06T08:15+00:00"><?= $berita->tanggal ?></time>
                            </li>
                        </ul>
                        <div class="excerpt">
                            <h6 class="heading"><?= $berita->judul ?></h6>
                            <p><?= $berita->keterangan ?></p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
            </ul>
            <?php endforeach ?>
            <!-- ################################################################################################ -->
            <hr class="btmspace-80">
            <!-- ################################################################################################ -->
            <section id="overview">
                <div class="sectiontitle">
                    <p class="nospace font-xs">Integer facilisis enim sollicitudin</p>
                    <p class="heading underline font-x2">Dolor ut pellentesque</p>
                </div>
                <ul class="nospace group btmspace-80">
                    <li class="one_third">
                        <article>
                            <div class="clear"><a href="#"><i class="fas fa-tape"></i></a>
                                <h6 class="heading">Efficitur auctor</h6>
                            </div>
                            <p>Cras dui ac pretium egestas nunc maecenas scelerisque leo eget enim interdum at vulputate
                                lorem pretium in.</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article>
                            <div class="clear"><a href="#"><i class="fas fa-table-tennis"></i></a>
                                <h6 class="heading">Tempor aliquam</h6>
                            </div>
                            <p>Sagittis arcu a magna eget cursus lacus consectetur proin imperdiet bibendum elit id
                                molestie ipsum ut tellus.</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article>
                            <div class="clear"><a href="#"><i class="fas fa-people-carry"></i></a>
                                <h6 class="heading">Metus convallis</h6>
                            </div>
                            <p>Orci blandit ac mauris ac gravida maximus nulla curabitur convallis massa sed urna
                                placerat sed tempor velit.</p>
                        </article>
                    </li>
                </ul>
                <footer class="center"><a class="btn" href="#">Mattis vestibulum</a></footer>
            </section>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="heading underline font-x2">Struktur Organisasi Desa Argosari</p>
            </div>
            <?php foreach ($pegawai as $pegawai): ?>
            <ul class="nospace group team">
                <li class="one_quarter first">
                    <figure><img src="<?= base_url('assets/foto_pegawai/') . $pegawai->foto ?>" alt=""></a>
                        <figcaption><strong><?= $pegawai->nama ?></strong> <em><?= $pegawai->jabatan ?></em>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <?php endforeach ?>
            <!-- ################################################################################################ -->
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/04.png');">
        <section id="testimonials" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_half overlay">
                <ul class="nospace">
                    <li>
                        <blockquote>suscipit tellus non ligula mattis quis iaculis nunc lobortis vestibulum vehicula
                            bibendum malesuada curabitur quis interdum mi vestibulum consectetur leo ut viverra sagittis
                            sapien orci rhoncus nisi.</blockquote>
                        <figure class="clear"><img class="circle"
                                src="<?= base_url(); ?>assets/Template_user/images/demo/60x60.png" alt="">
                            <figcaption>
                                <h6 class="heading">A. Doe</h6>
                                <em>CEO / Odio tristique quis</em>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <footer><a class="btn inverse" href="#">View More</a></footer>
                    </li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->


    </html>