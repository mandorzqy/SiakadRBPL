@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
<div class="col-md-4">
  <main class="form-signin">
    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
    <form action="/login" method="post">
      @csrf
      <div class="form-floating">
        <input type="text" name="nrp" class="form-control"  id="nrp" placeholder="Masukkan NRP" autofocus required>
        <label for="floatingInput">NRP</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" id="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>
</div>
</div>
@endsection
