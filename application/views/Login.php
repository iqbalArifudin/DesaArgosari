<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .bg-login-image {
        background-image: url("<?= base_url('assets/images/logo kab.png'); ?>");
        background-repeat: no-repeat;
        background-size: 50%;
    }
    </style>

</head>

<div class="bg" style="background-image:url('<?php echo base_url().'assets/images/Desa.jpg';?>');">
    <!-- <body background="<?= base_url(); ?>./assets/img/background.jpg"> -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1>
                                            <font color="black">Silahkan Login</font><br>
                                        </h1>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
            <div class="container">
                <div class="row map_addres">
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="<?= base_url(); ?>assets/images/map-icon.png"><span
                                class="map_icon">Desa Argosari Kecamatan Jabung Kabupaten Malang</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="<?= base_url(); ?>assets/images/phone-icon.png"><span
                                class="map_icon">( +71 7986543234
                                )</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="<?= base_url(); ?>assets/images/email-icon.png"><span
                                class="map_icon">desa-argosari@malangkab.go.id</span></div>
                    </div>
                </div>
                <p class="copyright_text">Copyright Desa Argosari - Jabung</p>
            </div>
        </div>
    </div>
    <!-- footer section end -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

    </body>

</html>