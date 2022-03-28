@extends('layouts.app')
@section('title')
- Informasi Wisata
@endsection

@section('content')
<main>
  <section class="section-blog">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <a href="{{ route('home') }}" class="breadcrumb-item">
                <li>Home</li>
              </a>
              <li class="breadcrumb-item active">Informasi</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-lg-12">
            @foreach ($posts as $post)
            <div class="card card-blog">
              <div class="section-information-image row">
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="card-information d-flex flex-column"
                    style="background-image: url('{{ $post->photos->count() ? Storage::url($post->photos->first()->image) : '' }}')">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="blog">Blog</div>
                  <div class="blog-title">
                    {{ $post->title }}
                  </div>
                  <div class="blog-description">
                    {!!substr($post->about, 0, 300)!!}
                  </div>
                  <a href="{{ route('single-post', $post->slug) }}" class="btn btn-lihat-detail px-5 mt-4 ml-2 pb-sm-2">
                    Lihat Artikel
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection