<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4"
    style="background-image: url('assets/images/slider-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="text-contant">
                    <h2>
                        <span class="center"><span class="icon"><img src="<?= base_url(); ?>assets/images/logo kab.png"
                                    alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000"
                            data-type='[ "Desa Argosari, Kecamatan Jabung", "Kabupaten Malang, 65155"]'>
                            <span class="wrap"></span>
                        </a>
                    </h2>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
                <div class="service-time one" style="background:#2895f1;">
                    <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                    <h3>Emergency Case</h3>
                    <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et
                        quas mole.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
                <div class="service-time middle" style="background:#0071d1;">
                    <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <h3>Working Hours</h3>
                    <div class="time-table-section">
                        <ul>
                            <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span>
                            </li>
                            <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                            <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
                <div class="service-time three" style="background:#0060b1;">
                    <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                    <h3>Clinic Timetable</h3>
                    <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et
                        quas mole.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about" class="section wow fadeIn">
    <div class="container">
        <!-- end title -->
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <?php foreach($berita as $berita):?>
                    <h2><?= $berita->judul ?> </h2>
                    <p> <?= $berita->keterangan ?> </p>
                    <p class="lead"><?= $berita->tanggal ?></p>
                    <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn
                        More</a>
                </div>
                <!-- end messagebox -->
            </div>
            <!-- end col -->
            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="<?= base_url('assets/foto_berita/') . $berita->foto_berita ?>" alt=""
                        class="img-responsive">
                    <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]"
                        class="playbutton"><i class="flaticon-play-button"></i></a>
                </div>
                <!-- end media -->
            </div>
            <!-- end col -->
        </div>
        <?php endforeach ?>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="inner-services">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon1.png"
                                    alt="#" /></span>
                            <h4>PREMIUM FACILITIES</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon2.png"
                                    alt="#" /></span>
                            <h4>LARGE LABORATORY</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon3.png"
                                    alt="#" /></span>
                            <h4>DETAILED SPECIALIST</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon4.png"
                                    alt="#" /></span>
                            <h4>CHILDREN CARE CENTER</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon5.png"
                                    alt="#" /></span>
                            <h4>FINE INFRASTRUCTURE</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                            <span class="icon-service"><img src="<?= base_url(); ?>assets/images/service-icon6.png"
                                    alt="#" /></span>
                            <h4>ANYTIME BLOOD BANK</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="appointment-form">
                    <h3><span>+</span> Book Appointment</h3>
                    <div class="form">
                        <form action="index.html">
                            <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" id="name" placeholder="Your Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email Address" id="email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                    <div class="row">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Day</option>
                                                <option>Sunday</option>
                                                <option>Monday</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Time</option>
                                                <option>AM</option>
                                                <option>PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Doctor Name</option>
                                                <option>Mr.XYZ</option>
                                                <option>Mr.ABC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <textarea rows="4" id="textarea_message" class="form-control"
                                                placeholder="Your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="center"><button type="submit">Submit</button></div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;"
    data-scroll-id="doctors" tabindex="-1">
    <div class="container">

        <div class="heading">
            <span class="icon-logo"><img src="<?= base_url(); ?>assets/images/logo kab.png" alt="#"></span>
            <h2>Struktur Desa Argosari</h2>
        </div>

        <div class="row dev-list text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="widget clearfix">
                    <img src="<?= base_url(); ?>assets/images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                    <div class="widget-title">
                        <h3>Soren Bo Bostian</h3>
                        <small>Clinic Owner</small>
                    </div>
                    <!-- end title -->
                    <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                    <div class="footer-social">
                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="widget clearfix">
                    <img src="<?= base_url(); ?>assets/images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                    <div class="widget-title">
                        <h3>Bryan Saftler</h3>
                        <small>Internal Diseases</small>
                    </div>
                    <!-- end title -->
                    <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                    <div class="footer-social">
                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                <div class="widget clearfix">
                    <img src="<?= base_url(); ?>assets/images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                    <div class="widget-title">
                        <h3>Matthew Bayliss</h3>
                        <small>Orthopedics Expert</small>
                    </div>
                    <!-- end title -->
                    <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                    <div class="footer-social">
                        <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--widget -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</div>



<!-- end doctor section -->
<!-- end section -->
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
    <div class="contact-section">
        <div class="form-contant">
            <form id="ajax-contact" action="assets/mailer.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group in_name">
                            <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group in_email">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group in_message">
                            <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                required="required"></textarea>
                        </div>
                        <div class="actions">
                            <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small"
                                title="Submit Your Message!">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="googleMap" style="width:100%;height:450px;"></div>
    </div>
</div>