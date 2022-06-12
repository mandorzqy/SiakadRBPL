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
        body {
            /* background-image: url("https://media.istockphoto.com/photos/abstract-blue-cyan-background-picture-id995719694?k=20&m=995719694&s=612x612&w=0&h=zI2SFqWdZallvqgVphnq5T8ZWYK0TBIkKdyYP60JAI8="); */
        }
    </style>
</head>


{{-- <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="/">SIAKAD</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link {{Request::is('/biodata'?'active':'')}}" href="/biodata">{{auth()->user()->name}}</a></li>
          <li><form action="/logout" method="post">
            @csrf<button style="
            background:none;
            border:none;
            margin:0;
            padding: 10px 0 10px 30px;;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;"
            class="nav-link scrollto" action="/logout">Sign Out</button></form></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </header><!-- End Header --> --}}

@include('dashboard.layouts.header')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">


    <div class="container">
        <div class="container pt-5">
            <div class="section-title">
                <h2>Proses</h2>
            </div>
        </div>

        <div class="row portfolio-container justify-content-center">

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <a href="/frs">
                        <figure>
                            <img src="img/portfolio-05.jpg" class="img-fluid" alt="">
                        </figure>

                        <div class="portfolio-info">
                            <h4>Formulir Rencana Studi</h4>
                        </div>
                    </a>
                </div>
            </div>

            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <a href="/kuesioner">
                        <figure>
                            <img src="img/portfolio-05.jpg" class="img-fluid" alt="">
                            <a href="/suratmahasiswa" {{ auth()->user()->name }} class="link-details" title="More
                            Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4>Kuesioner Dosen dan MK</h4>
                        </div>
                    </a>
                </div> --}}
            </div>



        </div>

    </div>

</section><!-- End Portfolio Section -->
