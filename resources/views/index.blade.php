@extends('layouts.app')

@section('title', 'Beranda - RW 2 Sidotopo')

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
                    src="{{ asset('frontend/images/house.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Profil RW 2</h3>
                <p>
                  Kenali profil lengkap RW 2 Sidotopo, termasuk visi misi, sejarah, dan informasi wilayah Kelurahan Sidotopo.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/organization-chart.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Struktur RW 2</h3>
                <p>
                  Lihat struktur organisasi RW 2, mulai dari Ketua RW hingga Bidang Keamanan dan Kesra.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/album.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Galeri</h3>
                <p>
                  Lihat dokumentasi kegiatan KKNT SDGs, Posyandu, Senam Bersama, dan Bank Sampah di galeri foto.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="{{ asset('frontend/images/news.png') }}"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Berita</h3>
                <p>
                  Dapatkan informasi terbaru seputar kegiatan RW 2, pengumuman, dan berita terkini dari lingkungan.
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
            <div class="text-center mt-4">
              <a href="{{ route('galeri') }}" class="btn btn-primary">Lihat Selengkapnya</a>
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
                      style="background-image: url({{ asset('frontend/images/person_1.jpg') }})"
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
            <h2 class="mb-4"><strong>UMKM Sekitar</strong>  RW 2</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="destination-slider owl-carousel ftco-animate" id="umkm-carousel">
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img img-2 d-flex justify-content-center align-items-center open-umkm"
                    style="background-image: url({{ asset('frontend/images/aksesoris.jpg') }})"
                    data-img="{{ asset('frontend/images/aksesoris.jpg') }}"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>Aksesoris Lengkap</h3>
                    <p class="rate">
                      <span style="font-size: 16px; font-weight: bold;">Oleh: Bu Siti Aminah</span>
                    </p>
                    <hr style="margin: 10px 0;" />
                    <p>
                      Berbagai macam aksesoris handmade seperti gelang, kalung, anting, dan tas rajut dengan desain unik.
                    </p>
                    <hr />
                    <p class="bottom-area d-flex">
                      <span
                        ><i class="icon-map-o"></i> Gang 1 Blok A RT 1</span
                      >
                      <span class="ml-auto"><a href="https://wa.me/6285964165170"><i class="fab fa-whatsapp"></i> Kontak</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img img-2 d-flex justify-content-center align-items-center open-umkm"
                    style="background-image: url({{ asset('frontend/images/nasicampur.jpg') }})"
                    data-img="{{ asset('frontend/images/nasicampur.jpg') }}"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>Nasi Campur Madura</h3>
                    <p class="rate">
                      <span style="font-size: 16px; font-weight: bold;">Oleh: Pak Ahmad Rahman</span>
                    </p>
                    <hr style="margin: 10px 0;" />
                    <p>
                      Nasi campur khas Madura dengan ayam rica-rica, telur, dan sambal yang pedas menggugah selera.
                    </p>
                    <hr />
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Gang 2 Blok B RT 2</span>
                      <span class="ml-auto"><a href="https://wa.me/6285964165170"><i class="fab fa-whatsapp"></i> Kontak</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img img-2 d-flex justify-content-center align-items-center open-umkm"
                    style="background-image: url({{ asset('frontend/images/catering.png') }})"
                    data-img="{{ asset('frontend/images/catering.png') }}"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>Catering Makanan</h3>
                    <p class="rate">
                      <span style="font-size: 16px; font-weight: bold;">Oleh: Bu Maya Sari</span>
                    </p>
                    <hr style="margin: 10px 0;" />
                    <p>
                      Layanan catering untuk acara keluarga, ulang tahun, dan hajatan dengan menu beragam dan berkualitas.
                    </p>
                    <hr />
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Gang 3 Blok C RT 1</span>
                      <span class="ml-auto"><a href="https://wa.me/6285964165170"><i class="fab fa-whatsapp"></i> Kontak</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img img-2 d-flex justify-content-center align-items-center open-umkm"
                    style="background-image: url({{ asset('frontend/images/warkop.jpg') }})"
                    data-img="{{ asset('frontend/images/warkop.jpg') }}"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>Warung Kopi</h3>
                    <p class="rate">
                      <span style="font-size: 16px; font-weight: bold;">Oleh: Pak Budi Santoso</span>
                    </p>
                    <hr style="margin: 10px 0;" />
                    <p>
                      Tempat nongkrong favorit dengan berbagai jenis kopi specialty dan camilan ringan.
                    </p>
                    <hr />
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Gang 4 Blok D RT 2</span>
                      <span class="ml-auto"><a href="https://wa.me/6285964165170"><i class="fab fa-whatsapp"></i> Kontak</a></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="#"
                    class="img img-2 d-flex justify-content-center align-items-center open-umkm"
                    style="background-image: url({{ asset('frontend/images/warungmadura.jpg') }})"
                    data-img="{{ asset('frontend/images/warungmadura.jpg') }}"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>Warung Madura</h3>
                    <p class="rate">
                      <span style="font-size: 16px; font-weight: bold;">Oleh: Bu Rina Kusuma</span>
                    </p>
                    <hr style="margin: 10px 0;" />
                    <p>
                      Warung makan khas Madura dengan berbagai menu, dan nasi cumi yang autentik.
                    </p>
                    <hr />
                    <p class="bottom-area d-flex">
                      <span><i class="icon-map-o"></i> Gang 5 Blok E RT 3</span>
                      <span class="ml-auto"><a href="https://wa.me/6285964165170"><i class="fab fa-whatsapp"></i> Kontak</a></span>
                    </p>
                  </div>
                </div>
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
            <h2><strong>Informasi</strong> Terupdate</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="destination-slider owl-carousel ftco-animate" id="news-carousel">
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-pembukaan-kkn') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/blog1.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">KKN, SDGs</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-pembukaan-kkn') }}">Pembukaan KKN SDGs Kelompok 4</a>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-posyandu') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/posyandu3.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Kesehatan</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-posyandu') }}">Kegiatan Posyandu RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-senam') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/senam2.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Kesehatan, Komunitas</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-senam') }}">Senam Bersama Warga RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-bank-sampah') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/banksampah1.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Lingkungan, Daur Ulang</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-bank-sampah') }}">Bank Sampah RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-kebun-asri') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/dharmakarya.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Lingkungan, Pertanian</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-kebun-asri') }}">Kebun Asri RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-mural') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/mural.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Seni, Lingkungan</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-mural') }}">Mural Daun Pohon RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
              <div class="item">
                <div class="blog-entry align-self-stretch">
                  <a
                    href="{{ route('blog-ecobrick') }}"
                    class="block-20"
                    style="background-image: url('{{ asset('frontend/images/ecobrick.jpg') }}')"
                  >
                  </a>
                  <div class="text p-4 d-block">
                    <span class="tag">Lingkungan, Inovasi</span>
                    <h3 class="heading mt-3">
                      <a href="{{ route('blog-ecobrick') }}">Ecobrick RW 2</a>
                    </h3>
                    <div class="meta mb-3">
                      <div><a href="#">November 2025</a></div>
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
            <div class="text-center mt-4">
              <a href="{{ route('blog') }}" class="btn btn-primary">Lihat Selengkapnya</a>
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

    // Saat gambar UMKM diklik → buka modal
    $('.open-umkm').on('click', function (e) {
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

    // Inisialisasi Owl Carousel untuk news
    $('#news-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });
</script>
@endsection
