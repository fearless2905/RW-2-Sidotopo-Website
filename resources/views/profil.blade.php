@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url({{ asset('frontend/images/profil.jpg') }})"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-9 text-center ftco-animate"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <p
              class="breadcrumbs"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              <span class="mr-2"><a href="{{ route('home') }}">Beranda</a></span>
              <span>Profil</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Profil RW 2 Sidotopo
            </h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-md-flex">
          <div class="col-md-6 ftco-animate">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Tentang RW 2 Kelurahan Sidotopo</h2>
                <p>
                  RW 2 Kelurahan Sidotopo merupakan bagian dari Kecamatan Semampir, Kota Surabaya. Wilayah ini dikenal dengan komunitas yang solid dan aktif dalam berbagai kegiatan sosial serta pembangunan. RW 2 terdiri dari beberapa RT yang saling berkolaborasi untuk meningkatkan kualitas hidup masyarakat.
                </p>
                <p>
                  Lokasi RW 2 berada di JL. SIDOTOPO LOR I/21, dengan akses yang mudah ke pusat kota Surabaya. Wilayah ini memiliki potensi besar dalam bidang pendidikan, ekonomi, dan lingkungan, yang terus dikembangkan melalui program-program inovatif.
                </p>
                <p>
                  Masyarakat RW 2 aktif dalam kegiatan gotong royong, pendidikan anak, serta pelestarian budaya lokal. Dengan dukungan dari pemerintah dan kelompok mahasiswa KKN, RW 2 terus berupaya menjadi contoh desa mandiri yang berkelanjutan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 ftco-animate">
            <div class="map-container">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5!2d112.75!3d-7.25!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b8c8c8c8c8%3A0x8c8c8c8c8c8c8c8c!2sSidotopo%2C%20Semampir%2C%20Surabaya%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <span class="subheading">Visi dan Misi</span>
            <h2 class="mb-4">RW 2 Sidotopo</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 ftco-animate">
            <div class="card">
              <div class="card-header">
                <h3>Visi</h3>
              </div>
              <div class="card-body">
                <p>
                  Menjadi RW yang mandiri, berkelanjutan, dan harmonis melalui inovasi teknologi, edukasi masyarakat, serta pengembangan potensi desa untuk mencapai kesejahteraan bersama.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 ftco-animate">
            <div class="card">
              <div class="card-header">
                <h3>Misi</h3>
              </div>
              <div class="card-body">
                <ul>
                  <li>Meningkatkan partisipasi masyarakat dalam kegiatan sosial dan pembangunan.</li>
                  <li>Mengembangkan program edukasi dan pelatihan untuk generasi muda.</li>
                  <li>Melestarikan lingkungan dan budaya lokal melalui inovasi berkelanjutan.</li>
                  <li>Mendorong kolaborasi antara pemerintah, masyarakat, dan kelompok mahasiswa untuk kemajuan bersama.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
