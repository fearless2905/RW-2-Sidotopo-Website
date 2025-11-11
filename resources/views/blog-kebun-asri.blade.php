@extends('layouts.app')

@section('title', 'Kebun Asri RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/home1.JPG') }}')"
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
              <span>Kebun Asri RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Kebun Asri RW 2
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
              Kebun Asri: Hijau dan Sejuk di Tengah Kota
            </h2>
            <p>
              Kebun Asri RW 2 adalah program penghijauan yang diinisiasi oleh
              warga RW 2 Kelurahan Sidotopo untuk menciptakan ruang hijau
              yang dapat dinikmati oleh seluruh masyarakat.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/dharmakarya.jpg') }}"
                alt="Kebun Asri RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Kebun asri ini terletak di lahan kosong di sekitar balai RW dan
              ditanami berbagai jenis tanaman seperti pohon buah, tanaman
              hias, dan sayuran. Program ini melibatkan partisipasi aktif
              warga dalam perawatan dan pengembangan kebun.
            </p>
            <p>
              Tanaman yang ditanam:
            </p>
            <ul>
              <li>Pohon mangga dan rambutan</li>
              <li>Tanaman hias seperti kembang sepatu</li>
              <li>Sayuran seperti kangkung dan bayam</li>
              <li>Tanaman obat seperti jahe dan kunyit</li>
            </ul>
            <p>
              Kebun asri RW 2 juga menjadi tempat edukasi bagi anak-anak dan
              remaja tentang pentingnya pelestarian lingkungan dan pertanian
              urban.
            </p>
            <h3 class="mt-5">Manfaat Kebun Asri</h3>
            <p>
              Selain memberikan suasana yang lebih sejuk dan hijau, kebun asri
              juga berfungsi sebagai sumber oksigen, mengurangi polusi udara,
              dan menjadi tempat rekreasi bagi warga RW 2.
            </p>
            <p>
              Program ini juga mendukung ketahanan pangan lokal dengan
              menyediakan sayuran segar untuk konsumsi warga. Dengan dukungan
              dari mahasiswa KKN, kebun asri RW 2 terus berkembang menjadi
              contoh penghijauan di perkotaan.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Kebun Asri</a>
                <a href="#" class="tag-cloud-link">Penghijauan</a>
                <a href="#" class="tag-cloud-link">Lingkungan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
