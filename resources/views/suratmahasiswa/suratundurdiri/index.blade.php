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
                    <h2><b>Surat Undur Diri</b></h2>
                </div>
                <div class="card-body">
                    <div class="container">
                        <p style="color: red;">* Mohon Semuanya Diisi Dengan Sesuai *</p>
                        <form action="/suratundurdiri/simpan" method="POST">
                            @csrf
                            <input type="hidden" name="tipe" value="suratundurdiri">
                            <div class="form-group">
                                <label for="state">Periode:</label>
                                <select class="form-control" name="periode">
                                    <option value="" selected disabled>Periode</option>
                                    <option value="2022 Genap">2022 Genap</option>
                                    <option value="2022 Gasal">2022 Gasal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">Alasan:</label>
                                <input type="text" name="alasan" class="form-control"  id="alasan" placeholder="Masukkan Alasan" autofocus required>
                            </div>
                            <div class="form-group mb-3 mt-2">
                                <label for="state">Pilihan Bahasa:</label>
                                <select class="form-control" name="bahasa">
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
                <div class="col-5">
                    <table class=" mt-2 table center table-bordered text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Periode</th>
                                <th>Alasan</th>
                                <th>Bahasa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suratmundur as $surat)
                            <tr>
                                <td>{{ $surat->periode }}</td>
                                <td>{{ $surat->alasan }}</td>
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
