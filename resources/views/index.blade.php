@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/home1.jpg') }}')"
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
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
              style="color: white !important"
            >
              Selamat Datang
            </h1>
            <h2
              class="mb-4"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
              style="color: white !important"
            >
              di Website RW 2 Sidotopo
            </h2>
            <p
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
              style="color: white !important"
            >
              Temukan Informasi Lengkap Seputar Lingkungan RW 2 Kelurahan
              Sidotopo, Kecamatan Semampir, Kota Surabaya
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/lokasi.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Profil & Wilayah</h3>
                <p>
                  Kenali lingkungan RW kita lebih dekat, mencakup sejarah
                  singkat, batas wilayah, dan jumlah RT yang ada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/kegiatann.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Kegiatan Warga</h3>
                <p>
                  Ikuti jadwal kerja bakti, perayaan 17 Agustus, posyandu, dan
                  berbagai acara untuk mempererat kebersamaan kita.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/info.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Informasi & Pengumuman</h3>
                <p>
                  Dapatkan info terbaru dari pengurus RW, jadwal siskamling, dan
                  program kerja yang sedang berjalan di lingkungan RW 2.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/image.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Fasilitas Umum</h3>
                <p>
                  Temukan lokasi dan informasi Balai Warga, Posyandu, sarana
                  olahraga, dan fasilitas lain di lingkungan RW kita.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-destination">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Kegiatan</span>
            <h2 class="mb-4"><strong>Aktivitas</strong> Kegiatan RW 2</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="destination-slider owl-carousel ftco-animate" id="gallery-carousel">
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img d-flex justify-content-center align-items-center open-gallery"
                    data-img="{{ asset('frontend/images/galeri1.jpg') }}"
                    style="background-image: url({{ asset('frontend/images/galeri1.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      KKNT SDGs UPNVJT
                    </h3>
                    <span class="listing">13 Oktober 2025-13 November 2025</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img d-flex justify-content-center align-items-center open-gallery"
                    data-img="{{ asset('frontend/images/posyandu1.jpg') }}"
                    style="background-image: url({{ asset('frontend/images/posyandu1.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      Posyandu
                    </h3>
                    <span class="listing">Kegiatan Rutin</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img d-flex justify-content-center align-items-center open-gallery"
                    data-img="{{ asset('frontend/images/senam1.jpg') }}"
                    style="background-image: url({{ asset('frontend/images/senam1.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      Senam Bersama
                    </h3>
                    <span class="listing">Setiap Minggu</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img d-flex justify-content-center align-items-center open-gallery"
                    data-img="{{ asset('frontend/images/banksampah1.jpg') }}"
                    style="background-image: url({{ asset('frontend/images/banksampah1.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      Bank Sampah
                    </h3>
                    <span class="listing">Program Lingkungan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <span class="subheading">Website RW 2 Sidotopo</span>
            <h2 class="mb-4 pb-3"><strong>Kenapa</strong> Website RW?</h2>
            <p>
                Website RW 2 Sidotopo hadir sebagai wadah informasi digital yang mudah diakses oleh seluruh warga RW 2 Kelurahan Sidotopo, Kecamatan Semampir, Kota Surabaya. Tujuannya untuk meningkatkan transparansi, komunikasi, dan partisipasi masyarakat dalam berbagai kegiatan lingkungan. Melalui website ini, warga dapat mengakses informasi terbaru seputar profil wilayah, kegiatan warga, pengumuman, dan fasilitas umum. Kami berkomitmen membangun komunitas yang solid, guyub, dan aktif demi kemajuan bersama. Dengan akses digital yang praktis, website ini menjadi jembatan antara pengurus RW dan warga dalam mewujudkan lingkungan yang harmonis, informatif, dan berkembang.
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <span class="subheading">Testimoni</span>
            <h2 class="mb-4 pb-3"><strong>Kata</strong> Mereka</h2>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                      style="background-image: url({{ asset('frontend/images/pakyanto.jpg') }})"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Semoga dengan adanya website ini bisa mempermudah informasi digital seputar RW 2 Sidotopo secara luas di era teknologi ini.
                        </p>
                        <p class="name">Pak Yanto</p>
                        <span class="position">Pengurus RW 2</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                      style="background-image: url({{ asset('frontend/images/ketua.jpg') }})"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Website ini semoga bermanfaat untuk kemajuan digitalisasi khususnya lingkungan sekitar RW 2 Sidotopo.
                        </p>
                        <p class="name">Rashad</p>
                        <span class="position">Ketua KKN Dharmakarya</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                      style="background-image: url({{ asset('frontend/images/person_3.jpg') }})"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Cihuy.
                        </p>
                        <p class="name">Ibu</p>
                        <span class="position">Anggota KSH RW 2</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">UMKM</span>
            <h2 class="mb-4"><strong>Kuliner</strong> &amp; UMKM Sekitar</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/jagungtiti') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/jagungtiti.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="{{ url('/jagungtiti') }}">Jagung Titi</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Makanan khas dari Flores yang terbuat dari jagung yang
                  dipipihkan dan dibakar, sering disajikan dengan kelapa parut
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span
                    ><i class="icon-map-o"></i> Flores, Nusa Tenggara
                    Timur</span
                  >
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/papeda') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/papeda.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="{{ url('/papeda') }}">Papeda</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Bubur sagu khas Papua yang biasanya dimakan dengan ikan kuah
                  kunir
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Papua</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/satelilit') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/satelilit.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="{{ url('/satelilit') }}">Sate Lilit Ayam</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Makanan khas Bali yang terbuat dari daging cincang yang
                  dicampur parutan kelapa, santan, jeruk nipis, bawang merah,
                  dan merica, lalu direkatkan ke tusuk bambu atau sereh
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Klungkung, Bali</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/saksang') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/saksang.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="{{ url('/saksang') }}">Saksang Babi</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Hidangan khas Batak yang terbuat dari daging babi atau ayam
                  yang dimasak dengan rempah-rempah dan darah untuk memberi
                  warna merah gelap
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Sumatera Utara</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Berita</span>
            <h2><strong>Informasi</strong>  Terupdate</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ route('blog-single') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/blog1.jpg') }}')"
              >
              </a>
              <div class="text p-4 d-block">
                <span class="tag">KKN, SDGs</span>
                <h3 class="heading mt-3">
                  <a href="{{ route('blog-single') }}">Pembukaan KKN SDGs Kelompok 4</a>
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">20 Oktober 2025</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ route('blog') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/wae-rebo-village.jpg') }}')"
              >
              </a>
              <div class="text p-4 d-block">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3">
                  <a href="{{ route('blog') }}">The Wonderful of Waerebo Village</a>
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ route('blog') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/penglipular.jpg') }}')"
              >
              </a>
              <div class="text p-4 d-block">
                <span class="tag">Culture</span>
                <h3 class="heading mt-3">
                  <a href="{{ route('blog') }}">Penglipuran The World's Cleanest Village</a>
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax ftco-counter">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-6 ftco-animate">
              <div class="map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5!2d112.75!3d-7.25!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b9b9b9b9b9%3A0x9b9b9b9b9b9b9b9b!2sJL.%20SIDOTOPO%20LOR%20I%2F21%2C%20Kelurahan%20Sidotopo%2C%20Kecamatan%20Semampir%2C%20Kota%20Surabaya!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid"
                  width="100%"
                  height="400"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
            <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
                <h4>Informasi Umum</h4>
                <p>
                  RW 2 Sidotopo merupakan bagian dari Kelurahan Sidotopo yang dikenal dengan suasana pedesaan yang masih terjaga di tengah perkembangan kota Surabaya. Wilayah ini memiliki karakteristik masyarakat yang guyub dan aktif dalam berbagai kegiatan sosial kemasyarakatan.
                </p>

            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="row">
                  <div
                    class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate"
                  >
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="150" style="color: white;">40</strong>
                        <span style="color: white;">Kepala Keluarga</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate"
                  >
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="450" style="color: white;">450</strong>
                        <span style="color: white;">Jiwa</span>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate"
                  >
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="2.5" style="color: white;">10</strong>
                        <span style="color: white;">Hektar</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
          </div>
        </div>
      </div>
    </section>








{{-- ===== Modal Popup ===== --}}
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content border-0 shadow bg-transparent">
      <div class="modal-body text-center p-0 position-relative">
        <img id="modalImage" src="" class="img-fluid rounded zoomable" style="max-height: 80vh; object-fit: contain; cursor: grab;">
      </div>
    </div>
  </div>
</div>

{{-- ===== CSS Zoom ===== --}}
<style>
  .zoomable {
    transition: transform 0.2s ease;
  }
</style>

{{-- ===== Script ===== --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = $('#galleryModal');
    const modalImg = document.getElementById('modalImage');

    let scale = 1;
    let isDragging = false;
    let startX, startY;
    let originX = 0, originY = 0;

    // Saat gambar diklik → buka modal
    $('.open-gallery').on('click', function (e) {
      e.preventDefault();
      const imgSrc = $(this).data('img');
      modalImg.src = imgSrc;
      scale = 1;
      originX = 0;
      originY = 0;
      modalImg.style.transform = 'translate(0px, 0px) scale(1)';
      modal.modal('show');
    });

    // Double-click untuk zoom
    modalImg.addEventListener('dblclick', function () {
      if (scale === 1) {
        scale = 2; // Zoom in
      } else {
        scale = 1; // Zoom out
      }
      originX = 0;
      originY = 0;
      modalImg.style.transform = `translate(${originX}px, ${originY}px) scale(${scale})`;
    });

    // Zoom dengan scroll
    modalImg.addEventListener('wheel', function (e) {
      e.preventDefault();
      if (e.deltaY < 0) scale += 0.1;
      else if (scale > 1) scale -= 0.1;

      modalImg.style.transform = `translate(${originX}px, ${originY}px) scale(${scale})`;
    });

    // Drag saat di-zoom
    modalImg.addEventListener('mousedown', function (e) {
      if (scale <= 1) return;
      isDragging = true;
      startX = e.clientX - originX;
      startY = e.clientY - originY;
      modalImg.style.cursor = 'grabbing';
    });

    window.addEventListener('mouseup', function () {
      isDragging = false;
      modalImg.style.cursor = 'grab';
    });

    window.addEventListener('mousemove', function (e) {
      if (!isDragging) return;
      originX = e.clientX - startX;
      originY = e.clientY - startY;
      modalImg.style.transform = `translate(${originX}px, ${originY}px) scale(${scale})`;
    });

    // Reset zoom saat modal ditutup
    modal.on('hidden.bs.modal', function () {
      scale = 1;
      originX = 0;
      originY = 0;
      modalImg.style.transform = 'translate(0px, 0px) scale(1)';
    });
  });
</script>
@endsection
