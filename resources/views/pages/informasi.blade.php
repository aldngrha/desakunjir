@extends('layouts.app')
@section('title')
Informasi Wisata
@endsection

@section('content')
<main>
  <section class="section-blog">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <a href="{{ route('home') }}" class="breadcrumb-item">
                <li>Home</li>
              </a>
              <li class="breadcrumb-item active">Informasi</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-blog">
              <div class="section-information-image row">
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="card-information d-flex flex-column"
                    style="background-image: url('frontend/images/informasi.jpg')"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="blog">Blog</div>
                  <div class="blog-title">
                    Wisata yang ada di Desa Kunjir
                  </div>
                  <div class="blog-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Distinctio, et nesciunt. Porro minima nisi, iste vitae
                    voluptatum repudiandae magnam est error aperiam suscipit
                    architecto eum excepturi commodi veritatis repellendus
                    dolorem. Totam nulla commodi aspernatur. Lorem ipsum
                    dolor sit amet consectetur, adipisicing elit. Impedit
                    maxime sed iste aperiam. Quidem tempore quisquam
                    repellendus id?
                  </div>
                  <a href="single-post.html" class="btn btn-lihat-detail px-5 mt-4 ml-2 pb-sm-2">
                    Lihat Artikel
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-blog">
              <div class="section-information-image row">
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="card-information d-flex flex-column"
                    style="background-image: url('frontend/images/informasi.jpg')"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="blog">Blog</div>
                  <div class="blog-title">
                    Wisata yang ada di Desa Kunjir
                  </div>
                  <div class="blog-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Distinctio, et nesciunt. Porro minima nisi, iste vitae
                    voluptatum repudiandae magnam est error aperiam suscipit
                    architecto eum excepturi commodi veritatis repellendus
                    dolorem. Totam nulla commodi aspernatur. Lorem ipsum
                    dolor sit amet consectetur, adipisicing elit. Impedit
                    maxime sed iste aperiam. Quidem tempore quisquam
                    repellendus id?
                  </div>
                  <a href="single-post.html" class="btn btn-lihat-detail px-5 mt-4 ml-2 pb-sm-2">
                    Lihat Artikel
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-blog">
              <div class="section-information-image row">
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="card-information d-flex flex-column"
                    style="background-image: url('frontend/images/informasi.jpg')"></div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="blog">Blog</div>
                  <div class="blog-title">
                    Wisata yang ada di Desa Kunjir
                  </div>
                  <div class="blog-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Distinctio, et nesciunt. Porro minima nisi, iste vitae
                    voluptatum repudiandae magnam est error aperiam suscipit
                    architecto eum excepturi commodi veritatis repellendus
                    dolorem. Totam nulla commodi aspernatur. Lorem ipsum
                    dolor sit amet consectetur, adipisicing elit. Impedit
                    maxime sed iste aperiam. Quidem tempore quisquam
                    repellendus id?
                  </div>
                  <a href="single-post.html" class="btn btn-lihat-detail px-5 mt-4 ml-2 pb-sm-2">
                    Lihat Artikel
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection