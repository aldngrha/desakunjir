@extends('layouts.KIM.admin')

@section('title')
Ubah Photo Wisata
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Gambar Artikel</h1>
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
      <form action="{{ route('foto.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="form-group">
          <label for="posts_id">Paket Wisata</label>
          <select name="posts_id" class="form-control">
            <option value="{{ $item->posts_id }}">Jangan Diubah</option>
            @foreach ($posts as $post)
            <option value="{{ $post->id }}">
              {{ $post->title }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="image">Gambar</label>
          <input type="file" name="image" class="form-control" placeholder="Gambar">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection