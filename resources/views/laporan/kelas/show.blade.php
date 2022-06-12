@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show w-25 mx-auto text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
</div>
@endif
    <div class="container">
        <div class="row mt-5 mb-5">
            <h1 class="text-center">Kelas</h1>
        </div>
        <div class="row d-flex justify-content-between mb-5">
            <div class="container col-md-5">
                <div class="card mx-auto">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Mata Kuliah</td>
                            <td>:</td>
                            <td>{{$classroom->course->nama_mata_kuliah}}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{$classroom->kelas}}</td>
                        </tr>
                        <tr>
                            <td>SKS</td>
                            <td>:</td>
                            <td>{{$classroom->course->sks}}</td>
                        </tr>
                        <tr>
                            <td>Kode Mata Kuliah</td>
                            <td>:</td>
                            <td>{{$classroom->course->kode_mk}}</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            @if (auth()->user()->type == 'dosen')
                            <th>Nilai</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->nrp}}</td>
                                <td>
                                    @if (auth()->user()->type == 'dosen')
                                    {{$user->score->where('classroom_id', $classroom->id)->first()->nilai_angka}}
                                    
                                </td>
                                <td>
                                    <a href="/dosen/{{$user->nrp}}/{{$classroom->id}}/edit">
                                        <i class="bi bi-pencil-fill text-dark"></i>
                                    </a>
                                </td>
                                @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection