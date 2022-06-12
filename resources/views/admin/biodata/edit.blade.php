@extends('dashboard.layouts.main')

@section('container')
<div class="container">
 <div class="row mb-4 ">
        <h2 class="fw-bold text-center mt-5">Edit Mahasiswa</h2>
    </div>
    <div class="row mb-4 d-flex justify-content-center mx-auto">
        <div class=" text-center">
            <div class="d-flex align-items-center justify-content-center">
                 <form class="col-lg-5  justify-content-center"  @if (auth()->user()->type=="mahasiswa") action="{{url('mahasiswa/biodata/'.auth()->user()->id)}}"
                @else action="{{url('admin/biodata/'.auth()->user()->id)}}" @endif method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="input-group form-floating mb-3">
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name',$biodata->name)}}" placeholder="Enter name">
                    <label for="name" class="form-label">name</label>
                </div>
                <div class="input-group form-floating mb-3">
                    <input type="text" id="nrp" name="nrp" class="form-control" placeholder="Enter NRP" value="{{old('nrp',$biodata->nrp)}}">
                    <label for="nrp" class="form-label">NRP</label>

                </div>
                <div class="input-group form-floating mb-3">
                    <input type="email" id="email" name="email" class="form-control"  placeholder="Enter email" value="{{$biodata->email}}">
                    <label for="email" class="form-label">email</label>

                </div>
                <div class="input-group form-floating mb-3">
                    <input type="text" id="address" name="address" class="form-control" value="{{$biodata->address}}">
                    <label for="address" class="form-label">Address</label>
                </div>
                <div class="input-group form-floating mb-3">
                    <input type="number" id="generation" name="generation" placeholder="Enter generation" value="{{$biodata->generation}}" class="form-control" >
                    <label for="generation" class="form-label">Generation</label>
                </div>
                <div class="form-group form-floating mb-3">
                <select class="form-control" id="major" name="major_id" >
                        <option value="{{$biodata->major->id}}" selected  hidden>{{$biodata->major->nama_jurusan}}</option>
                        @foreach ($majors as $major)
                        <option value="{{$major->id}}">{{$major->nama_jurusan}}</option>
                        @endforeach
                </select>
                <label for="major">Major</label>
        </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>

            <div class="mt-4">
            </div>

        </div>

    </div>
</div>


{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Edit Student</h1>
<div class="container">
    <form action="{{url('admin/biodata/'.$biodata->id)}}" method="POST" enctype="multipart/form-data">
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
    </form> --}}

@endsection

     {{-- <div class="form-group">
            <label for="generation">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" value="{{$biodata->password}}">
        </div> --}}
