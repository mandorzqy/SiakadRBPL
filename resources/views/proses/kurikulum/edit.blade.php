@extends('dashboard.layouts.main')

@section('container')

<div class="container">

    <div class="row mb-4 ">
        <h2 class="fw-bold text-center mt-5">Edit Mata Kuliah</h2>
    </div>
    <div class="row mb-4 d-flex justify-content-center mx-auto">
        <div class=" text-center">
            <div class="d-flex align-items-center justify-content-center">
                 <form class="col-lg-5  justify-content-center" action="{{url('admin-kurikulum/'.$course->id)}}" method="POST" >
                @csrf
                @method('put')
                <div class="input-group form-floating mb-3">
                    <input type="text" id="nama_mata_kuliah" name="nama_mata_kuliah" class="form-control" value="{{old('nama_mata_kuliah',$course->nama_mata_kuliah)}}">
                    <label for="nama_mata_kuliah" class="form-label">Nama Mata Kuliah</label>
                </div>
                <div class="input-group form-floating mb-3">
                    <input type="text" id="kode_mk" name="kode_mk" class="form-control" value="{{old('kode_mk',$course->kode_mk)}}">
                    <label for="kode_mk" class="form-label">Kode MK</label>

                </div>
                <div class="input-group form-floating mb-3">
                    <input type="number" id="sks" name="sks" class="form-control" value="{{old('kode_mk',$course->sks)}}">
                    <label for="sks" class="form-label">SKS</label>

                </div>
                <div class="input-group form-floating mb-3">
                    <input type="text" id="kode_kelas" name="kode_kelas" class="form-control" value="{{old('kode_kelas',$course->kode_kelas)}}">
                    <label for="kode_kelas" class="form-label">Kode Kelas</label>
                        </div>
                <div class="input-group form-floating mb-3">
                    <input type="number" id="semester" name="semester" class="form-control" value="{{old('semester',$course->semester)}}">
                    <label for="semester" class="form-label">Semester</label>
                </div>
                <div class="input-group form-floating mb-3">
                    <input type="number" id="tahunKurikulum" name="tahunKurikulum" class="form-control" value="{{old('tahunKurikulum',$course->tahunKurikulum)}}">
                    <label for="tahunKurikulum" class="form-label">Tahun Kurikulum</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>

            <div class="mt-4">
            </div>

        </div>

    </div>
</div>

@endsection

  {{-- <a href="/dosen/biodata">
                    <button class="btn btn-warning">
                        <i class="bi bi-pencil-square fs-5"></i><span class="fs-5 ms-2">Kembali</span>
                    </button>
                </a> --}}
