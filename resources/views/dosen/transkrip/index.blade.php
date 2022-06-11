@extends('dashboard.layouts.main')

@section('container')
<div class="text-center">
    <h1>Transkrip</h1>
</div>

{{-- <div class="container">
    @if($scores->count())
    @foreach ($scores as $score)
        <article class="container mb-5 border-bottom">
                <p>Nama: {{$score->user->name}}</p>
                <p>NRP : {{$score->user->nrp}}</p>
                <p>Matkul : {{$score->course->nama_mata_kuliah}}</p>
                <p>Nilai : {{$score->nilai_angka}}</p>
        </article>
    @endforeach
    @endif
</div> --}}
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
       <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mahasiswa</th>
        <th scope="col">NRP</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
      <tr>
        <div class="row"></div>
        <th scope="row">{{$loop->iteration}}</th>
        
        <td>{{$users->name}}</td>
        <td>{{$users->nrp}}</td>
        <td><a class="btn col" href={{url('dosen/transkrip/'.$users->id)}}><i class="bi bi-eye-fill"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
  </div>
 
</div>

@endsection