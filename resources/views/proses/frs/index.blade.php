@extends('dashboard.layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>FRS</h1>
    <h5>Nama : {{$user->name}}</h5>
</div>



<table class="table align-items-center justify-content-center mb-0">
    
    <thead>
      <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Kuliah</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nilai</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>

        <th></th>
      </tr>
    </thead>
    <tbody>
    {{-- @if ($scores->count()) --}}
    @foreach ($scores as $score)
      <tr>
        <td>
          <div class="d-flex px-2">
            <div class="my-auto">
              <h6 class="mb-0 text-sm">{{ $score->course->nama_mata_kuliah}}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $score->nilai_angka }}</p>
        </td>
        <td>
            <p class="text-sm font-weight-bold mb-0">{{ $score->course->semester }}</p>
        </td>
        <td>
          <span class="text-xs font-weight-bold">{{ $score->nilai_huruf }}</span>
        </td>  
        {{-- <td>
            <a class="btn btn-info " href={{url('dosen/transkrip/'.$user->id.'/edit')}}>Update</a>
        </td> --}}
      </tr>
      @endforeach
      {{-- @endif --}}
    </tbody>
   
  </table>
@if ($user->status_frs == false)
<div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
    <strong>FRS belum disetujui</strong>  </div>
@else
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>FRS telah disetujui</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  
  
  @endsection