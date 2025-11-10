@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url({{ asset('frontend/images/home1.jpg') }})"
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
              <span>Tentang Kami</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Dharmakarya
            </h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-md-flex">
          <div
            class="col-md-6 ftco-animate img about-image"
            style="background-image: url({{ asset('frontend/images/logo.png') }})"
          ></div>
          <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div
                  class="nav ftco-animate nav-pills"
                  id="v-pills-tab"
                  role="tablist"
                  aria-orientation="vertical"
                >
                  <a
                    class="nav-link active"
                    id="v-pills-whatwedo-tab"
                    data-toggle="pill"
                    href="#v-pills-whatwedo"
                    role="tab"
                    aria-controls="v-pills-whatwedo"
                    aria-selected="true"
                    >Filosofi Huruf</a
                  >

                  <a
                    class="nav-link"
                    id="v-pills-mission-tab"
                    data-toggle="pill"
                    href="#v-pills-mission"
                    role="tab"
                    aria-controls="v-pills-mission"
                    aria-selected="false"
                    >Filosofi Logo</a
                  >

                  <a
                    class="nav-link"
                    id="v-pills-goal-tab"
                    data-toggle="pill"
                    href="#v-pills-goal"
                    role="tab"
                    aria-controls="v-pills-goal"
                    aria-selected="false"
                    >Filosofi Simbol</a
                  >
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-whatwedo"
                    role="tabpanel"
                    aria-labelledby="v-pills-whatwedo-tab"
                  >
                    <div id="profil"></div>
                    <div>
                      <h2 class="mb-4">Huruf D dan K</h2>
                      <p>
                        Bentuk utama logo merupakan gabungan huruf "d" dan "k"
                        yang diambil dari nama Dharma Karya. Dharma karya
                        sendiri berarti "Tindakan Kebaikan", menunjukkan
                        komitmen kelompok untuk melakukan hal-hal yang positif
                        bagi masyarakat.
                      </p>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade"
                    id="v-pills-mission"
                    role="tabpanel"
                    aria-labelledby="v-pills-mission-tab"
                  >
                    <div id="struktur-rw"></div>
                    <div>
                      <h2 class="mb-4">Arti Bentuk Pita</h2>
                      <p>
                        Elemen pita melambangkan ikatan dan kebersamaan.
                        Bentuknya yang mengalir mencerminkan semangat gotong
                        royong dan fleksibilitas kelompok dalam beradaptasi
                        serta bekerja sama dengan masyarakat untuk mencapai
                        tujuan bersama.
                      </p>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade"
                    id="v-pills-goal"
                    role="tabpanel"
                    aria-labelledby="v-pills-goal-tab"
                  >
                    <div id="pengurus-rt"></div>
                    <div>
                      <h2 class="mb-4">Penggambaran Simbol Daun</h2>
                      <p>
                        Simbol daun menggambarkan pertumbuhan, kehidupan, dan
                        harapan baru. Ia menjadi representasi dari upaya
                        kelompok untuk menumbuhkan perubahan positif Lingkungan
                        tempat pelaksanaan KKN.
                      </p>
                    </div>
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
          <div class="col-md-12 heading-section ftco-animate">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <span class="subheading">FAQS</span>
                <h2 class="mb-4"><strong>Pertanyaan</strong> Seputar KKN</h2>
              </div>
              <div>
                <a href="https://www.instagram.com/dharmakaryasidotopo/" target="_blank" class="mr-3">
                  <i class="fab fa-instagram fa-2x text-primary"></i>
                </a>
                <a href="#" target="_blank">
                  <i class="fab fa-youtube fa-2x text-primary"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div id="accordion">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menuone"
                        aria-expanded="true"
                        aria-controls="menuone"
                        >Apa itu KKNT SDGs?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menuone" class="collapse show">
                      <div class="card-body">
                        <p>
                          KKNT SDGs adalah program Kuliah Kerja Nyata yang berfokus pada Sustainable Development Goals (SDGs) atau Tujuan Pembangunan Berkelanjutan. Program ini bertujuan untuk memberikan pengalaman praktis kepada mahasiswa dalam mengimplementasikan SDGs di masyarakat.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menutwo"
                        aria-expanded="false"
                        aria-controls="menutwo"
                        >Apa tema KKNT Batch 2 Kelompok 4?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menutwo" class="collapse">
                      <div class="card-body">
                        <p>
                          Tema KKNT Batch 2 Kelompok 4 adalah "Pengembangan Potensi Desa Melalui Inovasi Teknologi dan Edukasi Masyarakat untuk Mewujudkan Desa Mandiri Berkelanjutan".
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu3"
                        aria-expanded="false"
                        aria-controls="menu3"
                      >
                        Siapa Dosen Pendamping Lapangan (DPL) untuk kelompok ini?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu3" class="collapse">
                      <div class="card-body">
                        <p>
                          Dosen Pendamping Lapangan (DPL) untuk KKNT SDGs Batch 2 Kelompok 4 adalah Bapak Mohammad Syaraffah, M.I.Kom.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu4"
                        aria-expanded="false"
                        aria-controls="menu4"
                        >Berapa lama durasi KKNT ini?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu4" class="collapse">
                      <div class="card-body">
                        <p>
                          Durasi KKNT SDGs Batch 2 Kelompok 4 dimulai dari tanggal 13 Oktober untuk survei, pembukaan pada tanggal 20 Oktober, dan penutupan pada tanggal 13 November.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu5"
                        aria-expanded="false"
                        aria-controls="menu5"
                        >Apa saja kegiatan yang dilakukan selama KKNT?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu5" class="collapse">
                      <div class="card-body">
                        <p>
                          Kegiatan KKNT meliputi survei lokasi, sosialisasi program, pelatihan masyarakat, pengembangan potensi desa melalui teknologi, edukasi SDGs, dan evaluasi program untuk memastikan keberlanjutan.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu6"
                        aria-expanded="false"
                        aria-controls="menu6"
                        >Bagaimana cara mendapatkan informasi lebih lanjut?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu6" class="collapse">
                      <div class="card-body">
                        <p>
                          Untuk informasi lebih lanjut tentang KKNT SDGs Batch 2 Kelompok 4, silakan hubungi DPL Bapak Mohammad Syaraffah, M.I.Kom. atau kunjungi situs resmi Universitas Pembangunan Nasional "Veteran" Jawa Timur.
                        </p>
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


@endsection
