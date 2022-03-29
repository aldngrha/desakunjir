@extends('layouts.login')
@section('title')
Register
@endsection

@section('content')

<div class="card card-login">
  <form class="form-signin" method="POST" action="{{ route('register') }}">
    <p class="text-center"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
    <p class="text-center title-login">Daftar untuk dapat memesan</p>
    @csrf
    <div class="mb-3">
      <label for="name" class="sr-only">{{ __('Name') }}</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="username" class="sr-only">{{ __('Username') }}</label>
      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"
        value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>

      @error('username')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="email" class="sr-only">{{ __('Email Address')
        }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" placeholder="Alamat email" required autocomplete="email" autofocus>

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="sr-only">{{ __('Password')
        }}</label>

      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
        placeholder="Kata Sandi" required autocomplete="current-password">

      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password-confirm" class="sr-only">{{ __('Ulangi kata sandi') }}</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
        autocomplete="new-password" placeholder="Ulangi kata sandi">
    </div>

    <div class="mb-3">
      <label for="whatsapp_number" class="sr-only">{{ __('Nomor Handphone') }}</label>
      <input id="whatsapp_number" type="text" class="form-control @error('whatsapp_number') is-invalid @enderror"
        name="whatsapp_number" value="{{ old('whatsapp_number') }}" placeholder="Nomor Handphone" required
        autocomplete="whatsapp_number" autofocus>

      @error('username')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <button type="submit" class="btn btn-lg btn-primary btn-block btn-login">
      {{ __('Daftar') }}
    </button>

    <p class="text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="register">Masuk</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; Desa Kunjir</p>
  </form>
</div>

@endsection