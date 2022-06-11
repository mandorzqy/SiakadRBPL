@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Edit Nilai</h1>
<div class="container">
    <form action="{{url('dosen/transkrip/'.$score->id)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name',$user->name)}}" disabled>
        </div>
        <div class="form-group">
            <label for="nrp">Nilai Angka</label>
            <input type="text" class="form-control" id="nilai_angka" name="nilai_angka" placeholder="Enter Score" value="{{old('nilai_angka',$score->nilai_angka)}}">
        </div>
    <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
    
@endsection