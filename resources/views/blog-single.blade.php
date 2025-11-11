@extends('layouts.app')

@section('title', 'Berita Detail - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/blog1copy.webp') }}')"
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
              <span>Blog Single</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Pembukaan KKN SDGs Kelompok 4
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
              Kegiatan Pembukaan KKN SDGs Kelompok 4 UPN "Veteran" Jawa Timur
            </h2>
            <p>
              Pada Senin, 20 Oktober 2025, telah dilaksanakan kegiatan pembukaan
              Kuliah Kerja Nyata (KKN) SDGs kelompok 4 di Kelurahan Sidotopo,
              Kecamatan Semampir, Kota Surabaya. Kegiatan ini dimulai pada pukul
              13.00 WIB hingga 15.00 WIB dan berlangsung di Balai RW 2 Kelurahan
              Sidotopo.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/kontenblog1.webp') }}"
                alt="Pembukaan KKN SDGs Kelompok 4"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Kegiatan ini dihadiri oleh beberapa tokoh penting, antara lain:
            </p>
            <ul>
              <li>Yunus S.STP, M.A.P. sebagai Camat Kecamatan Semampir</li>
              <li>Pak Noevianto, SH sebagai Lurah Kelurahan Sidotopo</li>
              <li>Perwakilan Pengurus RW 2, Pak Yanto</li>
              <li>Dosen Pembimbing Lapangan: Bapak Mohammad Syaraffah, M.I.Kom.</li>
            </ul>
            <p>
              Kelompok 4 Dharmakarya terdiri dari 23 mahasiswa berbagai program studi
              yang berkomitmen untuk berkontribusi dalam program Sustainable Development Goals (SDGs).
              Acara pembukaan ini dihadiri oleh warga RW 2 Sidotopo dan merupakan langkah awal bagi mahasiswa untuk
              berkontribusi melalui kegiatan KKN di lingkungan masyarakat RW 2 Sidotopo.
            </p>
            <h3 class="mt-5">Tujuan KKN SDGs Kelompok 4 Dharmakarya</h3>
            <p>
              KKN SDGs Kelompok 4 Dharmakarya bertujuan untuk meningkatkan kesadaran masyarakat
              terhadap isu-isu pembangunan berkelanjutan, serta memberikan kontribusi
              nyata dalam mencapai target SDGs di tingkat lokal melalui inovasi teknologi
              dan edukasi masyarakat untuk mewujudkan desa mandiri berkelanjutan.
            </p>
            <p>
              Tema kegiatan ini adalah "Pengembangan Potensi Desa Melalui Inovasi Teknologi
              dan Edukasi Masyarakat untuk Mewujudkan Desa Mandiri Berkelanjutan".
              Dengan dukungan dari berbagai pihak, kegiatan ini diharapkan dapat
              berjalan lancar dan memberikan manfaat maksimal bagi masyarakat
              Kelurahan Sidotopo.
            </p>
            <h3 class="mt-5">Program Kegiatan</h3>
            <p>
              Selama periode KKN yang dimulai dari survei pada 13 Oktober hingga penutupan
              pada 13 November, kelompok Dharmakarya akan melaksanakan berbagai program
              seperti sosialisasi Digital Branding UMKM, Mural dan Kebun Asri, ECOBRICK dari botol bekas, dan edukasi berkelanjutan untuk memastikan keberlanjutan
              program di masa depan.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">KKN</a>
                <a href="#" class="tag-cloud-link">SDGs</a>
                <a href="#" class="tag-cloud-link">UPN Veteran</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
