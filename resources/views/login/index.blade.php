@extends('layouts.main')


<div class="row justify-content-center">
<div class="col-md-4">
  {{-- apakah session mempunyai key succes, jika ada, tampilkan alert(dari register controller)--}}
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session('loginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <main class="form-signin my-5 py-5">
    <h1 class="h3 mb-3 fw-normal text-center">LOGIN SIAKAD</h1>
    <form action="/login" method="post">
      @csrf
      <div class="form-floating">
        <input type="text" name="nrp" class="form-control @error('nrp')is-invalid @enderror"  id="nrp" placeholder="Masukkan NRP" autofocus required>
        <label for="nrp">NRP</label>
        @error('nrp')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" autofocus required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>
</div>
</div>
