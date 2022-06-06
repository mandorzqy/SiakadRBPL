@extends('dashboard.layouts.main')

@section('container')

<style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color:white;
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
<center>
<h2>Data Historis Pembayaran Mahasiswa</h2>
  <h5></h5>
  </center>

  <table class="table" align="center">
    <thead class="table-dark">
      <tr>
        <th>Tahun dan Semester</th>
        <th>Tanggal Bayar</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Genap 2022</td>
        <td>22-01-2022</td>
        <td>10000000</td>
      </tr>
    </tbody>
  </table>
						<table width="600" border="0" align="center" cellpadding="4" cellspacing="4"><tr class="tr2" ><td width="500" ><div align="left">
                            <strong>Jenis Pembayaran</strong></div></td><td width="100" ><div align="center"><strong>Amount </strong></div></td></tr>					<tr>
						<td width="100">TAGIHAN UKT</td>
						<td><div align="right">10000000</div></td>
					</tr>
						<tr>
						<td width="100">TAGIHAN PELAYARAN</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN PELAYARAN</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TAGIHAN SPI</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TAGIHAN IPITS</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TAGIHAN KPENYEGARAN</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN SPP</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN SPI</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN IPITS</td>
						<td><div align="right">0</div></td>
					</tr>
						<tr>
						<td width="100">TUNGGAKAN KPENYEGARAN</td>
						<td><div align="right">0</div></td>
					</tr>
</div>
@endsection
