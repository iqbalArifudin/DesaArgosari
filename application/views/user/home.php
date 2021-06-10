        <div class="banner_section layout_padding bgded overlay"
            style="background-image:url('<?php echo base_url().'assets/images/Desa.jpg';?>');">
            <div id=" my_Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="banner_taital">
                                <h1 class="find_text">DESA ARGOSARI - JABUNG</h1>
                                <p class="long_text">Desa Argosari adalah sebuah desa terdiri dari 3 Padukuhan yakni
                                    pateguhan, gentong, dan bendrong yang
                                    berada di
                                    wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
                            </div>
                            <div class="contact">
                                <div class="contact_bt"><a href="<?php echo base_url() . 'Login' ?>">LOGIN</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="banner_taital">
                                <h1 class="find_text">DESA ARGOSARI - JABUNG</h1>
                                <p class="long_text">Desa Argosari adalah sebuah desa terdiri dari 3 Padukuhan yakni
                                    pateguhan, gentong, dan bendrong yang
                                    berada di
                                    wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
                            </div>
                            <div class="contact">
                                <div class="contact_bt"><a href="<?php echo base_url() . 'Login' ?>">LOGIN</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- about section start -->
        <div class="our_section layout_padding">
            <div class="row">
                <div class="col-lg-5 py-3 wow fadeInUp">
                    <div class="img-place wow zoomIn">
                        <img src="<?= base_url(); ?>assets/images/visi.png" alt="" width="50px">
                    </div>
                </div>

                <div class="col-lg-6 py-3 mt-lg-5">
                    <center>
                        <p class="heading  font-x2">
                            <font color="black">VISI dan MISI</font>
                            <HR>
                        </p>
                    </center>

                    <div class="iconic-list">
                        <div class="iconic-item wow fadeInUp">
                            <div class="iconic-content">
                                <div class="text-primary">
                                    <h1 class=""><strong>
                                            <font color="black">VISI :</font>
                                        </strong></h1>
                                </div>
                                <div class="text-muted">
                                    <p class="fs-small">1. It is a long established fact that a reader will be
                                        distracted by
                                        the
                                        readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is</p>
                                </div>
                                <div class="text-primary">
                                    <h1 class=""><strong>
                                            <font color="black">MISI :</font>
                                        </strong></h1>
                                </div>
                                <div class="text-muted">
                                    <p class="fs-small">1. It is a long established fact that a reader will be
                                        distracted by
                                        the
                                        readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_section layout_padding">
            <h1 class="our_text"><strong>INFORMASI</strong></h1>
        </div>
        <div class="our_section layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital">
                        <h1 class="about_text">
                            <font color="black">ABOUT OUR GYM
                        </h1>
                        <p class="long_text_2">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                            content
                            here', making it look like readable English. Many desktop publishing packages and webIt
                            is a
                            long established fact that a reader will be distracted by the readable content of a page
                            when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it
                            look
                            like
                            readable English. Many desktop publishing packages and web</font>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <br>
                    <div class="about_img"><img src="<?= base_url(); ?>assets/images/about-bg.png" width="50px"></div>
                    <br>
                </div>
            </div>
        </div>
        <!-- about section end -->
        <!-- our service section start -->
        <div class="our_section layout_padding">
            <div class="container">
                <h1 class="our_text"><strong>Berita</strong></h1>
                <p>
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
                                :&nbsp; <?=  date('d-m-Y H:i:s', strtotime($ad->tanggal)); ?></small>
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

        <!-- project section end --