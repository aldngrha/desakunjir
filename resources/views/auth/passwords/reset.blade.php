@extends('layouts.login')
@section('title')
Reset Password
@endsection

@section('content')
<div class="card card-reset mt-5">
    <form class="form-signin" method="POST" action="{{ route('password.update') }}">
        <p class="text-center"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
        <p class="text-center title-login">Ubah Kata Sandi</p>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
            <label for="email" class="sr-only">{{ __('Email Address')}}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" placeholder="Alamat email" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="sr-only">{{ __('Password')
                }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Kata Sandi" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password-confirm" class="sr-only">{{ __('Confirm
                Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                placeholder="Konfismasi Kata Sandi" required autocomplete="new-password">

        </div>

        <div class="mb-0">
            <button type="submit" class="btn btn-primary btn-block btn-login">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection