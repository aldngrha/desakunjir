@extends('layouts.success')
@section('title')
Checkout Success
@endsection

@section('content')
<main>
  <section class="section-success-header">
    <section class="section-success-content d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/success.png') }}" alt="" height="200" width="250" class="ml-5 mb-5" />
        <h1>Hore! Sukses</h1>
        <p>
          Kami akan mengirimkan kamu email untuk informasi selanjutnya
          <br />
          tolong dibaca baik-baik
        </p>
        <a href="index.html" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </section>
  </section>
</main>
@endsection