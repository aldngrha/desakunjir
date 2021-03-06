@extends('layouts.checkout')
@section('title')
Checkout
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
                <a href="{{ route('paket-wisata') }}" class="breadcrumb-item">
                  <li>Paket Wisata</li>
                </a>
                <a href="{{ route('detail', $item->travel_package->slug) }}" class="breadcrumb-item">Details</a>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <h1>Homestay Booking</h1>
              <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>
              <h5 class="mt-3 mb-3">Informasi Pemesan</h5>
              <form method="POST" action="{{ route('checkout-create', $item->id) }}">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Lengkap</label>
                  <input type="text" class="form-control" required placeholder="Nama lengkap"
                    value="{{ Auth::user()->name }}" />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input type="email" class="form-control" required placeholder="Alamat email"
                    value="{{ Auth::user()->email }}" />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Hp</label>
                  <input type="text" class="form-control" required placeholder="Nomor handphone atau whatsapp"
                    value="{{ Auth::user()->whatsapp_number }}" />
                </div>
                <h5 class="mt-3 mb-3">Transfer</h5>
                <p class="tf">
                  Kirim bukti transfer ke
                  <a href="{{ $item->travel_package->whatsapp_number }}" class="whatsapp">Whatsapp
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </p>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout Informasi</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Durasi</th>
                  <td width="50%" class="text-right">{{ $item->travel_package->duration }}</td>
                </tr>
                <tr>
                  <th width="50%">Harga</th>
                  <td width="50%" class="text-right">{{ number_format($item->travel_package->price,0,".",".") }}</td>
                </tr>
                <tr>
                  <th width="50%">Pajak</th>
                  <td width="50%" class="text-right">5% (Rp. {{
                    number_format($item->travel_package->price * 5 / 100,0,".",".")}})</td>
                </tr>
                <tr>
                  <th width="50%">Total Bayar</th>
                  <td width="50%" class="text-right total">Rp. {{
                    number_format(($item->travel_package->price * 5) / 100 + ($item->travel_package->price),0,".",".")
                    }}</td>
                </tr>
              </table>
              <hr />
              <h2>Instruksi Pembayaran</h2>
              <p class="payment-instructions">
                Selesaikan pembayaran kamu dengan transfer ke rekening
                dibawah ini
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <i class="fa fa-wallet fa-2x bank-image"></i>
                  <div class="description">
                    <h3>{{ $item->travel_package->owner_name }}</h3>
                    <p>
                      {{ $item->travel_package->account_number }}
                      <br />
                      {{ $item->travel_package->bank }}
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                Saya sudah melakukan pembayaran
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">Batalkan pesanan</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</main>
@endsection