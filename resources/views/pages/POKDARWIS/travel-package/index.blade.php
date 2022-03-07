@extends('layouts.POKDARWIS.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Paket Wisata</h1>
    <a href="{{ route('travel-package.create') }}" class="btn btn-primary btn-sm shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Wisata</a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered " width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Lokasi</th>
              <th>Hiburan</th>
              <th>Durasi</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->title }}</td>
              <td>{{ $item->location }}</td>
              <td>{{ $item->hiburan }}</td>
              <td>{{ $item->duration }}</td>
              <td>{{ $item->price }}</td>
              <td>
                <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                  <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('travel-package.delete', $item->id) }}" method="POST" class="d-inline">
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