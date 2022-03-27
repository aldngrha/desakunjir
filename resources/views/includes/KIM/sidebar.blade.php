<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      ADMIN KIM
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->is('kim') ? 'active' : '' }}">
    <a class="nav-link" href={{ route('kim') }}>
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Interface</div>

  <li class="nav-item {{ request()->is('kim/post*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('post.index') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Informasi</span></a>
  </li>

  <li class="nav-item {{ request()->is('kim/foto*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('foto.index') }}">
      <i class="fas fa-fw fa-image"></i>
      <span>Photo</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->