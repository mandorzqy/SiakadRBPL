@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>

<div class="container">
    @if($students->count())
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->nrp}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
</div>
@endsection