@extends('layouts.home')
@section('content')
<!-- Hero Section - Home Page -->
<section id="hero" class="hero">
    <img src="assets/img/jasa kelola.jpeg" alt="" data-aos="fade-in" />

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2 data-aos="fade-up" data-aos-delay="100">
                    Selamat Datang di A&H Tekhnik
                </h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Jika belum punya akun silahkan <a href="#">Sign Up</a> disini
                </p>
            </div>
            <div class="col-lg-5 pt-3">
                <a class="btn btn-danger" href="/login">Sign In</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Clients Section - Home Page -->
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
<!-- End Clients Section -->

<!-- About Section - Home Page -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
            <div class="col-xl-5 content">
                <h3>Tentang Kami</h3>
                <h2>Ducimus rerum libero reprehenderit cumque</h2>
                <p>
                    Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor
                    cumque alias maxime. Enim reiciendis minus et rerum hic non.
                    Dicta quas cum quia maiores iure. Quidem nulla qui assumenda
                    incidunt voluptatem tempora deleniti soluta.
                </p>
                <a href="#" class="read-more"><span>Baca yang lainnya</span><i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="col-xl-7">
                <div class="row gy-4 icon-boxes">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-buildings"></i>
                            <h3>Eius provident</h3>
                            <p>
                                Magni repellendus vel ullam hic officia accusantium ipsa
                                dolor omnis dolor voluptatem
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-clipboard-pulse"></i>
                            <h3>Rerum aperiam</h3>
                            <p>
                                Autem saepe animi et aut aspernatur culpa facere. Rerum
                                saepe rerum voluptates quia
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Box -->

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-command"></i>
                            <h3>Veniam omnis</h3>
                            <p>
                                Omnis perferendis molestias culpa sed. Recusandae quas
                                possimus. Quod consequatur corrupti
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Box -->

                    <div class="col-md-6 pt-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-graph-up-arrow"></i>
                            <h3>Delares sapiente</h3>
                            <p>
                                Sint et dolor voluptas minus possimus nostrum. Reiciendis
                                commodi eligendi omnis quideme lorenda
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Stats Section - Home Page -->
<section id="stats" class="stats">
    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in" />

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Customer</p>
                </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Total Jam Kerja</p>
                </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Pekerja</p>
                </div>
            </div>
            <!-- End Stats Item -->
        </div>
    </div>
</section>
<!-- End Stats Section -->

<!-- Services Section - Home Page -->
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
<!-- End Services Section -->

<!-- Portfolio Section - Home Page -->
<section id="portfolio" class="portfolio">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Card</li>
                <li data-filter=".filter-branding">Web</li>
            </ul>
            <!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Product 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Branding 1</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Product 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Branding 2</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Product 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                        <h4>Branding 3</h4>
                        <p>Lorem ipsum, dolor sit</p>
                        <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                <!-- End Portfolio Item -->
            </div>
            <!-- End Portfolio Container -->
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- Pricing Section - Home Page -->
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
<!-- End Pricing Section -->

<!-- Team Section - Home Page -->
<section id="team" class="team">
    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" />
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Walter White</h4>
                    <span>Teknisi</span>
                    <p>
                        Aliquam iure quaerat voluptatem praesentium possimus unde
                        laudantium vel dolorum distinctio dire flow
                    </p>
                </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                    <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" />
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>Sarah Jhonson</h4>
                    <span>Admin</span>
                    <p>
                        Labore ipsam sit consequatur exercitationem rerum laboriosam
                        laudantium aut quod dolores exercitationem ut
                    </p>
                </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                    <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" />
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>William Anderson</h4>
                    <span>Teknisi</span>
                    <p>
                        Illum minima ea autem doloremque ipsum quidem quas aspernatur
                        modi ut praesentium vel tque sed facilis at qui
                    </p>
                </div>
            </div>
            <!-- End Team Member -->
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Call-to-action Section - Home Page -->
<section id="call-to-action" class="call-to-action">
    <img src="assets/img/cta-bg.jpg" alt="" />

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Berikan Tanggapan Anda</h3>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
                    <a class="cta-btn" href="#">Tambahkan</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call-to-action Section -->

<!-- Testimonials Section - Home Page -->
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                <h3>Testimonials</h3>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident.
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
<!-- End Testimonials Section -->

<!-- Contact Section - Home Page -->
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
<!-- End Contact Section -->
@endsection
