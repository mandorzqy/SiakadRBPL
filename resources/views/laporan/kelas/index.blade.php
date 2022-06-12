@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row mt-5 mb-5">
            <h1 class="text-center">Kelas</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jumlah Mahasiswa</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classrooms as $classroom)
                        <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$classroom->course->nama_mata_kuliah}}</td>
                                <td>{{$classroom->kelas}}</td>
                                <td>{{$classroom->user->count()}}</td>
                                <td>{{$classroom->kapasitas}}</td>
                                @if (auth()->user()->type == 'dosen')
                                <td><a href="/dosen-kelas/{{$classroom->id}}"><i class="bi bi-eye"></i></a></td>
                                @endif
                                @if (auth()->user()->type == 'dosen')
                                <td><a href="/kelas/{{$classroom->id}}"><i class="bi bi-eye"></i></a></td>
                                @endif
                                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection