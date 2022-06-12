@extends('dashboard.layouts.main')

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
        @foreach ($users as $user)
      <tr>
        <div class="row"></div>
        <td>{{ $loop->iteration }}</td>
        
        <td>{{$user->name}}</td>
        <td>{{$user->nrp}}</td>
        <td><a class="btn btn-info col" href={{url('dosen/frs/'.$user->nrp)}}>Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection 