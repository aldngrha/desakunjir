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

    </div>
  </div>


</div>
<!-- /.container-fluid -->

@endsection