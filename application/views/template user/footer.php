<!-- contact section end -->
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






<!-- Javascript files-->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-3.0.0.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugin.js"></script>
<!-- sidebar -->
<script src="<?= base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url(); ?>assets/js/custom.js"></script>
<!-- javascript -->
<script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function() {

        $(this).addClass('transition');
    }, function() {

        $(this).removeClass('transition');
    });
});
</script>


<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>




</body>

</html>