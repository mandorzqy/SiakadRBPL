@extends('dashboard.layouts.main')

@section('container')
    <!-- Vendor CSS Files -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/dashboard.css" rel="stylesheet">
    <style>
        body {}
    </style>
    </head>

    <body>
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">


            <div class="container">
                <div class="container pt-5">
                    <div class="section-title">
                        <h2>Dashboard</h2>
                        <p>Selamat Datang, {{ auth()->user()->name }}</p>
                    </div>
                </div>

                <div class="row portfolio-container justify-content-center">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <a href="/admin/biodata">
                                <figure>
                                    <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="portfolio-info">
                                    <h4>Biodata</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <a href="/admin/transkrip">
                                <figure>
                                    <img src="img/portfolio-02.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="portfolio-info">
                                    <h4>Transkrip</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <a href="/admin-kurikulum">
                                <figure>
                                    <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="portfolio-info">
                                    <h4>Daftar Mata Kuliah</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <a href="/admin/schedule">
                                <figure>
                                    <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="portfolio-info">
                                    <h4>Jadwal Kuliah Mahasiswa</h4>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <a href="/admin/kelas">
                                <figure>
                                    <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                                </figure>

                                <div class="portfolio-info">
                                    <h4>Kelas</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Section -->
    </body>
@endsection
