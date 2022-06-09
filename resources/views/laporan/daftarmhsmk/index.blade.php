@extends('dashboard.layouts.main')

@section('container')
<style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color: white;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2;

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    display: inline-block;
    position: relative;
    border-collapse: collapse;
}

</style>


<div class="container">
    <div class="row">
        <div class="col-10 text-center mx-auto">
            <h1>Daftar Mahasiswa dan Mata Kuliah</h1>
            <br>
            <h5>Nama :
                {{-- {{$user->name}} --}}
            </h5>
            <h5>NRP  :
                {{-- {{$user->nrp}} --}}
            </h5>
        </div>
    </div>
    <br>
    <div class="row d-flex justify-content-center text-center">
        <div class="col-4">
          <table class="table align-items-center justify-content-center mb-0">

            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NRP</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Mahasiswa</th>
              </tr>
            </thead>
            <tbody>
            {{-- @if ($scores->count()) --}}
            {{-- @foreach ($user->classrooms as $classroom) --}}
              <tr>
                <td>
                    <div class="mx-5">
                        <p class="text-sm font-weight-bold mb-0">
                            6026201010
                            {{-- {{ $classroom->course->semester }} --}}
                        </p>
                    </div>
                </td>
                <td>
                  <div class="d-flex px-2">
                    <div class="mx-5">
                      <h6 class="mb-0 text-sm">
                          Habsi
                          {{-- {{$classroom->course->nama_mata_kuliah}} --}}
                        </h6>
                    </div>
                  </div>
                </td>
                {{-- <td>
                    <a class="btn btn-info " href={{url('dosen/transkrip/'.$user->id.'/edit')}}>Update</a>
                </td> --}}
              </tr>
              {{-- @endforeach --}}
              {{-- @endif --}}
            </tbody>

          </table>
        </div>
    </div>


</div>
@endsection
