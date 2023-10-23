@extends('layouts.landing')

@section('content')
<!-- Home Section -->
<section class="parallax-section bg-dark">
    <div class="parallax-bg opacity-4"
        style="background-image: url('assets/img/Gambar WhatsApp 2023-07-25 pukul 17.45.01.jpg');"></div>
    <div class="container parallax-content">
        <div class="py-10 row min-vh-100 align-items-center justify-content-center">
            <div class="pt-8 text-center col-lg-7">
                <h1 class="mb-4 text-white display-5">SIOTICS<span style="color: #f36a8d">.<br></span>
                    Menjelajahi Dunia Inovasi IoT!
                </h1>
                <p class="mb-5 text-white fs-xl opacity-7">
                    We studies on IoT System and Robotics
                </p>
                <div>
                    <a class="btn btn-light btn-md me-3" href="{{ route('register') }}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* CSS untuk efek paralaks */
    .parallax-section {
        height: 100vh;
        overflow: hidden;
        position: relative;
    }

    .parallax-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        transform: translateZ(0);
    }

    .parallax-content {
        position: relative;
        z-index: 1;
    }
</style>
<script>
    // Fungsi untuk mengatur efek paralaks
    function parallaxEffect() {
        let parallaxBg = document.querySelector('.parallax-bg');
        let yPos = window.pageYOffset /
            2; // Atur kecepatan paralaks di sini (semakin tinggi angka, semakin lambat paralaksnya)

        parallaxBg.style.transform = `translateY(${yPos}px)`;
    }

    // Panggil fungsi parallaxEffect() ketika halaman di-scroll
    window.addEventListener('scroll', parallaxEffect);
</script>

<!-- End Home Section -->
<!-- section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="text-center col-lg-6">
                <h6 class="text-primary">We Can Do For You</h6>
                <h3 class="h1">Services provide for you.</h3>
                <p class="m-0 fs-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Fully
                                    Responsive</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Retina
                                    Ready</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-filetype-scss"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Built with
                                    SASS</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Business
                                    Stratagy</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-file-break"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Validet
                                    Code</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="shadow-sm card position-relative">
                    <div class="p-4 card-body d-flex">
                        <div class="icon-xl bg-primary-soft text-primary rounded-circle">
                            <i class="bi bi-emoji-laughing"></i>
                        </div>
                        <div class="col ps-3">
                            <h6>
                                <a class="stretched-link text-reset" href="index-03.html#">Happy
                                    Clients</a>
                            </h6>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- section -->
<section>
    <div class="container">
        <div class="px-5 py-10 bg-primary rounded-3">
            <div class="row justify-content-center">
                <div class="text-center col-lg-6">
                    <h3 class="text-white h1">
                        Ready to start creating a standard website?
                    </h3>
                    <p class="text-white opacity-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.
                    </p>
                    <div>
                        <a class="btn btn-secondary" href="index-03.html#">Purchase Doob</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="text-center col-lg-6">
                <h6 class="text-primary">Our Experts.</h6>
                <h3 class="h1">Our Extracurricular Administrator</h3>
                <p class="m-0 fs-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="px-4 py-5 text-center card-body">
                        <div class="mx-auto mb-3 avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/img/avatar-2.jpg"
                                title="" alt="" />
                        </div>
                        <h5 class="h4">Johan Cruyff</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-slack"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="px-4 py-5 text-center card-body">
                        <div class="mx-auto mb-3 avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/img/avatar-3.jpg"
                                title="" alt="" />
                        </div>
                        <h5 class="h4">Johan Cruyff</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-slack"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="px-4 py-5 text-center card-body">
                        <div class="mx-auto mb-3 avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/img/avatar-4.jpg"
                                title="" alt="" />
                        </div>
                        <h5 class="h4">Johan Cruyff</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-slack"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="px-4 py-5 text-center card-body">
                        <div class="mx-auto mb-3 avatar-xxl">
                            <img class="avatar-img rounded-circle" src="assets/img/avatar-5.jpg"
                                title="" alt="" />
                        </div>
                        <h5 class="h4">Johan Cruyff</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-primary-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="index-03.html#">
                                    <i class="bi bi-slack"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- section -->
<section class="bg-gray-100 section">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="text-center col-lg-6">
                <h6 class="text-primary">Our Pricing.</h6>
                <h3 class="h1">Our pricing plans.</h3>
                <p class="m-0 fs-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="p-4 card-header">
                        <span
                            class="px-3 py-1 mb-4 text-white bg-warning rounded-pill small fw-600 d-inline-block">Business</span>
                        <h6 class="m-0 h1">$49.00</h6>
                    </div>
                    <div class="p-4 card-body">
                        <ul class="mb-4 list-unstyled">
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Drag &amp; Drop Builder</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">1,000s of Templates Ready</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Blog Tools</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">eCommerce Store</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">30+ Webmaster Tools</span>
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="index-03.html#">Let's Start</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="p-4 card-header">
                        <span
                            class="px-3 py-1 mb-4 text-white bg-warning rounded-pill small fw-600 d-inline-block">Business</span>
                        <h6 class="m-0 h1">$49.00</h6>
                    </div>
                    <div class="p-4 card-body">
                        <ul class="mb-4 list-unstyled">
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Drag &amp; Drop Builder</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">1,000s of Templates Ready</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Blog Tools</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">eCommerce Store</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">30+ Webmaster Tools</span>
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="index-03.html#">Let's Start</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="p-4 card-header">
                        <span
                            class="px-3 py-1 mb-4 text-white bg-warning rounded-pill small fw-600 d-inline-block">Business</span>
                        <h6 class="m-0 h1">$49.00</h6>
                    </div>
                    <div class="p-4 card-body">
                        <ul class="mb-4 list-unstyled">
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Drag &amp; Drop Builder</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">1,000s of Templates Ready</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Blog Tools</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">eCommerce Store</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">30+ Webmaster Tools</span>
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="index-03.html#">Let's Start</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="shadow-sm card">
                    <div class="p-4 card-header">
                        <span
                            class="px-3 py-1 mb-4 text-white bg-warning rounded-pill small fw-600 d-inline-block">Business</span>
                        <h6 class="m-0 h1">$49.00</h6>
                    </div>
                    <div class="p-4 card-body">
                        <ul class="mb-4 list-unstyled">
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Drag &amp; Drop Builder</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">1,000s of Templates Ready</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">Blog Tools</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">eCommerce Store</span>
                            </li>
                            <li class="py-2 d-flex">
                                <i
                                    class="bi bi-chevron-right icon-sm bg-primary-soft text-primary rounded-circle"></i>
                                <span class="ps-2">30+ Webmaster Tools</span>
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="index-03.html#">Let's Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- section -->
<section class="pb-0 section">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="text-center col-lg-6">
                <h6 class="text-primary">Business Projects</h6>
                <h3 class="h1">Business Case Studies.!</h3>
                <p class="m-0 fs-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="swiper swiper-container"
            data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-next-01",
                "prevEl": ".swiper-prev-01"
              },
              "autoplay": {
                "delay": 3500,
                "disableOnInteraction": false
              },
              "breakpoints": {
                "650": {
                  "slidesPerView": 2
                },
                "991": {
                  "slidesPerView": 3
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="mb-4">
                        <div class="overflow-hidden rounded-3">
                            <a href="index-03.html#">
                                <img class="w-100" src="assets/img/project-1.jpg" title=""
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4 mx-3 bg-white shadow-sm mt-n6 rounded-3 position-relative">
                            <div class="pb-3">
                                <img height="35" src="assets/img/brand/airbnb.svg" title=""
                                    alt="" />
                            </div>
                            <h5 class="m-0 h6 lh-sm">
                                See how we helped an innovative tech startup reimagine
                                the chatbot.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mb-4">
                        <div class="overflow-hidden rounded-3">
                            <a href="index-03.html#">
                                <img class="w-100" src="assets/img/project-2.jpg" title=""
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4 mx-3 bg-white shadow-sm mt-n6 rounded-3 position-relative">
                            <div class="pb-3">
                                <img height="35" src="assets/img/brand/paypal.svg" title=""
                                    alt="" />
                            </div>
                            <h5 class="m-0 h6 lh-sm">
                                See how we helped an innovative tech startup reimagine
                                the chatbot.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mb-4">
                        <div class="overflow-hidden rounded-3">
                            <a href="index-03.html#">
                                <img class="w-100" src="assets/img/project-3.jpg" title=""
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4 mx-3 bg-white shadow-sm mt-n6 rounded-3 position-relative">
                            <div class="pb-3">
                                <img height="35" src="assets/img/brand/slack.svg" title=""
                                    alt="" />
                            </div>
                            <h5 class="m-0 h6 lh-sm">
                                See how we helped an innovative tech startup reimagine
                                the chatbot.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mb-4">
                        <div class="overflow-hidden rounded-3">
                            <a href="index-03.html#">
                                <img class="w-100" src="assets/img/project-4.jpg" title=""
                                    alt="" />
                            </a>
                        </div>
                        <div class="p-4 mx-3 bg-white shadow-sm mt-n6 rounded-3 position-relative">
                            <div class="pb-3">
                                <img height="35" src="assets/img/brand/spotify.svg" title=""
                                    alt="" />
                            </div>
                            <h5 class="m-0 h6 lh-sm">
                                See how we helped an innovative tech startup reimagine
                                the chatbot.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 swiper-pagination position-relative"></div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- section -->
<section class="pt-5 pb-4 border-bottom bg-gray-gradient-reverse">
    <div class="container">
        <div class="row gy-3">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="p-4 card-body d-flex">
                        <div class="text-white shadow-sm icon-lg bg-primary rounded-3">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="col ps-3">
                            <div class="m-0 purecounter h3" data-purecounter-start="0"
                                data-purecounter-end="745"></div>
                            <span>Happy Clients.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="p-4 card-body d-flex">
                        <div class="text-white shadow-sm icon-lg bg-primary rounded-3">
                            <i class="bi bi-camera"></i>
                        </div>
                        <div class="col ps-3">
                            <div class="m-0 purecounter h3" data-purecounter-start="0"
                                data-purecounter-end="580"></div>
                            <span>Photo Capture.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="p-4 card-body d-flex">
                        <div class="text-white shadow-sm icon-lg bg-primary rounded-3">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="col ps-3">
                            <div class="m-0 purecounter h3" data-purecounter-start="0"
                                data-purecounter-end="1650"></div>
                            <span>Projects.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="p-4 card-body d-flex">
                        <div class="text-white shadow-sm icon-lg bg-primary rounded-3">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <div class="col ps-3">
                            <div class="m-0 purecounter h3" data-purecounter-start="0"
                                data-purecounter-end="9001"></div>
                            <span>Clients call.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->
<!-- Section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="text-center col-lg-6">
                <h6 class="text-primary">Client Feedback</h6>
                <h3 class="h1">Our Clients Feedback.</h3>
                <p class="m-0 fs-lg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="swiper swiper-container"
            data-swiper-options='{
                  "slidesPerView": 1,
                  "spaceBetween": 0,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "breakpoints": {
                    "768": {
                      "slidesPerView": 2
                    },
                    "1000": {
                      "slidesPerView": 3
                    },
                    "1200": {
                      "slidesPerView": 3
                    }
                  }
                }'>
            <div class="swiper-wrapper">
                <!-- Item -->
                <div class="swiper-slide">
                    <div class="m-2 text-center shadow-sm card">
                        <div class="py-5 text-center card-body position-relative px-lg-5">
                            <p class="mb-4 fs-lg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                            <div class="mx-auto mb-3 avatar-xl">
                                <img class="avatar-img rounded-circle" src="assets/img/avatar-1.jpg"
                                    title="" alt="" />
                            </div>
                            <h6 class="mb-0 h5">Joan Rivers</h6>
                            <span class="fs-sm">Product Manager</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="swiper-slide">
                    <div class="m-2 text-center shadow-sm card">
                        <div class="py-5 text-center card-body position-relative px-lg-5">
                            <p class="mb-4 fs-lg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                            <div class="mx-auto mb-3 avatar-xl">
                                <img class="avatar-img rounded-circle" src="assets/img/avatar-6.jpg"
                                    title="" alt="" />
                            </div>
                            <h6 class="mb-0 h5">Joan Rivers</h6>
                            <span class="fs-sm">Product Manager</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="swiper-slide">
                    <div class="m-2 text-center shadow-sm card">
                        <div class="py-5 text-center card-body position-relative px-lg-5">
                            <p class="mb-4 fs-lg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                            <div class="mx-auto mb-3 avatar-xl">
                                <img class="avatar-img rounded-circle" src="assets/img/avatar-5.jpg"
                                    title="" alt="" />
                            </div>
                            <h6 class="mb-0 h5">Joan Rivers</h6>
                            <span class="fs-sm">Product Manager</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="swiper-slide">
                    <div class="m-2 text-center shadow-sm card">
                        <div class="py-5 text-center card-body position-relative px-lg-5">
                            <p class="mb-4 fs-lg">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                            <div class="mx-auto mb-3 avatar-xl">
                                <img class="avatar-img rounded-circle" src="assets/img/avatar-4.jpg"
                                    title="" alt="" />
                            </div>
                            <h6 class="mb-0 h5">Joan Rivers</h6>
                            <span class="fs-sm">Product Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 swiper-pagination position-relative"></div>
        </div>
    </div>
</section>
<!-- End Section -->
<!-- Section -->
<!-- End Section -->
</main>
<!-- End Main -->
<!-- Footer -->
<footer class="bg-dark">
<div class="footer-top">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6">
                <div class="pb-4">
                    <img src="assets/img/siotics-dark.svg" title="" alt="">
                </div>
                <p class="text-white fs-lg opacity-7">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor.</p>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="mb-4 text-white fw-700 h5">Products</h6>
                <ul class="mb-5 list-unstyled fs-sm footer-link-01">
                    <li><a class="text-white" href="#">Current Accounts</a></li>
                    <li><a class="text-white" href="#">Payouts</a></li>
                    <li><a class="text-white" href="#">Payout Links</a></li>
                </ul>
                <h6 class="mb-4 text-white fw-700 h5">Company</h6>
                <ul class="list-unstyled fs-sm footer-link-01">
                    <li><a class="text-white" href="#">About Us</a></li>
                    <li><a class="text-white" href="#">Careers</a> <span
                            class="badge bg-warning text-dark rounded-pill ms-2">Hiring</span></li>
                    <li><a class="text-white" href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="mb-4 text-white fw-700 h5">Resources</h6>
                <ul class="mb-5 list-unstyled fs-sm footer-link-01">
                    <li><a class="text-white" href="#">Blog <i
                                class="bi bi-box-arrow-up-right ms-1"></i></a></li>
                    <li><a class="text-white" href="#">Customer Stories</a></li>
                    <li><a class="text-white" href="#">Events</a></li>
                </ul>
                <h6 class="mb-4 text-white fw-700 h5">Use cases</h6>
                <ul class="list-unstyled fs-sm footer-link-01">
                    <li><a class="text-white" href="#">SaaS</a></li>
                    <li><a class="text-white" href="#">Platforms</a></li>
                    <li><a class="text-white" href="#">Marketplaces</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h6 class="mb-4 text-white fw-700 h5">Stay up to date</h6>
                <p class="text-white opacity-7">2000+ Our clients are subscribe Around the World</p>
                <form>
                    <div class="mb-2 d-flex flex-column flex-sm-row">
                        <input type="email" class="mb-2 form-control me-sm-2 mb-sm-0"
                            placeholder="Enter your username">
                        <button class="flex-shrink-0 btn btn-primary" type="submit">Get Started</button>
                    </div>
                    <p class="m-0 text-white-50">New UI kits or big discounts. Never spam.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom footer-border-top-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="mb-3 col-md mb-md-0">
                <p class="m-0 text-white opacity-7 fs-sm">© 2023 copyright by <a target="_blank"
                        href="https://www.pxdraft.com/" class="text-reset">pxdraft</a></p>
            </div>
            <div class="col-md d-md-flex justify-content-md-end">
                <ul class="mb-0 list-inline">
                    <li class="list-inline-item">
                        <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                            href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                            href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                            href="#">
                            <i class="bi bi-github"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                            href="#">
                            <i class="bi bi-slack"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- End Footer -->
@endsection
