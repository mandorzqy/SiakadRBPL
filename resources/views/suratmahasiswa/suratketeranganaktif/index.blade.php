<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIAKAD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
</head>

<body>

  <!-- ======= Header ======= -->
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

  </header><!-- End Header -->

    <!-- ======= Portfolio Section ======= -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>praktikum</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

        <style>
            .card {
                width: 70%;
                border-radius: 15px;
            }
            .card-header{
                text-align: center;
                border: 0;
                padding-top: 120px;
                padding-bottom: 40px;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <div class="card mx-auto">
                <div class="card-header">
                    <h2><b>Surat Keterangan Mahasiswa Aktif</b></h2>
                </div>
                <div class="card-body">
                    <div class="container">
                        <p style="color: red;">* Mohon Semuanya Diisi Dengan Sesuai *</p>
                        <form action="/suratketeranganaktif/cetak" method="POST">
                            @csrf
                            <input type="hidden" name="tipe" value="suratketeranganaktif">
                            <div class="form-group">
                                <label for="state">Periode:</label>
                                <select class="form-control" name="periode">
                                    <option value="" selected disabled>Periode</option>
                                    <option value="2022 Genap">2022 Genap</option>
                                    <option value="2022 Gasal">2022 Gasal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">Keperluan:</label>
                                <select class="form-control" name="keperluan">
                                    <option value="" selected disabled>Keperluan</option>
                                    <option value="Mengurus Tunjangan Gaji Orang Tua">Mengurus Tunjangan Gaji Orang Tua</option>
                                    <option value="Mengurus BPJS/Asuransi/Berkas Lainnya">Mengurus BPJS/Asuransi/Berkas Lainnya</option>
                                    <option value="Mengurus Surat Kehilangan">Mengurus Surat Kehilangan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="state">Pilihan Bahasa:</label>
                                <select class="form-control" name="bahasa">
                                    <option value="" selected disabled>Bahasa</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-warning btn-lg btn-block text-white">Ajukan Surat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
    </section><!-- End Portfolio Section -->
</body>