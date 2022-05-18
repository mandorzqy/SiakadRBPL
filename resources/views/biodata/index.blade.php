@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
    {{-- <h1 class="h2">Welcome back, {{auth()->user()->name}}</h1> --}}
    {{-- <div class="btn-toolbar mb-2 mb-md-0"> --}}
</div>
<div class="container">
    <h4>Nama: {{auth()->user()->name}}</h4>
    <h4>Email: {{auth()->user()->email}}</h4>
    <h4>Alamat: {{auth()->user()->address}}</h4>
    <h4>Angkatan: {{auth()->user()->generation}}</h4>
    <h4>Fakultas: {{auth()->user()->faculty}}</h4>
    <h4>Jurusan: {{auth()->user()->major}}</h4>
</div>
@endsection