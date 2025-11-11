@extends('layouts.app')

@section('title', 'Ecobrick RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/ecobrick2.webp') }}')"
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
              <span>Ecobrick RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Ecobrick RW 2
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
              Ecobrick: Dari Sampah Plastik Menjadi Batu Bata Ramah Lingkungan
            </h2>
            <p>
              Ecobrick adalah program daur ulang botol plastik yang diinisiasi
              oleh mahasiswa KKN Dharmakarya di RW 2 Kelurahan Sidotopo.
              Program ini mengubah sampah plastik menjadi bahan bangunan
              yang kuat dan berguna.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/ecobrick1.webp') }}"
                alt="Ecobrick RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Ecobrick dibuat dengan mengisi botol plastik bekas dengan plastik
              yang lebih kecil dan padat. Proses ini melibatkan warga RW 2
              dalam workshop pembuatan ecobrick yang edukatif dan menyenangkan.
            </p>
            <p>
              Manfaat ecobrick:
            </p>
            <ul>
              <li>Mengurangi sampah plastik di lingkungan</li>
              <li>Membuat bahan bangunan alternatif</li>
              <li>Mendidik masyarakat tentang daur ulang</li>
              <li>Meningkatkan kreativitas dan keterampilan warga</li>
            </ul>
            <p>
              Ecobrick RW 2 telah digunakan untuk membuat berbagai produk
              seperti pot tanaman, bangku taman, dan bahkan struktur bangunan
              kecil. Program ini mendapat dukungan penuh dari pengurus RW
              dan warga.
            </p>
            <h3 class="mt-5">Dampak Ecobrick</h3>
            <p>
              Dengan ecobrick, RW 2 berhasil mengurangi volume sampah plastik
              yang dibuang ke lingkungan. Program ini juga membuka peluang
              ekonomi baru bagi warga melalui penjualan produk ecobrick.
            </p>
            <p>
              Ecobrick RW 2 menjadi contoh inovasi daur ulang yang dapat
              diadopsi oleh RW lainnya. Dengan kolaborasi mahasiswa KKN dan
              warga, program ini terus berkembang dan memberikan manfaat
              berkelanjutan bagi lingkungan dan masyarakat.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Ecobrick</a>
                <a href="#" class="tag-cloud-link">Daur Ulang</a>
                <a href="#" class="tag-cloud-link">Lingkungan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
