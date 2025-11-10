@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('frontend/images/galeri.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs">
          <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
          <span>Galeri</span>
        </p>
        <h1 class="mb-3 bread">Galeri RW 2 Sidotopo</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="gallery">

      {{-- ===== Kegiatan Sosial RW 2 ===== --}}
      <h3 class="mb-4">KKNT SDGs UPNVJT<span class="text-muted small"> 13 Oktober 2025-13 November 2025</span></h3>
      <div class="owl-carousel owl-theme mb-5" id="carousel-kegiatan-sosial">
        @foreach ([
          'frontend/images/survei.jpg',
          'frontend/images/kontenblog1.jpg',
          'frontend/images/dharmakarya.jpg',
          'frontend/images/blog1.jpg',
          'frontend/images/galeri1.jpg',
          'frontend/images/galeri2.jpg',
          'frontend/images/galeri3.jpg',
          'frontend/images/galeri4.jpg',
          'frontend/images/galeri5.jpg',
          'frontend/images/galeri6.jpg',
          'frontend/images/galeri7.jpg',
          'frontend/images/galeri8.jpg',
          'frontend/images/galeri9.jpg',
          'frontend/images/galeri10.jpg',
          'frontend/images/galeri11.jpg',
          'frontend/images/galeri12.jpg',
          'frontend/images/galeri13.jpg',
          'frontend/images/galeri14.jpg',
        ] as $img)
          <div class="item">
            <div class="card shadow-sm border-0">
              <a href="#" class="open-gallery" data-img="{{ asset($img) }}">
                <img src="{{ asset($img) }}" class="card-img-top rounded" alt="KKNT SDGs UPNVJT" style="height: 220px; object-fit: cover;">
              </a>
            </div>
          </div>
        @endforeach
      </div>

      {{-- ===== KKN Dharmakarya ===== --}}
      <h3 class="mb-4">Posyandu <span class="text-muted small"></span></h3>
      <div class="owl-carousel owl-theme mb-5" id="carousel-kkn-dharmakarya">
        @foreach ([
          'frontend/images/posyandu1.jpg',
          'frontend/images/posyandu2.jpg',
          'frontend/images/posyandu3.jpg',
          'frontend/images/posyandu4.jpg',
          'frontend/images/posyandu5.jpg',
          'frontend/images/posyandu6.jpg',
          'frontend/images/posyandu7.jpg',
          'frontend/images/posyandu8.jpg',
        ] as $img)
          <div class="item">
            <div class="card shadow-sm border-0">
              <a href="#" class="open-gallery" data-img="{{ asset($img) }}">
                <img src="{{ asset($img) }}" class="card-img-top rounded" alt="KKN Dharmakarya" style="height: 220px; object-fit: cover;">
              </a>
            </div>
          </div>
        @endforeach
      </div>

      {{-- ===== Dokumentasi Kegiatan ===== --}}
      <h3 class="mb-4">Senam Bersama <span class="text-muted small"> Setiap Minggu</span></h3>
      <div class="owl-carousel owl-theme mb-5" id="carousel-dokumentasi-kegiatan">
        @foreach ([
          'frontend/images/senam1.jpg',
          'frontend/images/senam2.jpg',
          'frontend/images/senam3.jpg',
        ] as $img)
          <div class="item">
            <div class="card shadow-sm border-0">
              <a href="#" class="open-gallery" data-img="{{ asset($img) }}">
                <img src="{{ asset($img) }}" class="card-img-top rounded" alt="Dokumentasi Kegiatan" style="height: 220px; object-fit: cover;">
              </a>
            </div>
          </div>
        @endforeach
      </div>

      {{-- ===== Bank Sampah ===== --}}
      <h3 class="mb-4">Bank Sampah <span class="text-muted small"> </span></h3>
      <div class="owl-carousel owl-theme mb-5" id="carousel-bank-sampah">
        @foreach ([
          'frontend/images/banksampah1.jpg',
          'frontend/images/banksampah2.jpg',
          'frontend/images/banksampah3.jpg',
          'frontend/images/banksampah4.jpg',
        ] as $img)
          <div class="item">
            <div class="card shadow-sm border-0">
              <a href="#" class="open-gallery" data-img="{{ asset($img) }}">
                <img src="{{ asset($img) }}" class="card-img-top rounded" alt="Bank Sampah" style="height: 220px; object-fit: cover;">
              </a>
            </div>
          </div>
        @endforeach
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

  /* Owl Carousel Custom Styles */
  .owl-carousel .item {
    margin: 0 10px;
  }

  .owl-carousel .owl-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
  }

  .owl-carousel .owl-nav button.owl-prev,
  .owl-carousel .owl-nav button.owl-next {
    background: rgba(0, 0, 0, 0.5) !important;
    color: white !important;
    border: none !important;
    padding: 10px 15px !important;
    border-radius: 50% !important;
    font-size: 18px !important;
    position: absolute;
  }

  .owl-carousel .owl-nav button.owl-prev {
    left: -20px;
  }

  .owl-carousel .owl-nav button.owl-next {
    right: -20px;
  }

  .owl-carousel .owl-nav button.owl-prev:hover,
  .owl-carousel .owl-nav button.owl-next:hover {
    background: rgba(0, 0, 0, 0.8) !important;
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

    // Inisialisasi Owl Carousel untuk setiap section
    $('#carousel-kegiatan-sosial').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
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

    $('#carousel-kkn-dharmakarya').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
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

    $('#carousel-dokumentasi-kegiatan').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
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

    $('#carousel-bank-sampah').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
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
