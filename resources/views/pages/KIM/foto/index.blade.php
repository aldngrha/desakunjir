@extends('layouts.KIM.admin')

@section('title')
Gallery
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Photo Artikel</h1>
    <a href="{{ route('foto.create') }}" class="btn btn-primary btn-sm shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Photo</a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered " width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Artikel</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->post->title }}</td>
              <td>
                <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <a href="{{ route('foto.edit', $item->id) }}" class="btn btn-info">
                  <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('foto.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center">Data kosong</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

@endsection