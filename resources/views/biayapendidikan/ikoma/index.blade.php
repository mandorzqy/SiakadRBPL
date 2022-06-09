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
        <h2>Data Historis Pembayaran IKOMA</h2>
          <h5></h5>
    </center>
</div>

@foreach($ikoma as $ik)
  <div class="container justify-content-center  ">
      <div class="row d-flex justify-content-center">
          <div class="col-7">
            <table class=" mt-2 table center table-bordered"  >
                <thead class="table-dark">
                  <tr>
                    <th>Tahun dan Semester</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $ik->periode }}</td>
                    <td>{{ $ik->tanggal }}</td>
                    <td>{{ $ik->total }}</td>
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
                        <td><div align="right">{{ $ik->tagihan1 }}</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN IKOMA</td>
                        <td><div align="right">{{ $ik->tagihan2 }}</div></td>
                    </tr>
                        <tr>
                        <tr>
                        <td >TAGIHAN IPITS</td>
                        <td><div align="right">{{ $ik->tagihan3 }}</div></td>
                    </tr>
                        <tr>
                        <td >TUNGGAKAN IPITS</td>
                        <td><div align="right">{{ $ik->tagihan4 }}</div></td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endforeach

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
