@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10 text-center mx-auto">
            <h1>Transkrip Mata Kuliah</h1>
            <br>
            <h5>Nama    :
                {{$user->name}}
            </h5>
            <h5>NRP    :
                {{$user->nrp}}
            </h5>
            <h5>SKS Tempuh    :
                {{$user->sks_tempuh}}
            </h5>
            <strong><h5>SKS Lulus   :
                {{$user->sks_lulus}}
            </h5></strong>
            <h5>Status   :
                {{$user->status}}
            </h5>
        </div>
    </div>
</div>
@endsection
