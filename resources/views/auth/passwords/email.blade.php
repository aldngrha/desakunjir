@extends('layouts.login')
@section('title')
Reset Password
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card card-reset mt-5">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                <p class="text-center"><a class="navbar-brand" href="#"> desa<span>kunjir</span> </a></p>
                <p class="text-center text-primary">Reset Password</p>
                @csrf

                <div class="mb-3">
                    <label for="email" class="sr-only">{{ __('Email Address')
                        }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Alamat Email" required autocomplete="email"
                        autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-0">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        {{ __('Kirim Reset Password Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection