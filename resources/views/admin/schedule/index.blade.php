@extends('dashboard.layouts.main')

@section('container')
    <div class="text-center mt-3">
        <h3>Jadwal Kuliah</h3>
        <h5>Nama: {{ auth()->user()->name }}</h5>
    </div>
    <div class="container justify-content-center ">
        <a class="btn btn-info" href="{{ url('admin/schedule/create') }}">Create New Student</a>
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <div class="d-flex flex-col mx-3 col-3 mt-5 mb-3">
                </div>
                <table class="table center table-bordered">
                    <thead class="table-dark ">
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
                                <td>{{ $schedule->course->nama_mata_kuliah }}</td>
                                <td>{{ $schedule->course->kode_kelas }}</td>
                                {{-- <div class="row"> --}}
                                <td>
                                    <a class="btn btn-info" href={{ url('admin/schedule/' . $schedule->id . '/edit') }}><i
                                            class="bi bi-pencil-square"></i></a>
                                </td>
                                <td>
                                    <form action="{{ url('admin/schedule/' . $schedule->id) }}" method="POST" @csrf <input
                                        type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit">
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
