@extends('dashboard.layouts.main')

@section('container')

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
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->nrp}}</td>
                                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection