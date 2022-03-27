@extends('layouts.login')
@section('title')
Verifikasi Email
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('link verifikasi sudah dikirim ke email kamu.') }}
                    </div>
                    @endif

                    {{ __('Sebelum melanjutkan pemesanan, silakan cek email kamu untuk verifikasi.') }}
                    {{ __('Jika kamu tidak menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik ini untuk meminta
                            link baru') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection