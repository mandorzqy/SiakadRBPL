@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>
<div class="container">
    <h4>Nama: {{auth()->user()->name}}</h4>
    <h4>Email: {{auth()->user()->email}}</h4>
    <h4>Alamat: {{auth()->user()->address}}</h4>
    <h4>Angkatan: {{auth()->user()->generation}}</h4>
    <h4>Jurusan: {{auth()->user()->major->nama_jurusan}}</h4>
    <h4>Fakultas: {{auth()->user()->major->faculty->nama_fakultas}}</h4>
</div>
@endsection
