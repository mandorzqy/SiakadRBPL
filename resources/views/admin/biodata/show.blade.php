@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
    <h4>Nama: {{$student->name}}</h4>
    <h4>Email: {{$student->email}}</h4>
    <h4>Alamat: {{$student->address}}</h4>
    <h4>Angkatan: {{$student->generation}}</h4>
     {{-- <h4>Jurusan: {{$student->major->nama_jurusan}}</h4>
    <h4>Fakultas: {{$student->major->faculty->nama_fakultas}}</h4> --}}
</div>

@endsection