@extends('layouts.POKDARWIS.admin')

@section('title')
Tambah Pemilik
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Pemilik</h1>
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
      <form action="{{ route('owner.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="travel_packages_id">Paket Wisata</label>
          <select name="travel_packages_id" required class="form-control">
            <option value="">Pilih Paket Wisata</option>
            @foreach ($travel_packages as $travel_package)
            <option value="{{ $travel_package->id }}">
              {{ $travel_package->title }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
          <label for="account_number">No. Rekening</label>
          <input type="text" class="form-control" name="account_number" placeholder="Nomor Rekening"
            value="{{ old('account_number') }}">
        </div>
        <div class="form-group">
          <label for="bank">Bank</label>
          <input type="text" class="form-control" name="bank" placeholder="Bank" value="{{ old('bank') }}">
        </div>
        <div class="form-group">
          <label for="whatsapp_number">No. Whatsapp</label>
          <input type="text" class="form-control" name="whatsapp_number"
            placeholder="Nomor Whatsapp isi jangan pakai angka 0, misal 8963819xxxx"
            value="{{ old('whatsapp_number') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection