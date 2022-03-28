@extends('layouts.app')

@section('content')
<header class="text-center">
    <h1>
        Nikmati Wisata Yang Indah Dan Tempat Istirahat <br />
        Yang Nyaman Hanya Dengan Sekali Klik
    </h1>
    <p class="mt-3">
        Kamu akan melihat keindahan <br />
        yang belum pernah dilihat sebelumnya
    </p>
    <a href="{{ route('register') }}" class="btn btn-start px-4 mt-4"> Start Now </a>
</header>
<!-- End Header -->

<main>
    <!-- Wisata Favorit -->
    <section class="section-favorit" id="favorit">
        <div class="container">
            <div class="row">
                <div class="col text-center favorit-heading">
                    <h2>Wisata Terfavorit</h2>
                    <p>
                        Sesuatu yang belum pernah <br />
                        kamu coba sebelumnya
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row">
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
    <!-- End Wisata Favorit -->

    <!-- Informasi -->
    <section class="section-favorit" id="favorit">
        <div class="container">
            <div class="row">
                <div class="col text-center favorit-heading">
                    <h2>Informasi Tempat</h2>
                    <p>
                        Artikel yang memudahkanmu
                        <br />
                        mengetahui segalanya
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-information-content" id="popularContent">
        <div class="container">
            <div class="section-information-image row">
                @if ($post->count())
                <div class="col-sm-6 col-md-4 col-lg-6">
                    <div class="card-information d-flex flex-column"
                        style="background-image: url('{{ Storage::url($post[0]->photos->first()->image) }}')">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6">
                    <div class="blog">Blog</div>
                    <div class="blog-title">{{ $post[0]->title }}</div>
                    <div class="blog-description">{!! substr($post[0]->about,0,799) !!}
                    </div>
                    <a href="{{ route('single-post', $post[0]->slug) }}"
                        class="btn btn-lihat-detail btn-block px-4 mt-4">
                        Lihat Artikel
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
@endsection