@extends('layouts.login')
@section('title')
Login
@endsection

@section('content')

<div class="card card-login mt-4">
  <form class="form-signin" method="POST" action="{{ route('login') }}">
    <p class="text-center"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
    <p class="text-center title-login">Masuk untuk dapat memesan</p>
    @csrf
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



    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''
        }}>

      <label class="form-check-label text-muted" for="remember">
        {{ __('Ingat Saya') }}
      </label>
    </div>

    <div class="mb-3">
      @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}" class="register">
        {{ __('Lupa Password?') }}
      </a>
      @endif
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block btn-login">
      {{ __('Login') }}
    </button>

    <p class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="register">Daftar</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; Desa Kunjir</p>
  </form>
</div>

@endsection