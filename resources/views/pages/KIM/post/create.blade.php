@extends('layouts.KIM.admin')

@section('title')
Tambah Informasi
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Informasi</h1>
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
      <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" placeholder="Judul informasi" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="about">Informasi</label>
          <textarea name="about" class="ckeditor form-control" rows="10">{{ old('about') }}</textarea>
        </div>
        <div class="form-group">
          <label for="writer">Penulis</label>
          <input type="text" class="form-control" name="writer" placeholder="Penulis" value="{{ old('writer') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection