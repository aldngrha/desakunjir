@extends('layouts.detail')

@section('title')
Details
@endsection

@section('content')
<main>
  <section class="section-details">
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <a href="{{ route('home') }}" class="breadcrumb-item">
                  <li>Home</li>
                </a>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>{{ $item->title }}</h1>
              <p>{{ $item->location }}</p>
              @if ($item->galleries->count())
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default"
                    xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
                </div>
                <div class="xzoom-thumbs">
                  @foreach ($item->galleries as $gallery)
                  <a href="{{ Storage::url($gallery->image) }}">
                    <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128"
                      xpreview="{{ Storage::url($gallery->image) }}" />
                  </a>
                  @endforeach
                </div>
              </div>
              @endif
              <h2>Tentang Wisata</h2>
              <p>
                {!! $item->about !!}
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <i class="fa fa-ticket fa-2x icon"></i>
                    <div class="description">
                      <h5>Hiburan</h5>
                      <p>{{ $item->hiburan }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <i class="fa-solid fa-language fa-2x icon"></i>
                    <div class="description">
                      <h5>Bahasa</h5>
                      <p>{{ $item->language }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <i class="fa-solid fa-utensils fa-2x icon"></i>
                    <div class="description">
                      <h5>Makanan</h5>
                      <p>{{ $item->foods }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="description">
                    <i class="fa-solid fa-location-dot fa-2x icon ml-1"></i>
                    <div class="description">
                      <a href="{{ $item->map }}">
                        <h5 class="location">Cari Lokasi</h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Trip Informasi</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Durasi</th>
                  <td width="50%" class="text-right">{{ $item->duration }}</td>
                </tr>
                <tr>
                  <th width="50%">Harga</th>
                  <td width="50%" class="text-right">Rp {{ number_format($item->price,0,".",".") }}</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              @auth
              <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                @csrf
                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                  Pesan Sekarang
                </button>
              </form>
              @endauth
              @guest
              <a href="{{ route('register') }}" class="btn btn-block btn-join-now mt-3 py-2">
                Masuk atau daftar untuk memesan
              </a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function () {
                $(".xzoom, .xzoom-gallery").xzoom({
                    zoomWidth: 500,
                    title: false,
                    tint: "#333",
                    xOffset: 15,
                });
            });
</script>
@endpush