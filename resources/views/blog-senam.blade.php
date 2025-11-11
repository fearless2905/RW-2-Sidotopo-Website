@extends('layouts.app')

@section('title', 'Senam Bersama Warga RW 2 - RW 2 Sidotopo')

@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/galeri.webp') }}')"
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
              <span>Senam Bersama Warga RW 2</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Senam Bersama Warga RW 2
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
              Senam Pagi Bersama: Menjaga Kesehatan dan Kebersamaan Warga
            </h2>
            <p>
              Setiap pagi Minggu, warga RW 2 Kelurahan Sidotopo berkumpul di
              lapangan RW untuk melakukan senam bersama. Kegiatan ini telah
              menjadi tradisi yang rutin dilakukan untuk menjaga kesehatan
              fisik dan mempererat tali silaturahmi antar warga.
            </p>
            <p>
              <img
                src="{{ asset('frontend/images/senam1.webp') }}"
                alt="Senam Bersama Warga RW 2"
                class="img-fluid mx-auto d-block"
              />
            </p>
            <p>
              Senam bersama ini dipimpin oleh instruktur senam dari pengurus RW
              dan diikuti oleh warga dari berbagai usia, mulai dari anak-anak
              hingga lansia. Musik yang dimainkan membuat suasana semakin
              meriah dan menyenangkan.
            </p>
            <p>
              Kegiatan senam meliputi:
            </p>
            <ul>
              <li>Pemanasan dan pendinginan</li>
              <li>Gerakan senam aerobik</li>
              <li>Latihan kekuatan dan fleksibilitas</li>
              <li>Tari bersama untuk menambah keceriaan</li>
            </ul>
            <p>
              Selain manfaat kesehatan fisik, senam bersama juga menjadi sarana
              untuk mempererat hubungan sosial antar warga RW 2. Setelah senam,
              biasanya dilanjutkan dengan ngobrol santai dan berbagi makanan.
            </p>
            <h3 class="mt-5">Manfaat Senam Bersama</h3>
            <p>
              Senam pagi secara teratur dapat meningkatkan sirkulasi darah,
              mengurangi risiko penyakit jantung, dan meningkatkan kekuatan
              otot. Di RW 2, kegiatan ini juga berperan penting dalam
              membangun komunitas yang sehat dan harmonis.
            </p>
            <p>
              Pengurus RW 2 terus mendorong partisipasi warga untuk menjaga
              keberlanjutan kegiatan ini sebagai bagian dari program kesehatan
              masyarakat di lingkungan RW 2 Sidotopo.
            </p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Senam</a>
                <a href="#" class="tag-cloud-link">Kesehatan</a>
                <a href="#" class="tag-cloud-link">Komunitas</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
