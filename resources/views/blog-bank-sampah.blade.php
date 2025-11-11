@extends('layouts.app')

@section('title', 'Bank Sampah RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/banksampah1copy.jpg') }}')"
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
              <span>Bank Sampah RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Bank Sampah RW 2
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
              Bank Sampah RW 2: Mengelola Sampah Menjadi Berkah
            </h2>
            <p>
              Bank Sampah RW 2 adalah program pengelolaan sampah yang
              diinisiasi oleh warga RW 2 Kelurahan Sidotopo untuk mengubah
              sampah menjadi sumber pendapatan dan menjaga kebersihan
              lingkungan.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/banksampah2.jpg') }}"
                alt="Bank Sampah RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Program bank sampah ini melibatkan warga dalam mengumpulkan,
              memilah, dan menjual sampah anorganik seperti plastik, kertas,
              dan logam. Setiap warga yang menyetorkan sampah akan mendapat
              tabungan yang dapat ditarik dalam bentuk uang.
            </p>
            <p>
              Jenis sampah yang diterima:
            </p>
            <ul>
              <li>Plastik keras (botol, wadah)</li>
              <li>Kertas dan kardus</li>
              <li>Logam (kaleng, besi)</li>
              <li>Kaca</li>
            </ul>
            <p>
              Bank sampah RW 2 dikelola oleh pengurus RW dengan bantuan kader
              lingkungan. Pendapatan dari penjualan sampah digunakan untuk
              kegiatan sosial dan lingkungan di RW 2.
            </p>
            <h3 class="mt-5">Manfaat Bank Sampah</h3>
            <p>
              Selain memberikan penghasilan tambahan bagi warga, bank sampah
              juga berkontribusi dalam mengurangi volume sampah yang masuk
              ke TPA, mengedukasi masyarakat tentang pentingnya daur ulang,
              dan menjaga kebersihan lingkungan RW 2.
            </p>
            <p>
              Dengan partisipasi aktif warga, bank sampah RW 2 telah berhasil
              mengumpulkan ratusan kilogram sampah per bulan dan memberikan
              manfaat ekonomi bagi masyarakat Sidotopo.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Bank Sampah</a>
                <a href="#" class="tag-cloud-link">Lingkungan</a>
                <a href="#" class="tag-cloud-link">Daur Ulang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
