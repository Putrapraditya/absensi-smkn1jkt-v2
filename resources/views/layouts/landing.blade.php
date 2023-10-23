<!DOCTYPE html>
<html lang="id">

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="pxdraft" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="SIOTICS | SMKN 1 Jakarta" />
    <meta name="description" content="SIOTICS | SMKN 1 Jakarta" />
    <!-- title -->
    <title>Home - {{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/siotics-dark.jpg" />
    <!-- CSS Template -->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <!-- Preload -->
    <div id="loading" class="loading-preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- End Preload -->
    <div class="wrapper">
        <!-- Header -->
        <header class="shadow-sm main-header headroom navbar-dark fixed-top bg-dark">
            {{-- <div class="text-center alert alert-warning bg-warning alert-dismissible fade show" style="padding: 5px" role="alert">
                <strong class="badge bg-danger">SEGERA</strong> Menjadi bagian dari <strong>SIOTICS CLUB</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 10px 15px"></button>
            </div> --}}
            <!-- Top Bar Start -->
            <script>
                // main.js (atau sesuaikan nama file Anda)

                $(document).ready(function() {
                    // Fungsi untuk memeriksa URL route
                    function checkRoute() {
                        const currentPath = window.location.pathname;
                        // Ubah selector sesuai dengan elemen header Anda
                        const $header = $('.main-header');

                        if (currentPath === '/about') {
                            // Ganti kelas dari fixed-top menjadi sticky-top
                            $header.removeClass('fixed-top').addClass('sticky-top');
                        } else {
                            // Kembalikan kelas ke fixed-top jika route bukan /about
                            $header.removeClass('sticky-top').addClass('fixed-top');
                        }
                    }

                    // Panggil fungsi saat halaman dimuat dan setiap kali URL berubah (misalnya, ketika menggunakan navigasi router di aplikasi SPA)
                    checkRoute();
                    $(window).on('popstate', checkRoute);
                });
            </script>
            <div class="py-2 top-bar bg-primary"
                style="background-image: url('https://shuffle.dev/vendor/shuffle/img/pattern-generator/background-pattern.png')">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <a class="text-light d-flex align-items-center" href="mailto:support@siotics.org"><i
                                    class="bi bi-geo-alt"></i>&nbsp;Jl. Budi Utomo No. 7, Sawah Besar, Jakarta Pusat
                                10710</a>
                        </div>
                        <div class="col-auto">
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="https://github.com/Siotics">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-0 btn btn-sm btn-light-soft avatar-xs d-inline-flex align-items-center justify-content-center"
                                    href="https://instagram.com/siotics.one">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @media screen and (max-width: 768px) {
                    .top-bar {
                        display: none;
                    }
                }
            </style>

            <!-- Top Bar End -->
            <!-- Nav Start -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a href="/" class="navbar-brand header-navbar-brand me-lg-5">
                        <img class="logo-light" src="assets/img/siotics-dark.svg" title="SIOTICS-logo" alt="Logo" />
                    </a>
                    <!-- Logo End -->
                    <!-- Toggler Start -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_header_nav" aria-controls="main_header_nav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Toggler End -->
                    <!-- Collapse Start -->
                    <div class="navbar-collapse collapse" id="main_header_nav">
                        <!-- Navigation Start -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index-03.html#" data-bs-toggle="dropdown">
                                    Profile
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('about') }}">Tentang</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://www.pxdraft.com/demo/crikon/html/pages/services.html">Struktur
                                            Kepengurusan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://www.pxdraft.com/demo/crikon/html/pages/portfolio.html">Visi &
                                            Misi</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://www.pxdraft.com/demo/crikon/html/pages/contact.html">Galeri</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://nextc.siotics.org">
                                    Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://nextc.siotics.org">
                                    NextCloud
                                </a>
                            </li>
                            <ul class="gap-2 mt-2 d-md-flex list-unstyled mt-md-0">
                                <li class="mt-1 col-md-6 col-12">
                                    <a href="{{ route('login') }}" class="btn btn-primary col-12 btn-sm rounded-3">Masuk</a>
                                </li>
                                <li class="mt-1 col-md-6 col-12">
                                    <a href="{{ route('register') }}" class="btn btn-warning col-12 btn-sm rounded-3">Daftar</a>
                                </li>
                            </ul>
                        </ul>
                        <!-- Navigation End -->
                    </div>
                    <!-- Collapse End -->
                </div>
            </nav>
            <!-- Nav End -->
        </header>
        <!-- End Header -->
        <!-- Main -->
        <main>
            @yield('content')
        </main>

    </div>
    <!--
    ========================
       End Wrapper
    ========================
    -->
    <!-- script start -->
    <!-- Theme JS -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!--bootstrap-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- headroom JS -->
    <script src="assets/vendor/headroom/headroom.min.js"></script>

    <!-- headroom JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- highlight JS -->
    <script src="assets/vendor/highlight/highlight.min.js"></script>

    <!-- purecounter JS -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- isotope JS -->
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <!-- magnific JS -->
    <script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

    <!-- typed JS -->
    <script src="assets/vendor/typed/typed.js"></script>

    <!-- working form -->
    <script src="assets/vendor/mail/js/form.min.js"></script>
    <script src="assets/vendor/mail/js/script.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme-jquery.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.js"></script>

    <!-- End script start -->
</body>

</html>
