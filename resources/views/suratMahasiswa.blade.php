<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <main>
            <div class="content">
                <div class="container text-center mt-5">
                    <h3>
                        Permohonan Keterangan Berhenti Studi Sementara
                    </h3>
    
                </div>
                <div class="container align-items-start text-start">
                    <table class="table table-borderless align-middle text-start mb-4" style="box-shadow: 0 0; margin-bottom: -0.1em">
                        <tbody>
                            <tr>
                                <td>Kepada</td>
                            </tr>
                            <tr>
                                <td>Yth. Rektor ITS</td>
                            </tr>
                            <tr>
                                <td>Kampus ITS Sukolilo</td>
                            </tr>
                            <tr>
                                <td>Surabaya</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless align-middle text-start mb-4" style="box-shadow: 0 0; margin-bottom: -0.1em">
                        <tbody>
                            <tr>
                                <td>Departemen</td>
                                <td>:</td>
                                <td>{{ auth()->user()->major->nama_jurusan }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td>NRP</td>
                                <td>:</td>
                                <td>{{ auth()->user()->nrp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ auth()->user()->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-borderless align-middle text-start" style="box-shadow: 0 0; margin-bottom: -0.1em">
                        <tbody>
                            <tr>
                                <td>Mengajukan permohonan keterangan mahasiswa untuk keperluan cuti.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>


