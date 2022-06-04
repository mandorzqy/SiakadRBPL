@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
    {{-- <a class="btn btn-info" href="{{url('admin/biodata/create')}}">Create New course</a> --}}
      @if($courses->count())
      <div class="d-flex flex-col mx-3 col-3 mt-5 mb-3">
        <form class="form" method="get" action="{{route('search')}}">
          <select class="form-select " aria-label="Default select example" id="search" name="search" onchange="this.form.submit()">
            <option selected>Semester</option>
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
        
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
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