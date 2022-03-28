<div class="container">
  <nav class="row navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#"> desa<span>kunjir</span> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav ml-auto mr-3">
        <li class="nav-item mx-md-2">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item mx-md-2">
          <a class="nav-link {{ request()->is('paket-wisata') ? 'active' : '' }}"
            href="{{ route('paket-wisata') }}">Paket</a>
        </li>
        <li class="nav-item mx-md-2">
          <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
            href="{{ route('gallery-wisata') }}">Galeri</a>
        </li>
        <li class="nav-item mx-md-2">
          <a class="nav-link {{ request()->is('informasi') ? 'active' : '' }}"
            href="{{ route('informasi') }}">Informasi</a>
        </li>
        <li class="nav-item mx-md-2">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>

        @guest
      </ul>
      <!-- Mobile button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0" type="button"
          onclick="event.preventDefault(); location.href='{{ route('login') }}';">Masuk</button>
      </form>
      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
          onclick="event.preventDefault(); location.href='{{ route('login') }}';">
          Masuk
        </button>
      </form>
      @endguest

      @auth
      <li class="nav-item dropdown">
        <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu">
          <a href="{{ route('changePasswordGet') }}" class="dropdown-item">Ubah Kata Sandi</a>
        </div>
      </li>
      </ul>
      <!-- Mobile button -->
      <form class="form-inline d-sm-block d-md-none" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
      </form>
      <!-- Desktop Button -->
      <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
          Keluar
        </button>
      </form>
      @endauth
    </div>
  </nav>
</div>