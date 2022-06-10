@extends('dashboard.layouts.main')

@section('container')
    <style>
        h1 {
            margin-top: 15px;
        }

        .table {
            background-color: white;

            padding-top: 16px;
            padding-right: 11px;
            padding-bottom: 13px;
            padding-left: 14px;
            margin-bottom: 15px;
            border-collapse: collapse;
        }
    </style>



    <style>
        .card {
            width: 70%;
            border-radius: 15px;
        }

        .card-header {
            text-align: center;
            border: 0;
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>

    </head>

    <body>
        <div class="container mt-4 ">
            <div class="card mx-auto">
                <div class="card-header">
                    <h2><b>Surat Keterangan Mahasiswa Aktif</b></h2>
                </div>
                <div class="card-body">
                    <div class="container">
                        <p style="color: red;">* Mohon Semuanya Diisi Dengan Sesuai *</p>
                        <form action="/suratketeranganaktif/simpan" method="POST">
                            @csrf
                            <input type="hidden" name="tipe" value="suratketeranganaktif">
                            <div class="form-group">
                                <label for="state">Periode:</label>
                                <select class="form-control" name="periode" required>
                                    <option value="" selected disabled>Periode</option>
                                    <option value="2022 Genap">2022 Genap</option>
                                    <option value="2022 Gasal">2022 Gasal</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="state">Keperluan:</label>
                                <select class="form-control" name="keperluan" required>
                                    <option value="" selected disabled>Keperluan</option>
                                    <option value="Mengurus Tunjangan Gaji Orang Tua">Mengurus Tunjangan Gaji Orang Tua
                                    </option>
                                    <option value="Mengurus BPJS/Asuransi/Berkas Lainnya">Mengurus BPJS/Asuransi/Berkas
                                        Lainnya</option>
                                    <option value="Mengurus Surat Kehilangan">Mengurus Surat Kehilangan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 mt-2">
                                <label for="state">Pilihan Bahasa:</label>
                                <select class="form-control" name="bahasa" >
                                    <option value="" selected disabled>Bahasa</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white">Ajukan
                                    Surat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container justify-content-center mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-7">
                    <table class=" mt-2 table center table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Periode</th>
                                <th>Keperluan</th>
                                <th>Bahasa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($surataktif as $surat)
                            <tr>
                                <td>{{ $surat->periode }}</td>
                                <td>{{ $surat->keperluan }}</td>
                                <td>{{ $surat->bahasa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </body>
    </section><!-- End Portfolio Section -->
    </body>
@endsection
