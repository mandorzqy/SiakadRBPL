@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>

<div class="container">
    @if($letters->count())
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th colspan="2">Action
            <th scope="col">Status</th>

        </thead>
        <tbody>
            @foreach ($letters as $letter)
          <tr>
            <div class="row"></div>
            <th scope="row">{{ $loop->iteration }}</th>

            <td>{{$letter->name}}</td>
            <td>{{$letter->nrp}}</td>
            <td>
                <form action="/admin/acc/surat/cuti/{{$letter->nrp}}" method="GET">
                    <button  type="submit"><i class="bi bi-hand-thumbs-up-fill"></i>
                    </button>
                </form>
            
            </td>
            <td>
                <form action="/admin/reject/surat/cuti/{{$letter->nrp}}" method="GET">
                <button  type="submit" class="bi bi-hand-thumbs-down-fill"></button></td>
            </form>
            <td>
                @if ($letter->status== 1)
                   <p>Disetujui</p>
                   @endif
                @if ($letter->status == 0)
                <p>Belum Disetujui</p>
                @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
</div>
@endsection
