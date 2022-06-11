@extends('dashboard.layouts.main')

@section('container')
<style>
    h1{
        margin-top: 15px;
    }
    .table{
    /* background-color: rgba(192,229,247,255); */
    /* border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2; */

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    display: inline-block;
    position: relative;
    border-collapse: collapse;
}

</style>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-10 text-center mx-auto">
      <h1>Kurikulum Semester</h1>
      @if (auth()->user()->type == 'admin')
      <a class="btn btn-info mb-3" href="{{url('admin-kurikulum/create')}}">Tambah Mata Kuliah</a>
      @endif
      @if($courses->count())
      <div class=" flex-col mx-6 col-3 mt-6 mb-3 d-flex justify-content-center mx-auto">
        <form class="form " method="get" @if (auth()->user()->type=='admin')
            action='/adminsearch'
        @elseif (auth()->user()->type=='dosen')
            action='/dosensearch'
        @else
            action="/search"
        @endif>
          <select class="form-select mb-2" aria-label="Default select example" id="search" name="search" onchange="this.form.submit()">
            <option selected>Pilih Semester</option>
            <option value='all'>Semua</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        </form>
      </div>
      @endif
    </div>
  </div>
  <div class="row justify-content-center mx-auto">
    <div class="col-md-10 text-center d-flex justify-content-center">
      <div class="div"> <table class="table" id="tabelkurikulum">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Kode MK</th>
            <th scope="col">SKS</th>
            <th scope="col">Semester</th>
            @if (auth()->user()->type == 'admin')
            <th scope="col" colspan="2">Action</th>
            <th></th>
            @endif
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
          <tr>
            <div class="row"></div>
            <th scope="row">{{$no++}}</th>
            <td>{{$course->nama_mata_kuliah}}</td>
            <td>{{$course->kode_mk}}</td>
            <td>{{$course->sks}}</td>
            <td>{{$course->semester}}</td>
            @if (auth()->user()->type == 'admin')
            <td>
              <span>
                 <a href="{{route('admin-kurikulum.edit', $course->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

              </span>
             <td> <form action="{{route('admin-kurikulum.destroy', $course->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger show_confirm"><i class="bi bi-trash3"></i></button>
            </form></td>
            </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table></div>

    </div>
  </div>
</div>

@endsection
