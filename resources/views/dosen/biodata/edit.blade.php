@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Edit Biodata</h1>
<div class="container">
    <form action="{{url('dosen/biodata/'.$biodata->id)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name',$biodata->name)}}">
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Enter NRP" value="{{old('nrp',$biodata->nrp)}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$biodata->email}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{$biodata->address}}">
        </div>
        <div class="form-group">
            <label for="generation">Generation</label>
            <input type="text" class="form-control" id="generation" name="generation" placeholder="Enter generation" value="{{$biodata->generation}}">
        </div>
        {{-- <div class="form-group">
            <label for="generation">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" value="{{$biodata->password}}">
        </div> --}}
        <div class="form-group">
            <label for="major">Major</label>
            <select class="form-control" id="major" name="major_id" >
                <option value="{{$biodata->major->id}}" selected  hidden>{{$biodata->major->nama_jurusan}}</option>
                @foreach ($majors as $major)
                <option value="{{$major->id}}">{{$major->nama_jurusan}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection