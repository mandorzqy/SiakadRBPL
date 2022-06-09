@extends('dashboard.layouts.main')

@section('container')

<style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color:white;

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    border-collapse: collapse;
}

</style>

<div class="mt-3">
    <center>
        <h2>Data Historis Pembayaran UKT Mahasiswa</h2>
          <h5></h5>
    </center>
</div>

@foreach($ukt as $u)
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
                    <td>{{ $u->periode }}</td>
                    <td>{{ $u->tanggal }}</td>
                    <td>{{ $u->total }}</td>
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
                        <td >TAGIHAN SPI</td>
                        <td><div align="right">{{ $u->tagihan1 }}</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN UKT</td>
                        <td><div align="right">{{ $u->tagihan2 }}</div></td>
                    </tr>
                        <tr>
                        <tr>
                        <td >TUNGGAKAN UKT</td>
                        <td><div align="right">{{ $u->tagihan3 }}</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN SPI</td>
                        <td><div align="right">{{ $u->tagihan4 }}</div></td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endforeach
@endsection
