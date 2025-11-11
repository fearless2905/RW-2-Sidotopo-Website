@extends('layouts.app')

@section('title', 'Berita - RW 2 Sidotopo')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/profil.webp') }}')"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-9 ftco-animate text-center"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <p
              class="breadcrumbs"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              <span class="mr-2"><a href="{{ route('home') }}">Beranda</a></span>
                        <span>Berita</span>
                        </p>
                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Berita Seputar RW 2
                        </h1>
            </div>
        </div>
        </div>
        </div>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-pembukaan-kkn') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/kontenblog1.webp') }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <span class="tag">KKN, SDGs</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-pembukaan-kkn') }}">Pembukaan KKN SDGs Kelompok 4 pada 20 Oktober 2025</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">20 Oktober 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-posyandu') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/posyandu3.webp') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Kesehatan</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-posyandu') }}">Kegiatan Posyandu RW 2: Pelayanan Kesehatan untuk Ibu dan Anak</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-senam') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/senam2.webp') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Kesehatan, Komunitas</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-senam') }}">Senam Bersama Warga RW 2: Menjaga Kesehatan dan Kebersamaan</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-bank-sampah') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/banksampah1.webp') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Lingkungan, Daur Ulang</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-bank-sampah') }}">Bank Sampah RW 2: Mengelola Sampah Menjadi Berkah</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-kebun-asri') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/dharmakarya.webp') }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <span class="tag">Lingkungan, Pertanian</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-kebun-asri') }}">Kebun Asri RW 2: Hijau dan Sejuk di Tengah Kota</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-mural') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/mural.webp') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Seni, Lingkungan</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-mural') }}">Mural Daun Pohon RW 2: Seni dan Edukasi Lingkungan</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{ route('blog-ecobrick') }}" class="block-20" style="background-image: url('{{ asset('frontend/images/ecobrick.webp') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Lingkungan, Inovasi</span>
                                <h3 class="heading mt-3"><a href="{{ route('blog-ecobrick') }}">Ecobrick RW 2: Dari Sampah Plastik Menjadi Batu Bata Ramah Lingkungan</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">November 2025</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                                                        <li class="active"><span>1</span></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li><a href="#">&gt;</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        </section>



@endsection
