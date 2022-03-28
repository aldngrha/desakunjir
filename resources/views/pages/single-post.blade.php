@extends('layouts.app')
@section('title')
- {{ $post->slug }}
@endsection

@section('content')
<main>
  <section class="section-single-post">
    <section class="section-single-post-header"></section>
    <section class="section-single-post-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <a href="{{ route('home') }}" class="breadcrumb-item">
                  <li>Home</li>
                </a>
                <a href="{{ route('informasi') }}" class="breadcrumb-item">Informasi</a>
                <li class="breadcrumb-item active">Post</li>
              </ol>
            </nav>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-12">
            <div class="section-blog text-center">
              <h1 class="blog-title">{{ $post->title}}</h1>
              @if ($post->photos->count())
              <img src="{{ Storage::url($post->photos->first()->image) }}" class="img-blog" alt="" />
              @endif
            </div>
            <div class="section-blog-details">
              {!! $post->about !!}
            </div>
          </div>
        </div>
        <div class="published row col-md-4 col-sm-6 col-lg-12">
          <div class="writer"><i class="fa fa-pencil"></i>{{ $post->writer }}</div>
          <div class="writer">
            <i class="fa-solid fa-calendar-days"></i>{{ $post->created_at->diffForHumans() }}
          </div>
        </div>
        <div class="section-comment"></div>
      </div>
    </section>
  </section>
</main>
@endsection