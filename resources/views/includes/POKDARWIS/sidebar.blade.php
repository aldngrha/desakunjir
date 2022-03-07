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
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('pokdarwis') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Interface</div>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('travel-package.index') }}">
      <i class="fas fa-fw fa-hotel"></i>
      <span>Paket Wisata</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('photo.index') }}">
      <i class="fas fa-fw fa-image"></i>
      <span>Photo Wisata</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('gallery.index') }}">
      <i class="fas fa-fw fa-image"></i>
      <span>Gallery</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('owner.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Owner</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->