@extends('layouts.app')
@section('title')
Gallery Wisata
@endsection

@section('content')
<main>
  <section class="section-gallery-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <a href="index.html" class="breadcrumb-item">
                <li>Home</li>
              </a>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
        <div class="item col-sm-6 col-md-4 mb-4">
          <a href="{{ url('frontend/images/gallery.jpg') }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ url('frontend/images/gallery.jpg') }}" width="100%" height="100%" alt="" /></a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
@endpush

@push('addon-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endpush