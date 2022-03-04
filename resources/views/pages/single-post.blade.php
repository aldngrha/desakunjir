@extends('layouts.app')
@section('title')
Post Detail
@endsection

@section('content')
<main>
  <section class="section-single-post">
    <section class="section-single-post-header"></section>
    <section class="section-single-post-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <a href="index.html" class="breadcrumb-item">
                  <li>Home</li>
                </a>
                <a href="blog.html" class="breadcrumb-item">Informasi</a>
                <li class="breadcrumb-item active">Post</li>
              </ol>
            </nav>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-12">
            <div class="section-blog text-center">
              <h1 class="blog-title">Wisata di Desa Kunjir</h1>
              <img src="{{ url('frontend/images/informasi.jpg') }}" class="img-blog" alt="" />
            </div>
            <div class="section-blog-details">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Deserunt, mollitia quia! Quam cupiditate cum harum optio
              facilis. Cum repellendus consequatur aperiam aspernatur
              inventore provident eligendi velit nulla, accusamus tenetur!
              Dolor. <br />
              <br />
              eius culpa asperiores architecto nesciunt, repellat ratione
              aut assumenda reprehenderit id pariatur delectus nostrum
              commodi. Eos delectus, facilis nesciunt id natus rem illum
              officia cum repellat voluptatem quod nihil. Labore sit fuga
              rem vel sapiente, <br />
              <br />consequuntur perspiciatis voluptatem voluptatibus nulla
              quo harum repudiandae illo ab doloribus saepe quisquam odio
              odit excepturi dicta reiciendis placeat, impedit assumenda.
              Laudantium, nemo perferendis! Nobis, aspernatur doloribus
              ratione explicabo tenetur laudantium eos architecto quisquam
              optio atque quaerat fugiat vero!
              <br />
              Iusto, voluptate distinctio, repellendus saepe molestiae
              obcaecati temporibus aspernatur harum dignissimos quam iste
              soluta nobis! Tempora soluta veritatis expedita magnam
              molestias ab nobis.
              <br />
              <br />
              Voluptas pariatur inventore doloribus aperiam dolores nobis
              quibusdam enim deserunt aliquam asperiores adipisci
              voluptatum, fugiat natus nihil fugit ducimus, non, ex unde.
            </div>
          </div>
        </div>
        <div class="published row col-md-4 col-sm-6 col-lg-12">
          <div class="writer"><i class="fa fa-pencil"></i>Aldi Nugraha</div>
          <div class="writer">
            <i class="fa-solid fa-calendar-days"></i>10 Januari 2022
          </div>
        </div>
        <div class="section-comment"></div>
      </div>
    </section>
  </section>
</main>
@endsection