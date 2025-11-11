@extends('layouts.app')

@section('title', 'KKN Dharmakarya - RW 2 Sidotopo')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url({{ asset('frontend/images/home1.webp') }})"
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
              <span>Dharmakarya</span>
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
                      <h2 class="mb-4">Apa itu Dharmakarya?</h2>
                      <p>
                        "Dharmakarya" berarti "Tindakan Kebaikan", menunjukkan komitmen kelompok untuk melakukan hal-hal yang benar dan bermanfaat bagi masyarakat. Kelompok KKN Dharmakarya terdiri dari mahasiswa Universitas Pembangunan Nasional "Veteran" Jawa Timur yang berkomitmen untuk berkontribusi positif di RW 2 Sidotopo melalui program-program inovatif dan berkelanjutan.
                      </p>
                      <h3 class="mb-3">Arti Bentuk Pita</h3>
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



    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Program Kerja dan Kegiatan Dharmakarya</h2>
            <span class="subheading">Kontribusi Kami untuk RW 2 Sidotopo</span>
          </div>
        </div>

        <!-- Sosialisasi Branding UMKM -->
        <div class="row d-md-flex mb-5">
          <div class="col-md-6 ftco-animate">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mb-4">Sosialisasi Branding UMKM</h3>
                <p>
                  Program sosialisasi branding UMKM bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya branding dalam pengembangan usaha mikro kecil dan menengah. Kegiatan ini meliputi edukasi tentang strategi pemasaran digital, pembuatan logo sederhana, dan teknik promosi yang efektif untuk membantu UMKM lokal berkembang.
                </p>
                <p>
                  Melalui workshop interaktif, kami berbagi pengetahuan praktis yang dapat langsung diterapkan oleh pengusaha di RW 2 Sidotopo untuk meningkatkan daya saing produk mereka di pasar.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 ftco-animate">
            <a href="#" class="open-gallery" data-img="{{ asset('frontend/images/proker1.webp') }}">
              <img src="{{ asset('frontend/images/proker1.webp') }}" alt="Sosialisasi Branding UMKM" class="img-fluid rounded">
            </a>
          </div>
        </div>

        <!-- Kebun Asri -->
        <div class="row d-md-flex mb-5">
          <div class="col-md-6 ftco-animate">
            <a href="#" class="open-gallery" data-img="{{ asset('frontend/images/dharmakarya.webp') }}">
              <img src="{{ asset('frontend/images/dharmakarya.webp') }}" alt="Kebun Asri" class="img-fluid rounded">
            </a>
          </div>
          <div class="col-md-6 ftco-animate">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mb-4">Kebun Asri</h3>
                <p>
                  Program Kebun Asri fokus pada revitalisasi lahan yang tidak terawat menjadi area hijau produktif. Kami membersihkan lahan dari sampah dan gulma, kemudian menanam berbagai tanaman bermanfaat seperti tomat, cabai, sereh, bayam brazil, adas, dan kunyit.
                </p>
                <p>
                  Inisiatif ini tidak hanya memperbaiki estetika lingkungan tetapi juga memberikan manfaat ekonomi jangka panjang bagi masyarakat melalui hasil panen yang dapat dimanfaatkan untuk konsumsi atau dijual.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Mural Daun Pohon -->
        <div class="row d-md-flex mb-5">
          <div class="col-md-6 ftco-animate">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mb-4">Mural Daun Pohon</h3>
                <p>
                  Kegiatan mural daun pohon melibatkan anak-anak RW 2 dalam proses kreatif pembuatan seni dinding. Menggunakan warna-warna alami yang terinspirasi dari daun pohon, anak-anak diajak berkreasi untuk menghasilkan karya seni yang mempercantik lingkungan.
                </p>
                <p>
                  Aktivitas ini bertujuan untuk mengembangkan kreativitas anak-anak sekaligus meningkatkan kesadaran akan pentingnya pelestarian lingkungan melalui seni dan edukasi yang menyenangkan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 ftco-animate">
            <a href="#" class="open-gallery" data-img="{{ asset('frontend/images/mural.webp') }}">
              <img src="{{ asset('frontend/images/mural.webp') }}" alt="Mural Daun Pohon" class="img-fluid rounded">
            </a>
          </div>
        </div>

        <!-- Ecobrick RW 2 -->
        <div class="row d-md-flex mb-5">
          <div class="col-md-6 ftco-animate">
            <a href="#" class="open-gallery" data-img="{{ asset('frontend/images/ecobrick.webp') }}">
              <img src="{{ asset('frontend/images/ecobrick.webp') }}" alt="Ecobrick RW 2" class="img-fluid rounded">
            </a>
          </div>
          <div class="col-md-6 ftco-animate">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mb-4">Ecobrick RW 2</h3>
                <p>
                  Program Ecobrick menggunakan botol plastik bekas untuk membentuk struktur yang kuat dan fungsional. Kami mengumpulkan botol-botol plastik dari masyarakat dan mengisinya dengan plastik yang tidak dapat didaur ulang, kemudian membentuknya menjadi tulisan "RW 2".
                </p>
                <p>
                  Inisiatif ini tidak hanya mengurangi sampah plastik di lingkungan tetapi juga menciptakan landmark unik yang menjadi simbol kebersamaan dan kepedulian terhadap lingkungan di RW 2 Sidotopo.
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
                          KKNT SDGs adalah program Kuliah Kerja Nyata yang berfokus pada Sustainable Development Goals (SDGs) atau Tujuan Pembangunan Berkelanjutan. Program ini bertujuan untuk memberikan pengalaman praktis kepada mahasiswa dalam mengimplementasikan SDGs di masyarakat melalui kegiatan nyata seperti pengembangan potensi desa, edukasi masyarakat, dan inovasi teknologi.
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
                          Tema KKNT Batch 2 Kelompok 4 adalah "Pengembangan Potensi Desa Melalui Inovasi Teknologi dan Edukasi Masyarakat untuk Mewujudkan Desa Mandiri Berkelanjutan". Kelompok Dharmakarya fokus pada pengembangan RW 2 Sidotopo melalui program-program inovatif yang melibatkan masyarakat setempat.
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
                          Dosen Pendamping Lapangan (DPL) untuk KKNT SDGs Batch 2 Kelompok 4 adalah Bapak Mohammad Syaraffah, M.I.Kom. dari Universitas Pembangunan Nasional "Veteran" Jawa Timur.
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
                          Durasi KKNT SDGs Batch 2 Kelompok 4 dimulai dari tanggal 13 Oktober untuk survei, pembukaan pada tanggal 20 Oktober, dan penutupan pada tanggal 13 November 2024. Program ini berlangsung selama kurang lebih 1 bulan dengan fokus pada implementasi program kerja di RW 2 Sidotopo.
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
                          Kegiatan KKNT meliputi: Sosialisasi Branding UMKM untuk meningkatkan kesadaran masyarakat tentang pentingnya branding, Program Kebun Asri dengan penanaman tomat, cabai, sereh, bayam brazil, adas, dan kunyit, Mural Daun Pohon yang melibatkan anak-anak RW 2, serta Ecobrick RW 2 dari botol plastik bekas. Selain itu, ada juga survei lokasi, edukasi SDGs, dan evaluasi program.
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
                          Untuk informasi lebih lanjut tentang KKNT SDGs Batch 2 Kelompok 4, silakan hubungi DPL Bapak Mohammad Syaraffah, M.I.Kom., kunjungi website resmi RW 2 Sidotopo, atau ikuti akun Instagram @dharmakaryasidotopo. Universitas Pembangunan Nasional "Veteran" Jawa Timur juga menyediakan informasi di situs resmi universitas.
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
