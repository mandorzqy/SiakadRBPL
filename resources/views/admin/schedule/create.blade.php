@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2"></div>
<h1>Create New Schedule</h1>
<div class="container">
    <form action="{{url('admin/schedule')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="major">Mata Kuliah</label>
            <select class="form-control" id="classroom_id" name="classroom_id">
                @foreach ($classes as $class)
                <option value="{{$class->id}}">{{$class->course->nama_mata_kuliah}} ({{$class->kelas}})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="form-control">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
            </select>
            {{-- <input type="text" class="form-control" id="hari" name="hari" placeholder="Enter NRP"> --}}
        </div>
        <div class="form-group">
            <label for="jam">jam</label>
            <input type="text" class="form-control" id="jam" name="jam" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
