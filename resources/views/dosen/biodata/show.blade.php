@extends('dashboard.layouts.main')

@section('container')
<div class="container justify-content-center">
    {{-- Content --}}
    <main>

        <div class="content">

            <div class="row mb-4">
                <h2 class="fw-bold text-center mt-5">Biodata</h2>
            </div>
            <div class="row mb-4">
                <div class=" text-center">
                    <div class="d-flex align-items-center justify-content-center">
                         <form class="col-lg-5  justify-content-center ">
                        @csrf
                        <div class="input-group form-floating mb-3">
                            <input type="number" id="NIK" name="NIK" class="form-control" value="{{$student->nrp}}" disabled>
                            <label for="NIK" class="form-label">NIK</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control" value="{{$student->name}}" disabled>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{$student->email}}" disabled>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{$student->address}}" disabled>
                            <label for="email" class="form-label">Alamat</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{$student->generation}}" disabled>
                            <label for="email" class="form-label">Angkatan</label>
                        </div>
                    </form>
                    </div>
                   
                    <div class="mt-4">
                        <a href="/admin/biodata">
                            <button class="btn btn-warning">
                                <i class="bi bi-pencil-square fs-5"></i><span class="fs-5 ms-2">Kembali</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

    {{-- <h4>Nama: {{$student->name}}</h4>
    <h4>Email: {{$student->email}}</h4>
    <h4>Alamat: {{$student->address}}</h4>
    <h4>Angkatan: {{$student->generation}}</h4> --}}
     {{-- <h4>Jurusan: {{$student->major->nama_jurusan}}</h4>
    <h4>Fakultas: {{$student->major->faculty->nama_fakultas}}</h4> --}}
</div>

@endsection