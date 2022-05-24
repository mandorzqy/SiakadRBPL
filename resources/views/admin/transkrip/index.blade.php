@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Transkrip</h1>
</div>

<div class="container">
    @if($scores->count())
    @foreach ($scores as $score)
        <article class="container mb-5 border-bottom">
                <p>Nama: {{$score->user->name}}</p>
                <p>NRP : {{$score->user->nrp}}</p>
                <p>Matkul : {{$score->course->nama_mata_kuliah}}</p>
                <p>Nilai : {{$score->nilai_angka}}</p>
        </article>
    @endforeach
    @endif
</div>
@endsection