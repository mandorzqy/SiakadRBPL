@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
    {{-- <h1 class="h2">Welcome back, {{auth()->user()->name}}</h1> --}}
    {{-- <div class="btn-toolbar mb-2 mb-md-0"> --}}
</div>

<div class="container">
    {{-- @if ($items->count())
    @foreach ($items as $item)
    <article class="container mb-5 border-bottom">
        <h2 ><a  href="/core/{{ $item->slug}}">{{ $item->namaBarang }}</a></h2>
        <p>Category : <a class="text-decoration-none" href="/category/{{ $item->category->slug }}">{{ $item->category->name }}</a></p>
        <p>Store : <a href="/stores/{{ $item->stores->username }}" class="text-decoration-none">{{ $item->stores->name }}</a></p>
        <h2>{{ $item->harga }}</h2>
        <h4>{{ $item->excerpt }}</h4>
    </article>
@endforeach
@endif --}}

    {{-- <h4>Nama: {{auth()->user()->name}}</h4>
    <h4>Email: {{auth()->user()->email}}</h4>
    <h4>Alamat: {{auth()->user()->address}}</h4>
    <h4>Angkatan: {{auth()->user()->generation}}</h4>
    <h4>Jurusan: {{auth()->user()->major->nama_jurusan}}</h4>
    <h4>Fakultas: {{auth()->user()->major->faculty->nama_fakultas}}</h4> --}}
    @if($students->count())
    @foreach ($students as $student)
        <article class="container mb-5 border-bottom">
                <p>Nama: {{$student->name}}</p>
                <p>NRP : {{$student->nrp}}</p>
        </article>
    @endforeach
    @endif
</div>
@endsection