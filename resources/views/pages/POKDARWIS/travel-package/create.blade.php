@extends('layouts.POKDARWIS.admin')

@section('title')
Tambah Paket Travel
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Paket Wisata</h1>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('travel-package.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Nama</label>
          <input type="text" class="form-control" name="title" placeholder="Nama tempat wisata"
            value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="location">Lokasi</label>
          <input type="text" class="form-control" name="location" placeholder="Lokasi wisata"
            value="{{ old('location') }}">
        </div>
        <div class="form-group">
          <label for="about">Tentang</label>
          <textarea name="about" class="ckeditor form-control" rows="10">{{ old('about') }}</textarea>
        </div>
        <div class="form-group">
          <label for="hiburan">Hiburan</label>
          <input type="text" class="form-control" name="hiburan" placeholder="Hiburan" value="{{ old('hiburan') }}">
        </div>
        <div class="form-group">
          <label for="language">Bahasa</label>
          <input type="text" class="form-control" name="language" placeholder="language" value="{{ old('language') }}">
        </div>
        <div class="form-group">
          <label for="foods">Makanan</label>
          <input type="text" class="form-control" name="foods" placeholder="Makanan" value="{{ old('foods') }}">
        </div>
        <div class="form-group">
          <label for="duration">Durasi</label>
          <input type="text" class="form-control" name="duration" placeholder="Durasi" value="{{ old('duration') }}">
        </div>
        <div class="form-group">
          <label for="price">Harga</label>
          <input type="number" class="form-control" name="price" placeholder="Harga" value="{{ old('price') }}">
        </div>
        <div class="form-group">
          <label for="map">Link Lokasi</label>
          <input type="text" class="form-control" name="map" placeholder="Link lokasi" value="{{ old('map') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection