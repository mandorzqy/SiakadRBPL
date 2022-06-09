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
  background-image: url("");
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('dashboard.layouts.header')

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
