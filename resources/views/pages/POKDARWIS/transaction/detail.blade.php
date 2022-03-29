@extends('layouts.POKDARWIS.admin')

@section('title')
Transaksi
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $item->user->name }}</h1>
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
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <td>{{ $item->id }}</td>
        </tr>
        <tr>
          <th>Paket Wisata</th>
          <td>{{ $item->travel_package->title }}</td>
        </tr>
        <tr>
          <th>Pembeli</th>
          <td>{{ $item->user->name }}</td>
        </tr>
        <tr>
          <th>Total Transaksi</th>
          <td>Rp {{ number_format($item->transaction_total, 0, ",", ".") }}</td>
        </tr>
        <tr>
          <th>Transaksi Status</th>
          <td>{{ $item->transaction_status }}</td>
        </tr>
        <tr>
          <table class="table table-bordered">
            <p>Data Pembeli</p>
            <tr>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Nomor Handphone</th>
            </tr>
            @foreach ($item->details as $detail)
            <tr>
              <td>{{ $detail->id }}</td>
              <td>{{ $detail->name }}</td>
              <td>{{ $detail->email }}</td>
              <td>{{ $detail->number }}</td>
            </tr>
            @endforeach
          </table>
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection