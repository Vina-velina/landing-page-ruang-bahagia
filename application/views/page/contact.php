<main>

    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center fix"
        data-background="<?= base_url() ?>assets/img/page-title/page-title-1.jpg">
        <div class="slider__shape">
            <img class="shape triangle" src="<?= base_url() ?>assets/img/icon/slider/triangle.png" alt="triangle">
            <img class="shape dotted-square" src="<?= base_url() ?>assets/img/icon/slider/dotted-square.png"
                alt="dotted-square">
            <img class="shape solid-square" src="<?= base_url() ?>assets/img/icon/slider/solid-square.png"
                alt="solid-square">
            <img class="shape circle-2" src="<?= base_url() ?>assets/img/icon/slider/circle.png" alt="circle">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content mt-100">
                        <h2>Hubungi Kami</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- contact info area start -->
    <section class="contact__help p-relative pt-115 pb-150">
        <div class="contact__shape">
            <img class="dot" src="<?= base_url() ?>assets/img/icon/contact/dot.png" alt="">
            <img class="shape" src="<?= base_url() ?>assets/img/icon/contact/shape.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-1">
                    <div class="section__title section__title-3 mb-55">
                        <span class="fadeInUp wow" data-wow-delay=".2s">Kontak</span>
                        <h2 class="fadeInUp wow" data-wow-delay=".4s">Hubungi Kami Melalui Email</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 offset-xl-1">
                    <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="contact__icon mb-35">
                            <img src="<?= base_url() ?>assets/img/icon/contact/headset.png" alt="">
                        </div>
                        <div class="contact__text">
                            <h3>Customer Support</h3>


                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="contact__help-item white-bg text-center mb-30 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="contact__icon mb-35">
                            <img src="<?= base_url() ?>assets/img/icon/contact/msg.png" alt="">
                        </div>
                        <div class="contact__text">
                            <h3>Pertanyaan Lain</h3>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info area end -->

    <!-- contact area start -->
    <section class="contact__area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8521681400043!2d115.0855368504212!3d-8.11653069412831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24116b203f1bd%3A0x75078d34d4179074!2sGanesha%20University%20of%20Education!5e0!3m2!1sen!2sid!4v1614441537097!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="contact__wrapper d-md-flex justify-content-between wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="contact__info mr-100">
                                <h3>Hubungi Kami</h3>
                                <ul>
                                    <li>
                                        <h4>Alamat</h4>
                                        <p>Jl. Udayana No.11, Banyuasri, Kec. Buleleng, Kabupaten Buleleng, Bali 81116
                                        </p>
                                    </li>
                                    <li>
                                        <h4>Whatsapp</h4>
                                        <p><a href="https://api.whatsapp.com/send?phone=628983197636">+62
                                                898-3197-636</a></p>
                                    </li>
                                    <li>
                                        <h4>Alamat Email</h4>
                                        <p><a href=""><span>ruangbahagia30@gmail.com</span></a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form" onsubmit="ajaxSend(event)">
                                <form id="form_contact">
                                    <input type="text" id="nama" placeholder="Namamu" required>
                                    <input type="email" id="email" placeholder="Emailmu" required>
                                    <textarea placeholder="Pesan" id="pesan" required></textarea>
                                    <button type="submit" id="btn_submit" class="z-btn">Kirim Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
</main>