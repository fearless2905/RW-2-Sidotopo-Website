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
            <div class="destination-slider owl-carousel ftco-animate">
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/waerebo') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/blog1.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      <a href="{{ url('/waerebo') }}"
                        >Pembukaan KKN Kelompok 4, RW 2 Sidotopo</a
                      >
                    </h3>
                    <span class="listing">100 Views</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/toraja') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/toraja.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3><a href="{{ url('/toraja') }}">Toraja, Sulawesi</a></h3>
                    <span class="listing">20 Listing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/penglipuran') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/penglipular.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      <a href="{{ url('/penglipuran') }}">Desa Penglipuran, Bali</a>
                    </h3>
                    <span class="listing">10 Listing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/wakatobi') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/wakatobi.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3><a href="{{ url('/wakatobi') }}">Wakatobi, Sulawesi</a></h3>
                    <span class="listing">3 Listing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/rajaampat') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/rajaampat.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3><a href="{{ url('/rajaampat') }}">Raja Ampat, Papua</a></h3>
                    <span class="listing">3 Listing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/hilisimaetano') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/batunias.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3>
                      <a href="{{ url('/hilisimaetano') }}">Hilisimaetano, Sumatera</a>
                    </h3>
                    <span class="listing">3 Listing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="destination">
                  <a
                    href="{{ url('/tangkahan') }}"
                    class="img d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend/images/tangkahan.jpg') }})"
                  >
                    <div
                      class="icon d-flex justify-content-center align-items-center"
                    >
                      <span class="icon-search2"></span>
                    </div>
                  </a>
                  <div class="text p-3">
                    <h3><a href="{{ url('/tangkahan') }}">Tangkahan, Sumatera</a></h3>
                    <span class="listing">3 Listing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="top-tour-packages">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/waerebo') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/waerebo3.jpeg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ url('/waerebo') }}">Waerebo, Nusa Tenggara</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>1000 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$30</span>
                  </div>
                </div>
                <p>
                  Desa Waerebo, yang terletak di pegunungan Flores, adalah salah
                  satu tempat paling magis di Indonesia. Dengan arsitektur
                  tradisionalnya yang unik dan budaya yang kaya
                </p>
                <p class="days"><span>2 hari 1 malam</span></p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Nusa Tenggara Timur</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/hilisimaetano') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/batunias.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ url('/hilisimaetano') }}">Hilisimaetano, Nias</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>900 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$20</span>
                  </div>
                </div>
                <p>
                  Hilisimaetano di Pulau Nias menawarkan tradisi lompat batu
                  yang unik dan rumah adat megah. Pesona budaya dan alamnya
                  sangat autentik
                </p>
                <p class="days"><span>2 hari 1 malam</span></p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Nias, Sumatera Utara</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/penglipuran') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/penglipuran.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ url('/penglipuran') }}">Desa Penglipuran, Bali</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>700 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$35</span>
                  </div>
                </div>
                <p>
                  Desa Penglipuran di Bali terkenal dengan tata ruang rapi,
                  rumah tradisional, dan keindahan bambu. Budaya leluhur terjaga
                  dengan baik
                </p>
                <p class="days"><span>2 hari 1 malam</span></p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Bangli, Bali</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/tangkahan') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/tangkahan.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ url('/tangkahan') }}">Tangkahan, Sumatera </a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>650 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$20</span>
                  </div>
                </div>
                <p>
                  Tangkahan di Sumatra Utara adalah surga ekowisata dengan hutan
                  tropis, gajah liar, dan sungai jernih. Cocok untuk pencinta
                  alam sejati.
                </p>
                <p class="days"><span>2 hari 1 malam</span></p>
                <hr />
                <p class="bottom-area d-flex">
                  <span
                    ><i class="icon-map-o"></i> Langkat, Sumatera Utara</span
                  >
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
              <a
                href="{{ url('/rajaampat') }}"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url({{ asset('frontend/images/rajaampat3.jpg') }})"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="{{ url('/rajaampat') }}">Raja Ampat, Papua</a></h3>
                    <p class="rate">
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-o"></i>
                      <span>1500 Rating</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$60</span>
                  </div>
                </div>
                <p>
                  Raja Ampat di Papua Barat adalah surga bawah laut dengan
                  terumbu karang, pulau-pulau eksotis, dan keanekaragaman hayati
                  laut yang menakjubkan.
                </p>
                <p class="days"><span>2 hari 1 malam</span></p>
                <hr />
                <p class="bottom-area d-flex">
                  <span
                    ><i class="icon-map-o"></i> Raja Ampat, Papua Barat</span
                  >
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-counter img"
      id="section-counter"
      style="background-image: url({{ asset('frontend/images/bg_1.jpg') }})"
    >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div
            class="col-md-7 text-center heading-section heading-section-white ftco-animate"
          >
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">More than 100,000 websites hosted</span>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="100000">0</strong>
                    <span>Happy Customers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="40000">0</strong>
                    <span>Destination Places</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="87000">0</strong>
                    <span>Hotels</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="56400">0</strong>
                    <span>Local Food</span>
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
            <span class="subheading">Best EcoTourism Website</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>
              We are committed to sustainability and offer eco-friendly travel
              experiences that connect you with nature and local cultures. By
              choosing us, you support responsible tourism that benefits the
              environment and empowers local communities. Our carefully curated
              destinations and partners ensure that every trip minimizes
              environmental impact, while providing authentic and meaningful
              adventures. Travel with us and make a positive difference for the
              planet, while enjoying unique, eco-conscious journeys.
            </p>

            <p>
              <a
                href="#"
                class="btn btn-primary btn-outline-primary mt-4 px-4 py-3"
                >Read more</a
              >
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
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
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from italy</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                      style="background-image: url({{ asset('frontend/images/person_2.jpg') }})"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from London</span>
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
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from Philippines</span>
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
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Local Foods</h2>
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
            <span class="subheading">Recent Blog</span>
            <h2><strong>Tips</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ url('/waerebo') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/wae-rebo-village.jpg') }}')"
              >
              </a>
              <div class="text p-4 d-block">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3">
                  <a href="{{ url('/waerebo') }}">The Wonderful of Waerebo Village</a>
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
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ url('/penglipuran') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/penglipular.jpg') }}')"
              >
              </a>
              <div class="text p-4">
                <span class="tag">Culture</span>
                <h3 class="heading mt-3">
                  <a href="{{ url('/penglipuran') }}"
                    >Penglipuran The World's Cleanest Village</a
                  >
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
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ url('/hilisimaetano') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/Hilisimaetano3.jpg') }}')"
              >
              </a>
              <div class="text p-4">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3">
                  <a href="{{ url('/hilisimaetano') }}"
                    >Hilisimaetano Authentic Charm of Nias Culture</a
                  >
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
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="{{ url('/rajaampat') }}"
                class="block-20"
                style="background-image: url('{{ asset('frontend/images/rajaampat3.jpg') }}')"
              >
              </a>
              <div class="text p-4">
                <span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3">
                  <a href="{{ url('/rajaampat') }}"
                    >Visit Raja Ampat and Spice Islands with Coral
                    Expeditions</a
                  >
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

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div
              class="col-md-7 text-center heading-section heading-section-white ftco-animate"
            >
              <h2>Subcribe to our Newsletter</h2>
              <p>
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. Separated
                they live in
              </p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter email address"
                      />
                      <input
                        type="submit"
                        value="Subscribe"
                        class="submit px-3"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection
