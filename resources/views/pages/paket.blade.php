@extends('layouts.app')
@section('title')
Paket Wisata
@endsection
@section('content')
<main>
  <section class="section-paket-wisata">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <a href="{{ route('home') }}" class="breadcrumb-item">
                <li>Home</li>
              </a>
              <li class="breadcrumb-item active">Paket Wisata</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="paket-wisata row">
        @foreach ($items as $item)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel-right d-flex flex-column"
            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')">
            <div class="travel-country">{{ $item->title }}</div>
            <div class="travel-location">Rp {{ number_format($item->price,0,".",".") }}</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                Lihat Paket
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
@endsection