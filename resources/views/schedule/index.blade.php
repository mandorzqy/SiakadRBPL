@extends('dashboard.layouts.main')

@section('container')
<h3>Jadwal Kuliah</h3>
<h5>Nama: {{auth()->user()->name}}</h5>
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
  {{-- <input class="form-control mt-3" type="text" id='name' name='name' placeholder="Default input" aria-label="default input example">
  <div class="col-auto mt-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div> --}}
</form>

</div>
<table class="table align-items-center justify-content-center mb-0">
    {{-- <p>{{$schedules}}</p> --}}
    <thead>
      <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hari</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jam</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($schedules as $schedule)
      <tr>
        <td>{{$schedule->hari}}</td>
        <td>{{$schedule->jam}}</td>
        <td>{{$schedule->course->nama_mata_kuliah}}</td>
        <td>{{$schedule->course->kode_kelas}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
