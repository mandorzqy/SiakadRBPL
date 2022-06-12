@extends('dashboard.layouts.main')

@section('container')
<div class=" text-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="">Transkrip</h1>
</div>
<div class="card mt-5 mb-3 mx-auto w-25 container">
  <div class="card-body mx-auto ">
      <div class="row">
              <br>
              <div class="col">
                 <table class="table table-borderless">
                  <tbody>
                      <tr>
                          <td>Nama</td>
                          <td>:</td>
                          <td>{{$user->name}}</td>
                      </tr>
                      <tr>
                          <td>NRP</td>
                          <td>:</td>
                          <td>{{$user->nrp}}</td>
                      </tr>
                      <tr>
                        <td>Total SKS</td>
                        <td>:</td>
                        <td>{{$sks}}</td>
                    </tr>
                    <tr>
                        <td>IPK</td>
                        <td>:</td>
                        <td>{{$ipk}}</td>
                  </tbody>
              </table>
              </div>
      </div>
  </div>
</div> 
<div class="row d-flex justify-content-center">
  <div class="col-md-5">
    <table class="table align-items-center justify-content-center mb-0">
    <thead>
      <tr class="text-center">
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Kuliah</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nilai</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @if ($score->count())
    @foreach ($score as $nilai)
      <tr class="text-center">
        <td>
          <div class="d-flex px-2">
            <div class="my-auto">
              <h6 class="mb-0 text-sm">{{ $nilai->classroom->course->nama_mata_kuliah}}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $nilai->classroom->kelas }}</p>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $nilai->semester }}</p>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $nilai->nilai_angka }}</p>
        </td>
        <td>   
            <a class="btn  " href={{url('dosen/transkrip/'.$user->id.'/edit')}}><i class="bi bi-pencil-square"></i></a>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
   
  </table>
  </div>
</div>

  
  @endsection