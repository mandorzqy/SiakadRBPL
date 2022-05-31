@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>

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
                            <input type="text" id="nama" name="nama" class="form-control" value="{{auth()->user->name}}" disabled>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{auth()->user->email}}" disabled>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{auth()->user->address}}" disabled>
                            <label for="email" class="form-label">Alamat</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{auth()->user->generation}}" disabled>
                            <label for="email" class="form-label">Angkatan</label>
                        </div>
                    </form>
                    </div>
                   
                    <div class="mt-4">
                        {{-- <a href="/dosen/biodata">
                            <button class="btn btn-warning">
                                <i class="bi bi-pencil-square fs-5"></i><span class="fs-5 ms-2">Kembali</span>
                            </button>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@endsection