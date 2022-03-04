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
                <a href="index.html" class="breadcrumb-item">
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
              <h1>Homestay Pantai Mahoni</h1>
              <p>Lampung Selatan</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom" id="xzoom-default"
                    xoriginal="{{ url('frontend/images/detail.jpg') }}" />
                </div>
                <div class="xzoom-thumbs">
                  <a href="{{ url('frontend/images/detail.jpg') }}">
                    <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom-gallery" width="128"
                      xpreview="{{ url('frontend/images/detail.jpg') }}" />
                  </a>
                  <a href="{{ url('frontend/images/detail.jpg') }}">
                    <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom-gallery" width="128"
                      xpreview="{{ url('frontend/images/detail.jpg') }}" />
                  </a>
                  <a href="{{ url('frontend/images/detail.jpg') }}">
                    <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom-gallery" width="128"
                      xpreview="{{ url('frontend/images/detail.jpg') }}" />
                  </a>
                  <a href="{{ url('frontend/images/detail.jpg') }}">
                    <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom-gallery" width="128"
                      xpreview="{{ url('frontend/images/detail.jpg') }}" />
                  </a>
                  <a href="{{ url('frontend/images/detail.jpg') }}">
                    <img src="{{ url('frontend/images/detail.jpg') }}" class="xzoom-gallery" width="128"
                      xpreview="{{ url('frontend/images/detail.jpg') }}" />
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Numquam, libero facere. Quidem, eligendi ipsum asperiores ex
                minima cum id modi tenetur assumenda, excepturi nihil
                tempora beatae aperiam sit ducimus suscipit.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Vitae, vel? Voluptatem sapiente, doloremque explicabo sit
                itaque ullam consectetur quas molestiae ipsam nulla et ex
                deleniti. Velit rerum nulla ab doloribus?
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <i class="fa fa-ticket fa-2x icon"></i>
                    <div class="description">
                      <h5>Hiburan</h5>
                      <p>Snorkling</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <i class="fa-solid fa-language fa-2x icon"></i>
                    <div class="description">
                      <h5>Bahasa</h5>
                      <p>Indonesia</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <i class="fa-solid fa-utensils fa-2x icon"></i>
                    <div class="description">
                      <h5>Makanan</h5>
                      <p>Request</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="description">
                    <i class="fa-solid fa-location-dot fa-2x icon ml-1"></i>
                    <div class="description">
                      <a href="">
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
                  <td width="50%" class="text-right">3 Malam</td>
                </tr>
                <tr>
                  <th width="50%">Harga</th>
                  <td width="50%" class="text-right">Rp200.000</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                Pesan Sekarang
              </a>
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