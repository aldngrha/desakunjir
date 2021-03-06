<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('pokdarwis') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      ADMIN POKDARWIS
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->is('pokdarwis') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pokdarwis') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Interface</div>

  <li class="nav-item {{ request()->is('pokdarwis/header*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('header.index') }}">
      <i class="fas fa-fw fa-image"></i>
      <span>Photo Header</span></a>
  </li>
  <li class="nav-item {{ request()->is('pokdarwis/travel-package*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('travel-package.index') }}">
      <i class="fas fa-fw fa-hotel"></i>
      <span>Paket Wisata</span></a>
  </li>
  <li class="nav-item {{ request()->is('pokdarwis/gallery*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('gallery.index') }}">
      <i class="fas fa-fw fa-images"></i>
      <span>Photo</span></a>
  </li>
  <li class="nav-item {{ request()->is('pokdarwis/photo*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('photo.index') }}">
      <i class="fas fa-fw fa-images"></i>
      <span>Gallery</span></a>
  </li>
  <li class="nav-item {{ request()->is('pokdarwis/transaction*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('transaction.index') }}">
      <i class="fas fa-fw fa-dollar-sign"></i>
      <span>Transaksi</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->