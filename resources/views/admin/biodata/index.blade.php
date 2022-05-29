@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>

<div class="container">
  <a class="btn btn-info" href="{{url('admin/biodata/create')}}">Create New Student</a>
    @if($students->count())
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            <div class="row"></div>
            <th scope="row">{{$student->id}}</th>
            
            <td>{{$student->name}}</td>
            <td>{{$student->nrp}}</td>
            <div class="row"></div>
            <td>
              <div class="row col-6">
                <a class="btn btn-info me-2 col" href={{url('admin/biodata/'.$student->id.'/edit')}}>Update</a>
                <a class="btn btn-info col" href={{url('admin/biodata/'.$student->id)}}>Show</a>
                <form class="col" action="{{url('admin/biodata/'.$student->id)}}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
</div>
@endsection