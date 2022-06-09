@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Edit Schedule</h1>
<div class="container">
    <form action="{{url('admin/schedule/'.$schedule->id)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="major">Mata Kuliah</label>
            <select class="form-control" id="course_id" name="course_id">
                @foreach ($courses as $course)
                <option value="{{$course->id}}">{{$course->nama_mata_kuliah}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="hari">hari</label>
            <input type="text" class="form-control" id="hari" name="hari" placeholder="Enter NRP">
        </div>
        <div class="form-group">
            <label for="jam">jam</label>
            <input type="text" class="form-control" id="jam" name="jam" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
