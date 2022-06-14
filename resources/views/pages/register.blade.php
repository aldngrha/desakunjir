@extends('layouts.login')
@section('title')
- Register
@endsection

@section('content')
<div class="card card-login mt-5">
  <form class="form-signin">
    <p class="text-center mr-5"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
    <p class="text-center title-login">Daftar untuk dapat memesan</p>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="email" class="form-control" placeholder="Alamat email" required>
    <label for="inputPassword" class="sr-only">Kata sandi</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Kata sandi" required>
    <div class="checkbox mb-3 text-muted">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-login" type="submit">Daftar</button>
    <p class="text-muted">Sudah punya akun? <a href="" class="register">Login</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; Desa Kunjir</p>
  </form>
</div>

@endsection