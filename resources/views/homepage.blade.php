<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Wisata Organik Wonosari Lombok Kulon</title>
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

    @include('sweetalert::alert')

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between ">

            <div class="logo">
                <h1><a href="/">Desa Wisata Organik</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('template-front') }}/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Paket Wisata</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">

                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                        <!-- Slide  -->
                        @php
                        $i = 1;
                        @endphp

                        @foreach ($slides as $item)
                        <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">

                            @php
                            $i++;
                            @endphp

                            <img src="{{ asset('storage/'. $item->gambar_slide ) }}" class="backgroundimg" alt="gambar_slide">
                            <div class="carousel-container">
                                <div class="container-content">
                                    <center>
                                    <h2 class="animate__animated animate__fadeInDown">{{ $item->judul_slide }}</span></h2>
                                    <p class="animate__animated animate__fadeInUp">{{ $item->deskripsi_slide }}</p>
                                    <a href="{{ $item->link_slide }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Selengkapnya</a>
                                </center>

                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h2>Profil</h2>
                        <p>{{ $profile->deskripsi_profil_1 }}.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('storage/'. $profile->gambar_profil) }}" width="900px" class="img-fluid" alt="Profile Gambar">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Pengelolah Desa Wisata Organik Lombok Kulon</h3>
                            <p>{{ $profile->deskripsi_profil_2 }}</p>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Cards Section ======= -->
            <section id="cards" class="cards">
                <div class="container">

                    <div class="row">
                        @foreach ($profile_gambar as $item)

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="card">
                                    <img src="{{ asset('storage/'. $item->profile_gambar ) }}" class="card-img-top" alt="{{ $item->judul }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>
            </section>
            <!-- End Cards Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Objek Dan Daya Tarik Utama Di Desa Wisata Organik Lombok Kulon</h2>
                        <p></p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Semua</li>
                                @foreach ($kategoris as $item)
                                    <li data-filter=".{{ $item->slug }}">{{ $item->nama_kategori }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container">

                        @foreach ($blogs as $item)

                        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->kategoris->slug }}">
                            <img src="{{ asset('storage/'. $item->gambar_artikel) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $item->judul }}</h4>
                                <p>Selengkapnya klik icon rantai-></p>
                                <a href="{{ asset('storage/'. $item->gambar_artikel) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persawahan"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('detail', $item->slug) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </section>
            <!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>PENGELOLAH DESA WISATA ORGANIK LOMBOK KULON </p>
                    </div>

                    <div class="row">

                        @foreach ($teams as $item)

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('storage/'. $item->foto_team ) }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="{{ $item->facebook_team }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $item->instagram_team }}"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama_team }}</h4>
                                    <span>{{ $item->jabatan_team }}</span>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </section>
            <!-- End Team Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>
                            {{ $contact->deskripsi_contact }}
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Address</h3>
                                <p>{{ $contact->alamat_contact }}</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ $contact->email_contact }}</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>{{ $contact->call_contact }}</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6 ">
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.541869446637!2d113.88918441477904!3d-7.942819894278775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c4c480e210d7%3A0xe257db95dd15b3e6!2sDesa%20Wisata%20Organik!5e0!3m2!1sid!2sid!4v1655213523484!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
                        </div>

                        <div class="col-lg-6">

                            <form action="{{ route('kirimpesan') }}" method="POST" class="kirim-pesan" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No HP Anda" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Pesan" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Kirim Pesan</button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </section>
            <!-- End Contact Section -->

        </main>
        <!-- End #main -->

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

    </html>
