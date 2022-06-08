<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kuesioner Dosen dan Mata Kuliah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center>
  <h2>Kuesioner Evaluasi Mata Kuliah</h2>
  <h4>Riwayat Pengisian Kuesioner</h4>
  <p></p>
  <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Periode</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Genap</a></li>
        <li><a class="dropdown-item" href="#">Ganjil</a></li>
      </ul>
      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Tahun</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">2022</a></li>
        <li><a class="dropdown-item" href="#">2021</a></li>
        <li><a class="dropdown-item" href="#">2020</a></li>
      </ul>
    <button type="button" class="btn btn-outline-secondary">Enter</button>
  </div>
  <p>Data update setiap satu jam</p>
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode MK</th>
        <th>Dosen</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>IS184412</td>
        <td>Radityo Prasetianto Wibowo, S.Kom., M.Kom</td>
        <td>Belum</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</center>
</html>
@extends('dashboard.layouts.main')

@section('container')

<style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color:white;
    /* border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2; */

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    /* display: inline-block; */
    /* position: relative; */
    border-collapse: collapse;
}

</style>
<div class="mt-3">
    <center>
        <h2>Data Historis Pembayaran IKOMA</h2>
          <h5></h5>
    </center>
</div>


  <div class="container justify-content-center  ">
      <div class="row d-flex justify-content-center">
          <div class="col-7">
            <table class=" mt-2 table center table-bordered"  >
                <thead class="table-dark">
                  <tr>
                    <th >Tahun dan Semester</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Genap 2022</td>
                    <td>22-01-2022</td>
                    <td>1500000</td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
      <div class="row d-flex justify-content-center mt-2">
          <div class="col-7">
            <table class="mt-2 table table-bordered"  >
                <thead class="table-dark">
                    <tr >
                        <th>Jenis Pembayaran</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >TAGIHAN IKOMA</td>
                        <td><div align="right">1500000</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN IKOMA</td>
                        <td><div align="right">0</div></td>
                    </tr>
                        <tr>
                        <tr>
                        <td >TAGIHAN IPITS</td>
                        <td><div align="right">0</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN IPITS</td>
                        <td><div align="right">0</div></td>
                    </tr>
                </tbody>
              </table>
          </div>
      </div>
</div>

						{{-- <table width="600" border="0" align="center" cellpadding="4" cellspacing="4"><tr class="tr2" ><td width="500" ><div align="left">
                            <strong>Jenis Pembayaran</strong></div></td><td width="100" ><div align="center"><strong>Amount </strong></div></td></tr><tr>
					<tr>
						<td width="100">TAGIHAN IKOMA</td>
						<td><div align="right">1500000</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN IKOMA</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<tr>
						<td width="100">TAGIHAN IPITS</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN IPITS</td>
						<td><div align="right">0</div></td>
					</tr> --}}

</div>
@endsection
