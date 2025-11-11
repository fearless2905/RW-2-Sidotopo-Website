@extends('layouts.app')

@section('title', 'Kegiatan Posyandu RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/posyandu3copy.jpg') }}')"
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
              <span>Kegiatan Posyandu RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Kegiatan Posyandu RW 2
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
              Posyandu RW 2: Pelayanan Kesehatan untuk Ibu dan Anak
            </h2>
            <p>
              Posyandu RW 2 merupakan program kesehatan masyarakat yang rutin
              dilaksanakan setiap bulan untuk memberikan pelayanan kesehatan
              dasar bagi ibu hamil, ibu menyusui, dan anak balita di lingkungan
              RW 2 Kelurahan Sidotopo.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/posyandu1.jpg') }}"
                alt="Kegiatan Posyandu RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Kegiatan posyandu meliputi:
            </p>
            <ul>
              <li>Pemeriksaan kesehatan ibu hamil dan anak balita</li>
              <li>Penimbangan berat badan anak</li>
              <li>Pemberian vitamin dan suplemen gizi</li>
              <li>Konsultasi kesehatan dengan bidan</li>
              <li>Edukasi kesehatan reproduksi dan gizi</li>
            </ul>
            <p>
              Posyandu RW 2 diorganisir oleh kader kesehatan setempat dengan
              dukungan dari Puskesmas Semampir dan pengurus RW. Kegiatan ini
              bertujuan untuk meningkatkan kesehatan masyarakat dan mencegah
              stunting pada anak-anak.
            </p>
            <h3 class="mt-5">Manfaat Posyandu</h3>
            <p>
              Melalui posyandu, masyarakat RW 2 dapat memperoleh pelayanan
              kesehatan yang mudah diakses tanpa harus pergi jauh ke puskesmas.
              Program ini juga menjadi sarana edukasi kesehatan bagi ibu-ibu
              dan keluarga.
            </p>
            <p>
              Dengan partisipasi aktif masyarakat, posyandu RW 2 telah berhasil
              menurunkan angka stunting dan meningkatkan kesadaran kesehatan
              di lingkungan RW 2 Sidotopo.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Posyandu</a>
                <a href="#" class="tag-cloud-link">Kesehatan</a>
                <a href="#" class="tag-cloud-link">RW 2</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
