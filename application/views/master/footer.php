<!-- footer area start -->
<footer>
    <div class="footer__area grey-bg pt-100">
        <div class="footer__top pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 pr-0">
                        <div class="footer__widget mb-45 wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer__widget-title mb-30">
                                <div class="logo">
                                    <a href="<?= base_url() ?>#">
                                        <img src="<?= base_url() ?>assets/img/logo/ruangbahagia.png" width="165px"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="footer__widget-content">
                                <p>Setiap orang memiliki hak untuk bahagia, setiap permasalahan dalam hidup pasti
                                    menemukan jalan keluarnya.</p>
                                <div class="footer__img">
                                    <img src="<?= base_url() ?>assets/img/footer/footer-img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 offset-lg-1 col-md-4 col-sm-6">
                        <div class="footer__widget footer__widget-3 mb-45 wow fadeInUp" data-wow-delay=".4s">
                            <div class="footer__widget-title">
                                <h4>Tautan</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="<?= base_url() ?>home">Beranda</a></li>
                                        <li><a href="<?= base_url() ?>home/about">Tentang Kami</a></li>
                                        <li><a href="<?= base_url() ?>home/contact">Hubungi Kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 offset-lg-1 col-md-4 col-sm-6">
                        <div class="footer__widget mb-45 wow fadeInUp" data-wow-delay=".6s">
                            <div class="footer__widget-title">
                                <h4>Pengembang</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__links">
                                    <ul>
                                        <li><a href="<?= base_url() ?>#">Devata Squad</a></li>
                                        <li><a href="<?= base_url() ?>#">Ganatech</a></li>
                                        <li><a href="<?= base_url() ?>#">Debly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-lg-3 col-md-4 col-sm-6">
                        <div class="footer__widget footer__widget-3 mb-45  ml-70 wow fadeInUp" data-wow-delay=".8s">
                            <div class="footer__widget-title">
                                <h4>Kontak Kami</h4>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__info mb-35">
                                    <ul>
                                        <li>
                                            <div class="icon theme-color ">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="text theme-color ">
                                                <p><a
                                                        href="mailtp:ruangbahagia30@gmail.com"><span>ruangbahagia30@gmail.com</span></a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon theme-color">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text theme-color">
                                                <p><a href="<?= base_url() ?>tel:(+642)-394-396-432">(+642) 394
                                                        396
                                                        432</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer__social theme-social">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url() ?>#">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>#">
                                                <i class="fab fa-instagram"></i>
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright-3">
            <div class="container">
                <div class="footer__copyright-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <div class="footer__copyright-text text-center">
                                <p>Copyright © <?= date('Y') ?>. All Rights Reserved development by <a
                                        href="#">Ganatech</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- JS here -->
<script src="<?= base_url() ?>assets/js/vendor/jquery-3.5.1.min.js"></script>
<?php if ($id_header == 3) : ?>
<script>
const baseURL = "<?=base_url()?>";
</script>
<script src="<?=base_url()?>assets/js/sweetalert2.js"></script>
<script src="<?= base_url() ?>assets/js/ajax-form.js"></script>
<?php endif; ?>
<script src="<?= base_url() ?>assets/js/parallax.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.meanmenu.js"></script>
<script src="<?= base_url() ?>assets/js/slick.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.fancybox.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>