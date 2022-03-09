@extends('layouts.KIM.admin')

@section('title')
Ubah Informasi
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Informasi {{ $item->title }}</h1>
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
      <form action="{{ route('post.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" placeholder="Judul informasi" value="{{ $item->title }}">
        </div>
        <div class="form-group">
          <label for="image">Gambar</label>
          <input type="file" name="image" class="form-control" placeholder="Gambar">
        </div>
        <div class="form-group">
          <label for="about">Informasi</label>
          <textarea class="ckeditor form-control" name="about" placeholder="Tulisan">{{ $item->about }}</textarea>
        </div>
        <div class="form-group">
          <label for="writer">Penulis</label>
          <input type="text" class="form-control" name="writer" placeholder="Penulis" value="{{ $item->writer }}">
        </div>
        <div class="form-group">
          <label for="date">Tanggal</label>
          <input type="date" class="form-control" name="date" placeholder="Tanggal" value="{{ $item->date }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection