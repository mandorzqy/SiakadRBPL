@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>FRS</h1>
    {{-- <h1 class="h2">Welcome back, {{auth()->user()->name}}</h1> --}}
    {{-- <div class="btn-toolbar mb-2 mb-md-0"> --}}
</div>
<div class="container">
    {{-- @if ($scores->count()) --}}
            @foreach ($score as $nilai)
            <article class="container mb-5 border-bottom">
                <p>Mata Kuliah : {{ $nilai->course->nama_mata_kuliah}}</a></p>
                <p>Nilai Angka : {{ $nilai->nilai_angka }}</a></p>
                <p>Nilai Huruf : {{ $nilai->nilai_huruf }}</a></p>
            </article>
        @endforeach
        {{-- @endif --}}
{{-- 
        <p>No items found</p> --}}
</div>
@endsection