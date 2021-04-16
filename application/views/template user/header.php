<!DOCTYPE html>
<!--
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
    <title>Desa Argosari-Jabung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?= base_url(); ?>assets/Template_user/layout/styles/layout.css" rel="stylesheet" type="text/css"
        media="all">
</head>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><i class="fas fa-phone rgtspace-5"></i> 0341</li>
                    <li><i class="far fa-envelope rgtspace-5"></i> desa-argosari@malangkab.go.id</li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <div class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                    <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
                    <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                    <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
                    <li id="searchform">
                        <div>
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>Quick Search:</legend>
                                    <input type="text" placeholder="Enter search term&hellip;">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <img src="<?php echo base_url('assets/images/logo kab.png')?>" style="width: 40px;">
                <!-- ################################################################################################ -->
            </div>
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1><a href="index.html">DESA ARGOSARI</a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li class="active"><a href="<?php echo base_url().'user/home' ?>">Beranda</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a class="drop" href="#">Profil Desa</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/gallery.html">Sejarah Desa</a>
                            </li>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/full-width.html">Profil Wilayah
                                    Desa</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="drop" href="#">Pelayanan</a>
                        <ul>
                            <li><a class="drop" href="#">Layanan</a>
                                <ul>
                                    <li><a href="#">Layanan KTP</a></li>
                                    <li><a href="#">Layanan KK</a></li>
                                    <li><a href="#">Layanan Akta Kelahiran</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pengaduan</a></li>
                        </ul>
                    </li> -->
                    <li><a href="<?php echo base_url().'user/Pelayanan' ?>">Pelayanan</a></li>
                    <li><a class="drop" href="#">Pemerintahan Desa</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/gallery.html">Visi dan Misi</a>
                            </li>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/full-width.html">Pemerintah Desa
                                    Desa</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">LemHas</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/gallery.html">Karang Taruna</a>
                            </li>
                            <li><a href="<?= base_url(); ?>assets/Template_user/pages/full-width.html">PKK</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>