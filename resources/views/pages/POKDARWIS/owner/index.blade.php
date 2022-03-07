@extends('layouts.POKDARWIS.admin')

@section('title')
Pemilik
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pemilik</h1>
    <a href="{{ route('owner.create') }}" class="btn btn-primary btn-sm shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pemilik</a>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered " width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Wisata</th>
              <th>Nama</th>
              <th>No. Rekening</th>
              <th>Bank</th>
              <th>No. WhatsApp</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->travel_package->title }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->account_number }}</td>
              <td>{{ $item->bank }}</td>
              <td>{{ $item->whatsapp_number }}</td>
              <td>
                <a href="{{ route('owner.edit', $item->id) }}" class="btn btn-info">
                  <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('owner.destroy', $item->id) }}" method="POST" class="d-inline">
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