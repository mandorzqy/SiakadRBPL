@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row mt-5 mb-5">
        <h1 class="text-center">Edit Nilai</h1>
    </div>
    <form action="{{url('dosen-nilai/'.$user->nrp)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="input-group form-floating mb-3">
        <input type="text" id="nrp" name="nrp" class="form-control" value="{{$user->nrp}}" placeholder="Enter name disabled">
        <label for="nrp" class="form-label">NRP</label>
    </div>
    <div class="input-group form-floating mb-3">
        <input type="number" id="id" name="id" class="form-control" value="{{$classroom->id}}" placeholder="Enter name disabled">
        <label for="nrp" class="form-label">ID</label>
    </div>
    <div class="input-group form-floating mb-3">
        <input type="text" id="nama" name="nama" class="form-control" value="{{$user->name}}" placeholder="Enter name" >
        <label for="nrp" class="form-label">Nama</label>
    </div>
    <div class="input-group form-floating mb-3">
        <input type="text" id="nama_mata_kuliah" name="nama_mata_kuliah" class="form-control" value="{{$score->classroom->course->nama_mata_kuliah}}" placeholder="Enter name" disabled>
        <label for="nrp" class="form-label">Nama Mata Kuliah</label>
    </div>
    <div class="input-group form-floating mb-3">
        <input type="text" id="nilai" name="nilai_angka" class="form-control" value="{{$score->nilai_angka}}" placeholder="Enter name">
        <label for="nrp" class="form-label">Nilai</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection