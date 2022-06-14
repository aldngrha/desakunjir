@extends('layouts.login')
@section('title')
- Login
@endsection

@section('content')
<div class="card card-login mt-5">
  <form class="form-signin">
    <p class="text-center mr-5"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
    <p class="text-center title-login">Masuk untuk dapat memesan</p>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <div class="input-group" id="show_hide_password">
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="input-group-append">
        <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="checkbox mb-3 text-muted">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-login" type="submit">Masuk</button>
    <p class="text-muted">Belum punya akun? <a href="" class="register">Register</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; Desa Kunjir</p>
  </form>
</div>

@endsection