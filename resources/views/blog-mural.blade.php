@extends('layouts.app')

@section('title', 'Mural Daun Pohon RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/mural1.webp') }}')"
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
              <span class="mr-2"><a href="{{ route('blog') }}">Berita</a></span>
              <span>Mural Daun Pohon RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Mural Daun Pohon RW 2
            </h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate mx-auto">
            <h2 class="mb-3 text-center">
              Mural Daun Pohon: Seni dan Edukasi Lingkungan
            </h2>
            <p>
              Mural daun pohon adalah karya seni yang dibuat oleh mahasiswa
              KKN Dharmakarya di dinding balai RW 2 Kelurahan Sidotopo.
              Mural ini menggambarkan keindahan alam dan pentingnya
              pelestarian lingkungan.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/mural.webp') }}"
                alt="Mural Daun Pohon RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Mural ini dibuat menggunakan teknik graffiti dengan tema daun
              pohon yang melambangkan pertumbuhan, kehidupan, dan
              kelestarian alam. Proses pembuatan melibatkan warga RW 2
              dan mahasiswa KKN dalam workshop seni mural.
            </p>
            <p>
              Elemen-elemen dalam mural:
            </p>
            <ul>
              <li>Daun pohon berbagai jenis</li>
              <li>Motif flora dan fauna lokal</li>
              <li>Pesan tentang pelestarian lingkungan</li>
              <li>Logo RW 2 dan Dharmakarya</li>
            </ul>
            <p>
              Mural daun pohon tidak hanya sebagai hiasan dinding, tetapi juga
              sebagai media edukasi bagi warga dan pengunjung tentang
              pentingnya menjaga kelestarian alam.
            </p>
            <h3 class="mt-5">Manfaat Mural</h3>
            <p>
              Mural ini menjadi landmark visual RW 2 yang menarik perhatian
              masyarakat. Selain itu, mural juga menginspirasi warga untuk
              lebih peduli terhadap lingkungan dan menjadi sarana promosi
              kreativitas anak muda.
            </p>
            <p>
              Dengan kolaborasi antara mahasiswa KKN dan warga, mural daun
              pohon RW 2 telah menjadi salah satu program Dharmakarya yang
              berhasil menggabungkan seni dan edukasi lingkungan.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Mural</a>
                <a href="#" class="tag-cloud-link">Seni</a>
                <a href="#" class="tag-cloud-link">Lingkungan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
