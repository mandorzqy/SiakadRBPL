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
    <h1>Kurikulum Semester</h1>
    {{-- <a class="btn btn-info" href="{{url('admin/biodata/create')}}">Create New course</a> --}}
      @if($courses->count())
      <div class="d-flex flex-col mx-6 col-3 mt-6 mb-3">
        <form class="form" method="get" action="{{route('search')}}">
          <select class="form-select " aria-label="Default select example" id="search" name="search" onchange="this.form.submit()">
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
        {{-- <input class="form-control mt-3" type="text" id='name' name='name' placeholder="Default input" aria-label="default input example">
        <div class="col-auto mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div> --}}
</form>

    </div>

      <table class="table" id="tabelkurikulum">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Kode MK</th>
              <th scope="col">SKS</th>
              <th scope="col">Semester</th>
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
              {{-- <div class="row"></div>
              <td>
                <div class="row col-6">
                  <a class="btn btn-info me-2 col" href={{url('admin/biodata/'.$course->id.'/edit')}}>Update</a>
                  <a class="btn btn-info col" href={{url('admin/biodata/'.$course->id)}}>Show</a>
                  <form class="col" action="{{url('admin/biodata/'.$course->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
              </td>
            </tr> --}}
            @endforeach
          </tbody>
        </table>
      @endif
  </div>

@endsection
