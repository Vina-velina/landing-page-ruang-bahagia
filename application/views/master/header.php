<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruang Bahagia - Pyschological Health Solutions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/preloader.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/elegantFont.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sweetalert2.css">
</head>

<body>

    <!-- preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>

    </div>
    <!-- preloader area end -->

    <!-- scroll up area start -->
    <div class="scroll-up" id="scroll" style="display: none;">
        <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- scroll up area end -->

    <!-- header style area start -->
    <header>
        <?php if ($id_header == 1) : ?>
        <div class="header__top header__top-4 d-none d-md-block header__style-6">
            <?php else : ?>
            <div class="header__area p-relative header__transparent">
                <?php endif; ?>
                <?php if ($id_header == 1) : ?>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-5 col-md-4">
                            <div class="header__social">
                                <ul>
                                    <li><a href="<?= base_url() ?>#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?= base_url() ?>#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="header__info f-right">
                                <ul>
                                    <li>
                                        <a href="tel:(+468)-254-762-443">
                                            <i class="fab fa-whatsapp"></i>
                                            (+468) 254 762 443
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:ruangbahagia30@gmail.com">
                                            <i class="fal fa-envelope"></i>
                                            <span>ruangbahagia30@gmail.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else : ?>
                <div class="header__top d-none d-md-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-5 col-md-4">
                                <div class="header__social">
                                    <ul>
                                        <li><a href="<?= base_url() ?>#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?= base_url() ?>#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="header__info f-right">
                                    <ul>
                                        <li>
                                            <a href="tel:(+468)-254-762-443">
                                                <i class="fab fa-whatsapp"></i>
                                                (+468) 254 762 443
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:ruangbahagia30@gmail.com">
                                                <i class="fal fa-envelope"></i>
                                                <span>ruangbahagia30@gmail.com</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div id="header__sticky" class="header__bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <?php if ($id_header == 1) : ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="logo">
                                    <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>assets/img/logo/ruangbahagia.png" width="200px"
                                            alt="logo">
                                    </a>
                                </div>
                                <div class="logo-gradient">
                                    <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>assets/img/logo/ruangbahagia.png" width="200px"
                                            alt="logo">
                                    </a>
                                </div>
                            </div>
                            <?php else : ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="logo">
                                    <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>assets/img/logo/ruangbahagiawhite.png" width="200px"
                                            alt="logo">
                                    </a>
                                </div>
                                <div class="logo-gradient">
                                    <a href="<?= base_url() ?>">
                                        <img src="<?= base_url() ?>assets/img/logo/ruangbahagia.png" width="200px"
                                            alt="logo">
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6">
                                <div class="header__bottom-right d-flex justify-content-end align-items-center">
                                    <?php if ($id_header == 1) : ?>
                                    <div class="main-menu header__style-4-menu header__style-1-menu">
                                        <?php else : ?>
                                        <div class="main-menu">
                                            <?php endif ?>
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li>
                                                        <a href="<?= base_url() ?>">Beranda</a>
                                                    </li>
                                                    <li><a href="<?= base_url() ?>home/about">Tentang Kami </a></li>
                                                    <li><a href="<?= base_url() ?>home/contact">Hubungi Kami</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="header__btn d-none d-sm-block d-lg-none d-xl-block ml-50">
                                            <?php if ($id_header == 1) : ?>
                                            <a href="<?= base_url() ?>home/contact" class="z-btn">Demo Aplikasi</a>
                                            <?php else : ?>
                                            <a href="home/contact" class="z-btn z-btn-white">Demo Aplikasi</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="sidebar__menu d-lg-none">
                                            <div class="sidebar-toggle-btn sidebar-toggle-btn-3" id="sidebar-toggle">
                                                <span class="line"></span>
                                                <span class="line"></span>
                                                <span class="line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__search-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="#">
                                        <input type="text" placeholder="Your Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body-overlay-2"></div>
                </div>
    </header>
    <!-- header style end end -->

    <!-- sidebar area start -->
    <section class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__tab">
                <ul class="nav nav-tabs" id="sidebar-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="menu-tab" data-toggle="tab" href="<?= base_url() ?>#menu"
                            role="tab" aria-controls="menu" aria-selected="true">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="<?= base_url() ?>#info" role="tab"
                            aria-controls="info" aria-selected="false">demo</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__content">
                <div class="tab-content" id="sidebar-tab-content">
                    <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                        <div class="logo mb-40">
                            <a href="<?= base_url() ?>index.html">
                                <img src="<?= base_url() ?>assets/img/logo.png" width="65px" alt="logo">
                            </a>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="body-overlay"></div>
    <!-- sidebar area end -->