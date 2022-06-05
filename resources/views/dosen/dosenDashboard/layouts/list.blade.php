@extends('dosen.dosenDashboard.layouts.main')

@section('container')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mahasiswa</th>
        <th scope="col">NRP</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
      <tr>
        <div class="row"></div>
        <th scope="row">{{$users->id}}</th>
        
        <td>{{$users->name}}</td>
        <td>{{$users->nrp}}</td>
        <td><a class="btn btn-info col" href={{url('dosen/transkrip/'.$users->id)}}>Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection 