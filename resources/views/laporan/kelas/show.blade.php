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