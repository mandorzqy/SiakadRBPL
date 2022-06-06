@extends('dashboard.layouts.main')

@section('container')
<style>
    h2{
        margin-top: 15px;
    }
    .table{
    background-color: rgba(192,229,247,255);
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2;

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    display: inline-block;
    position: relative;
    border-collapse: collapse;
}
</style>


<body>
<center>
  <h2>Kuesioner Evaluasi Mata Kuliah</h2>
  <h3></h3>
  <h5>Riwayat Pengisian Kuesioner</h5>
  <h5></h5>
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
</center>
</body>

@endsection




