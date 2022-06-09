@extends('dashboard.layouts.main')

@section('container')

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
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>

    </head>

    <body>
        <div class="container mt-4">
            <div class="card mx-auto">
                <div class="card-header">
                    <h2><b>Surat Cuti</b></h2>
                </div>
                <br>
                <div class="card-body"></div>
                <div class="container ">
                    <p style="color: red;">* Mohon Semuanya Diisi Dengan Sesuai *</p>
                    <form id="formvalidation" action="https://www.sea.playblackdesert.com/Main/Index">
                        <div class="form-group">
                            <label for="state">Periode:</label>
                            <select class="form-control">
                                <option class="disabled">Please Choose</option>
                                <option>2022 Genap</option>
                                <option>2022 Gasal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Alasan:</label>
                            <input type="text" name="alasan" class="form-control"  id="alasan" placeholder="Masukkan Alasan" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="state">Durasi Pengambilan Cuti:</label>
                            <input type="text" name="alasan" class="form-control"  id="alasan" placeholder="Masukkan berapa semester anda akan mengajukan cuti" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="state">Pilihan Pengiriman:</label>
                            <select class="form-control">
                                <option class="disabled">Please Choose</option>
                                <option>Diambil</option>
                                <option>Dikirim ke Alamat Rumah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Pilih Bahasa:</label>
                            <select class="form-control">
                                <option class="disabled">Please Choose</option>
                                <option>Bahasa Indonesia</option>
                                <option>Bahasa Inggris</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary btn-lg ">Ajukan Surat</button>   
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
    </section><!-- End Portfolio Section -->
</body>
@endsection
