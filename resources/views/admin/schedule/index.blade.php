@extends('dashboard.layouts.main')

@section('container')
<div class="container text-center">
    <div class="row">
        <div class="col-md-7 mx-auto">
 @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
        </div>
    </div>
</div>
   
    <div class="text-center mt-3">
        <h3>Jadwal Kuliah</h3>
        <h5>Nama: {{ auth()->user()->name }}</h5>
    </div>
    <div class="container justify-content-center ">

        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <a class="btn btn-info" href="{{ url('admin/schedule/create') }}">Buat Jadwal Baru</a>
                <div class="d-flex flex-col mx-3 col-3 mt-5 mb-3">
                </div>
                <table class="table center ">
                    <thead class="table ">
                        <tr>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Hari</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2"></th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->hari }}</td>
                                <td>{{ $schedule->jam }}</td>
                                <td>{{ $schedule->classrooms->course->nama_mata_kuliah }}</td>
                                <td>{{ $schedule->classrooms->course->kode_kelas }}</td>
                                {{-- <div class="row"> --}}
                                <td>
                                    <a class="btn btn-info" href={{ url('admin/schedule/' . $schedule->id . '/edit') }}><i
                                            class="bi bi-pencil-square"></i></a>
                                </td>
                                <td>

                                    <form action="{{ url('admin/schedule/' . $schedule->id) }}" method="POST"> 
                                        @csrf 
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger show_confirm" type="submit">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
            </div>
            {{-- </div> --}}
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
