@extends('layouts.main')

{{-- @section('container') --}}
<div class="row justify-content-center">
<div class="col-md-4">
  <main class="form-signin">
    <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
    <form action="/register" method="post">
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name')is-invalid @enderror"  id="name" placeholder="Masukkan Nama" autofocus required value='{{old('name')}}'>
        <label for="floatingInput">Name</label>
        @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>
      
      <div class="form-floating">
        <input type="text" name="nrp" class="form-control @error('nrp')is-invalid @enderror"  id="nrp" placeholder="Masukkan NRP" autofocus required value='{{old('nrp')}}'>
        <label for="floatingInput">NRP</label>
        @error('nrp')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"  id="email" placeholder="Masukkan Email" autofocus required value='{{old('email')}}'>
        <label for="floatingInput">Email</label>
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="address" class="form-control @error('email')is-invalid @enderror"  id="address" placeholder="Masukkan Alamat" autofocus required value='{{old('address')}}'>
        <label for="floatingInput">Address</label>
        @error('address')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="number" name="generation" class="form-control @error('generation')is-invalid @enderror"  id="address" placeholder="Masukkan Tahun Masuk" autofocus required value='{{old('generation')}}'>
        <label for="floatingInput">Generation</label>
        @error('generation')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="faculty" class="form-control @error('email')is-invalid @enderror"  id="faculty" placeholder="Masukkan Fakultas" autofocus required value='{{old('faculty')}}'>
        <label for="floatingInput">Faculty</label>
        @error('faculty')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="major" class="form-control @error('major')is-invalid @enderror"  id="address" placeholder="Masukkan Jurusan" autofocus required value='{{old('major')}}'>
        <label for="floatingInput">Major</label>
        @error('major')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror"  id="floatingPassword" placeholder="Password" autofocus required>
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>
</div>
</div>
{{-- @endsection --}}
