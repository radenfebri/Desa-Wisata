<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wisata Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('template-front') }}/img/logo.png" rel="icon">
    <link href="{{ asset('template-front') }}/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template-front') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('template-front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template-front') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('template-front') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('template-front') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('template-front') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template-front') }}/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-inner-page">
        <div class="container d-flex align-items-center justify-content-between ">

            <div class="logo">
                <h1><a href="{{ route('homepage') }}"><img src="{{ asset('template-front') }}/img/logo.png" alt="" class="img-fluid">Desa Wisata Organik</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('template-front') }}/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('homepage') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('homepage') }}#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('homepage') }}#portfolio">Paket Wisata</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('homepage') }}#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('homepage') }}#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $artikel->judul }} informasi Details</h2>
                    <ol>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li><a href="{{ route('homepage') }}#portfolio">Paket Wisata</a></li>
                        <li>Wisata Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'. $artikel->gambar_artikel ) }}" alt="{{ $artikel->judul }}">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>{{ $artikel->judul }} informasi</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $artikel->kategoris->nama_kategori }}</li>
                                <li><strong>Penulis</strong>: {{ $artikel->users->name }}</li>
                                <li><strong>Email Penulis</strong> : {{ $artikel->users->email }}</li>
                                <li><strong>Project dibuat</strong>: {{date('d M Y',strtotime($artikel->created_at))}}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h6><b>{{ $artikel->judul }}</b></h6>
                            <p>
                                {!! $artikel->deskripsi !!}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Pemilik Desa Wisata Organik</h3>
                            <p class="pb-3"><em>"Bumi Adalah Milik Kita Semua"</em></p>
                            <p>
                                <strong> Bpk. Baidowi </strong><br>
                                Lombok Kulon 68282, Wonosari<br><br>
                                <strong>Phone:</strong> +62 856 0060 0693<br>
                                <strong>Email:</strong> baidowiwisata@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/Baiwisata/" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/bay_wisata/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Daftar</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Paket Wisata</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Desa Wisata Organik</h4>
                        <p>Situs web, Nomor telepon, Peta, Facebook Desa Wisata Organik, Lombok Kulon. 9.52 km. dari Bondowoso, 36.58 km. dari Situbondo. 44.02 km. dari Jember.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Desa Wisata Organik <strong><span>Lombok Kulon</span></strong>.WONOSARI-BONDOWOSO
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/ -->
                Designed by <a href="https://www.instagram.com/dio_txc/">Ferdiantoro Rizki S</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template-front') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template-front') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('template-front') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('template-front') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('template-front') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template-front') }}/js/main.js"></script>

</body>
