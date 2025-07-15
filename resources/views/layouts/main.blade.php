<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RSUD Sindangbarang - Pelayanan Profesional dan Terpercaya</title>
    <meta name="description" content="RSUD-Sindang Barang">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Swiper.js untuk Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/layout/pages/_about-us.scss') }}">

</head>

<body class="body-2">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- preloader start -->
    <div id="preloader">
        <div class="preloader-close">x</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- search popup start -->
    <div class="search__popup">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-12">
                    <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                            <div class="search__logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/imgs/logo/logo-rsud.png') }}" alt="Logo RSUD">
                                </a>
                            </div>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type here to search...">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path
                                            d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- search popup end -->

    <!-- preloader start -->
    <div class="loading-form">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Backtotop start -->
    <div id="scroll-percentage">
        <span id="scroll-percentage-value" data-default-color="var(--rr-color-900)"
            data-scroll-color="var(--rr-theme-primary)"></span>
    </div>
    <!-- Backtotop end -->

   <!-- ==================== HEADER ==================== -->
    <header class="site-header">
        <div class="header-main">
            <div class="container">
                <!-- Wrapper untuk logo dan nav -->
                <div class="header-left">
                    <a href="index.html" class="site-logo">
                        <img src="assets/imgs/logo/logo-rsud.png" alt="Logo RSUD">
                    </a>
                    <nav class="main-nav">
                        <ul>
                            <li class="active"><a href="/">Beranda</a></li>
                            <li><a href="/layanan">Layanan & Fasilitas</a></li>
                            <li>
                                <a href="#">Profil</a>
                                <ul class="submenu">
                                    <!-- [PERUBAHAN] Menggunakan href dari permintaan Anda -->
                                    <li><a href="{{ route('profil.tentang-kami') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('profil.manajemen') }}">Manajemen</a></li>
                                    <li><a href="{{ route('profil.dokter') }}">Daftar Dokter</a></li>
                                </ul>
                            </li>
                            <li><a href="/kegiatan">Kegiatan</a></li>
                            <li><a href="/berita">Berita & Artikel</a></li>
                            <li><a href="/e-survey">e-Survey</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Wrapper untuk elemen kanan -->
                <div class="header-right">
                    <div class="header-emergency-contact">
                        <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="text">
                            <p>Gawat Darurat 24 Jam</p>
                            <h5><a href="tel:082130677599">0821-3067-7599</a></h5>
                        </div>
                    </div>
                    <button class="mobile-nav-toggle" aria-label="Buka Menu">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Body main wrapper start -->
    <main class="home-2__background">
        @yield('content')
    </main>
    <!-- Body main wrapper end -->
<footer class="site-footer">
        <div class="container">
            <div class="footer-widgets">
                <!-- Widget 1: Tentang RSUD & Media Sosial -->
                <div class="footer-widget" style="flex-basis: 35%;">
                    <div class="footer-logo">
                        <img src="assets/imgs/logo/logo-rsud.png" alt="Logo RSUD">
                    </div>
                    <p>Kami berkomitmen untuk memberikan pelayanan kesehatan terbaik yang profesional, ramah, dan berorientasi pada keselamatan pasien.</p>
                    <div class="footer-social mt-30">
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Widget 2: Layanan Kami -->
                <div class="footer-widget">
                    <div class="footer-widget-title"><h4>Layanan Kami</h4></div>
                    <ul>
                        <li><a href="#">Gawat Darurat (IGD)</a></li>
                        <li><a href="#">Rawat Jalan</a></li>
                        <li><a href="#">Rawat Inap</a></li>
                        <li><a href="#">Laboratorium</a></li>
                        <li><a href="#">Radiologi</a></li>
                    </ul>
                </div>

                <!-- Widget 3: Hubungi Kami -->
                <div class="footer-widget" style="flex-basis: 30%;">
                    <div class="footer-widget-title"><h4>Hubungi Kami</h4></div>
                    <ul>
                        <li><a href="tel:+62211234567"><i class="fa-solid fa-phone"></i> (021) 123-4567</a></li>
                        <li><a href="mailto:info@rsud.go.id"><i class="fa-solid fa-envelope"></i> info@rsud.go.id</a></li>
                        <li><a href="#" target="_blank"><i class="fa-solid fa-location-dot"></i> Jl. Kesehatan No. 1, Kota Sehat, Indonesia</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-text">
                    <p class="mb-0">© <a href="index.html" style="color: var(--color-putih); font-weight:600;">RSUD Sindangbarang</a> 2024 | Hak Cipta Dilindungi</p>
                </div>
                <div class="copyright-menu">
                    <ul>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer area end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/type.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/draggable.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/banner.js') }}"></script>
        <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
