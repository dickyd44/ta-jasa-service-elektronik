@extends('layouts.home')
@section('content')

<section id="hero" class="hero">
    <img src="assets/img/jasa kelola.jpeg" alt="" data-aos="fade-in" />

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2 data-aos="fade-up" data-aos-delay="100">
                    Selamat Datang di A&H Tekhnik
                </h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Solusi nya untuk Elektronik
                </p>
            </div>
            <div class="col-lg-5 pt-3">
                <a class="btn btn-danger" href="/login">Sign In</a>
            </div>
        </div>
    </div>
</section>

<section id="clients" class="clients">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/hitachi.jpg" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/hp.png" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/huwawei.jpg" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/logo lg.png" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/panasonic.jpg" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
                <img src="assets/img/clients/samsung.png" class="img-fluid" alt="" />
            </div>
            <!-- End Client Item -->
        </div>
    </div>
</section>

<section id="about" class="about">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
            <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                <img src="assets/img/Home Cleaning Services.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                <h3>Sunt consequatur ad ut est nulla</h3>
                <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            </div>
        </div><!-- Features Item -->

    </div>

</section>

<section id="stats" class="stats">
    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in" />

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span>{{ $totalCustomer }}</span>
                    <p>Customer</p>
                </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Total Jam Kerja</p>
                </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-4 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span>{{ $totalUser }}</span>
                    <p>Pekerja</p>
                </div>
            </div>
            <!-- End Stats Item -->
        </div>
    </div>
</section>

<section id="services" class="services">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Jasa Kami</h2>
        <p>
            Kami menyediakan beberapa layanan jasa service elektronik
            diantaranya
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-fan"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">Kipas Angin</a>
                        </h4>
                        <p class="description">
                            Voluptatum deleniti atque corrupti quos dolores et quas
                            molestias excepturi sint occaecati cupiditate non provident
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-plug"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">Instalasi Listrik</a>
                        </h4>
                        <p class="description">
                            Minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat tarad limino ata
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-water"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">Water Hitter</a>
                        </h4>
                        <p class="description">
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-snow2"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">AC</a>
                        </h4>
                        <p class="description">
                            Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-boombox"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">Mesin Cuci</a>
                        </h4>
                        <p class="description">
                            At vero eos et accusamus et iusto odio dignissimos ducimus
                            qui blanditiis praesentium voluptatum deleniti atque
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-file-minus"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="services-details.html" class="stretched-link">Kulkas</a>
                        </h4>
                        <p class="description">
                            Et harum quidem rerum facilis est et expedita distinctio.
                            Nam libero tempore, cum soluta nobis est eligendi
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->
        </div>
    </div>
</section>

<section id="pricing" class="pricing">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Harga</h2>
        <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Kipas Angin</h3>
                    <div class="icon">
                        <i class="bi bi-fan"></i>
                    </div>
                    <h4>120<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li class="na">
                            <i class="bi bi-x"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li class="na">
                            <i class="bi bi-x"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Instalasi Listrik</h3>
                    <div class="icon">
                        <i class="bi bi-plug"></i>
                    </div>

                    <h4>29<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Water Hitter</h3>
                    <div class="icon">
                        <i class="bi bi-water"></i>
                    </div>
                    <h4>49<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>AC</h3>
                    <div class="icon">
                        <i class="bi bi-snow2"></i>
                    </div>
                    <h4>49<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Mesin Cuci</h3>
                    <div class="icon">
                        <i class="bi bi-boombox"></i>
                    </div>
                    <h4>49<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->

            <div class="col-lg-4">
                <div class="pricing-item">
                    <h3>Kulkas</h3>
                    <div class="icon">
                        <i class="bi bi-file-minus"></i>
                    </div>
                    <h4>49<sup>k</sup><span> / month</span></h4>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Quam adipiscing vitae proin</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nec feugiat nisl pretium</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Nulla at volutpat diam uteera</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Pharetra massa massa ultricies</span>
                        </li>
                        <li>
                            <i class="bi bi-check"></i>
                            <span>Massa ultricies mi quis hendrerit</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->
        </div>
    </div>
</section>

<!-- Faq Section - Home Page -->
<section id="faq" class="faq">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    <div class="faq-item faq-active">
                        <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                        <div class="faq-content">
                            <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                        <div class="faq-content">
                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                        <div class="faq-content">
                            <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                        <div class="faq-content">
                            <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                        <div class="faq-content">
                            <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>
        </div>

    </div>

</section>
<!-- End Faq Section -->

<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="container section-title" data-aos="fade-up">
        </div>

        <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimonials</h3>
                <p>
                    Testimoni adalah pernyataan atau pesan konsumen mengenai pengalamannya selama bertransaksi dengan penjual, baik itu cara pelayanannya maupun kualitas barang/ jasa yang dibeli.
                </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                    <div>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo & Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim
                                        donec porttitora entum suscipit rhoncus. Accusantium
                                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                                        aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                    <div>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure
                                        esse labore quem cillum quid cillum eram malis quorum
                                        velit fore eram velit sunt aliqua noster fugiat irure
                                        amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                    <div>
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna
                                        enim sint quorum nulla quem veniam duis minim tempor
                                        labore quem eram duis noster aute amet eram fore quis
                                        sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                    <div>
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla
                                        culpa multos export minim fugiat minim velit minim
                                        dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="d-flex">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="" />
                                    <div>
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram
                                        irure aliqua veniam tempor noster veniam enim culpa
                                        labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+1 5589 55488 55</p>
                            <p>+1 6678 254445 41</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>info@example.com</p>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Jam Operasional</h3>
                            <p>Monday - Friday</p>
                            <p>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>

            <!-- End Contact Form -->
        </div>
    </div>
</section>
@endsection