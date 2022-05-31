@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Transkrip</h1>
</div>

<table class="table align-items-center justify-content-center mb-0">
    <thead>
      <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Kuliah</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nilai Angka</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nilai Huruf</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @if ($score->count())
    @foreach ($score as $nilai)
      <tr>
        <td>
          <div class="d-flex px-2">
            <div class="my-auto">
              <h6 class="mb-0 text-sm">{{ $nilai->course->nama_mata_kuliah}}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $nilai->nilai_angka }}</p>
        </td>
        <td>
          <span class="text-xs font-weight-bold">{{ $nilai->nilai_huruf }}</span>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  @endsection