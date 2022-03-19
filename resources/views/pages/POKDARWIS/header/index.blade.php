@extends('layouts.POKDARWIS.admin')

@section('title')
Header
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Header</h1>
    <a href="{{ route('header.create') }}" class="btn btn-primary btn-sm shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Header</a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered " width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>
                <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">
              </td>
              <td>
                <a href="{{ route('header.edit', $item->id) }}" class="btn btn-info">
                  <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('header.destroy', $item->id) }}" method="POST" class="d-inline">
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