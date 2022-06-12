@extends('dashboard.layouts.main')

@section('container')
    <div class="text-center mt-3">
        <h3>Jadwal Kuliah</h3>
        <h5>Nama: {{auth()->user()->name}}</h5>
    </div>
<div class="container justify-content-center ">

    <div class="row d-flex justify-content-center">
        <div class="col-7">
            <div class="d-flex flex-col mx-3 col-3 mt-5 mb-3">
                <form class="form" method="get" action="{{route('hari')}}">
                  <select class="form-select " aria-label="Default select example" id="hari" name="hari" onchange="this.form.submit()">
                    <option selected>Hari</option>
                    <option value='all'>Semua</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                </select>
              </form>
              </div>
          <table class="table center table-bordered"  >
              <thead class="table-dark ">
                <tr>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Hari</th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>

                  </tr>
              </thead>
              <tbody>
                @foreach ($schedules as $schedule)
      <tr >
        <td>{{$schedule->hari}}</td>
        <td>{{$schedule->jam}}</td>
        <td>{{$schedule->classrooms->course->nama_mata_kuliah}}</td>
        <td class="text-center">{{$schedule->classrooms->kelas}}</td>
        <td class="text-center">{{$schedule->classrooms->course->kode_kelas}}</td>
      </tr>
      @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>








@endsection
