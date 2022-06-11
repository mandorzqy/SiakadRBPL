<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIAKAD</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="css/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="css/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/dashboard.css" rel="stylesheet">
    <style>
      /* body {
          background-image: url("https://media.istockphoto.com/photos/abstract-blue-cyan-background-picture-id995719694?k=20&m=995719694&s=612x612&w=0&h=zI2SFqWdZallvqgVphnq5T8ZWYK0TBIkKdyYP60JAI8=");
      } */

  </style>
</head>

<body>
    @include('dashboard.layouts.header')
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
                        <a href="/proses">
                            <figure>
                                <img src="img/portfolio-1.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Proses</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <a href="/suratmahasiswa">
                            <figure>
                                <img src="img/portfolio-02.jpg" class="img-fluid" alt="">
                            </figure>

                            <div class="portfolio-info">
                                <h4>Surat Mahasiswa</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <a href="/biayapendidikan">
                          <figure>
                              <img src="img/portfolio-03.jpg" class="img-fluid" alt="">
                          </figure>

                          <div class="portfolio-info">
                              <h4>Biaya Pendidikan</h4>
                          </div>
                      </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <a href="/akademik">
                          <figure>
                              <img src="img/portfolio-04.jpg" class="img-fluid" alt="">
                          </figure>

                          <div class="portfolio-info">
                              <h4>Akademik</h4>
                          </div>
                      </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                       <a href="/akademik">
                          <figure>
                              <img src="img/portfolio-05.jpg" class="img-fluid" alt="">
                          </figure>

                          <div class="portfolio-info">
                              <h4>Laporan</h4>
                          </div>
                      </a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Portfolio Section -->
</body>
