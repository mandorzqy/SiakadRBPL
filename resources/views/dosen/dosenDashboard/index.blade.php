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
        body {
            background-image: url("https://media.istockphoto.com/photos/abstract-blue-cyan-background-picture-id995719694?k=20&m=995719694&s=612x612&w=0&h=zI2SFqWdZallvqgVphnq5T8ZWYK0TBIkKdyYP60JAI8=");
        }
    </style>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">


        <div class="container">
            <div class="container pt-5">
                <div class="section-title">
                    <h2>Dashboard</h2>
                    <p>Selamat Datang, {{ auth()->user()->name }}</p>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <a href="/dosen/frs">
                            <figure>
                                <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Kelas</h4>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                       <a href="/dosen/frs">
                            <figure>
                                <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                                {{-- <a href="/suratmahasiswa" {{ auth()->user()->name }} class="link-details" title="More
                                    Details"><i class="bx bx-link"></i></a> --}}
                            </figure>

                            <div class="portfolio-info">
                                <h4>Formulir Rencana Studi</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <a href="/dosen/kurikulum">
                            <figure>
                                <img src="img/portfolio-04.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Kurikulum</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <a href="/dosen/transkrip">
                            <figure>
                                <img src="img/portfolio-05.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Transkrip</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <a href="#">
                            <figure>
                                <img src="img/portfolio-06.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Jadwal Kuliah Mahasiswa</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <a href="#">
                            <figure>
                                <img src="img/portfolio-05.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Daftar Mata Kuliah</h4>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Portfolio Section -->
@endsection
