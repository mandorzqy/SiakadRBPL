@extends('dashboard.layouts.main')

@section('container')
<style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color: rgba(192,229,247,255);
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2;

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

<div class="container">
  <div class="row">
    <div class="col-10 text-center mx-auto">
      <h1>Kuesioner Dosen Perkuliahan</h1>
       <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Periode</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Genap</a></li>
        <li><a class="dropdown-item" href="#">Ganjil</a></li>
      </ul>
      <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Tahun</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">2022</a></li>
        <li><a class="dropdown-item" href="#">2021</a></li>
        <li><a class="dropdown-item" href="#">2020</a></li>
      </ul>
    <button type="button" class="btn btn-outline-secondary">Enter</button>
  </div>
      <div class=" flex-col mx-6 col-3 mt-6 mb-3 d-flex justify-content-center mx-auto">
        <form class="form " method="get" @if (auth()->user()->type=='admin')
            action='/adminsearch'
        @elseif (auth()->user()->type=='dosen')
            action='/dosensearch'
        @else
            action="/search"
        @endif>
        </form>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mx-auto">
    <div class="col-md-10 text-center d-flex justify-content-center">
      <div class="div"> <table class="table" id="tabelkurikulum">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Kode MK</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Dosen</th>
            <th scope="col">Status</th>
            @if (auth()->user()->type == 'admin')
            <th scope="col" colspan="2">Action</th>
            <th></th>
            @endif
          </tr>
        </thead>
        <tbody>
        @foreach ($courses as $courses)
          <tr>
            <div class="row"></div>
            <th scope="row">{{$no++}}</th>

            <td>{{$course->kode_mk}}</td>
            <td>{{$course->nama_mata_kuliah}}</td>
            <td>{{$lecturers->nama_dosen}}</td>
            <td>{{$course->semester}}</td>
            @if (auth()->user()->type == 'admin')
            <td>
              <span>
                 <a href="{{route('kurikulum.edit', $course->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>

              </span>
             <td> <form action="{{route('kurikulum.destroy', $course->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
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
