@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Create New Student</h1>
<div class="container">
    <form action="{{url('admin/biodata')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter NRP">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
        </div>
        <div class="form-group">
            <label for="generation">Generation</label>
            <input type="text" class="form-control" id="generation" name="generation" placeholder="Enter generation">
        </div>
        <div class="form-group">
            <label for="major">Major</label>
            <select class="form-control" id="major" name="major_id">
                @foreach ($majors as $major)
                <option value="{{$major->id}}">{{$major->nama_jurusan}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection