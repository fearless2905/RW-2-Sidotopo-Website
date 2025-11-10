<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>RW 2 Sidotopo</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet" />

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">RW 2 Sidotopo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
              <a href="{{ route('home') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item dropdown {{ request()->routeIs('about') ? 'active' : '' }}">
              <a href="{{ route('about') }}" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tentang Kami
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('profil') }}">Profil</a>
                <a class="dropdown-item" href="{{ route('struktur-rw') }}">Struktur RW 2</a>
                <a class="dropdown-item" href="{{ route('pengurus-rt') }}">Pengurus RT</a>
                <a class="dropdown-item" href="{{ route('about') }}">KKN Dharmakarya</a>
              </div>
            </li>
            <li class="nav-item {{ request()->routeIs('galeri') ? 'active' : '' }}">
              <a href="{{ route('galeri') }}" class="nav-link">Galeri</a>
            </li>
            <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
              <a href="{{ route('blog') }}" class="nav-link">Berita</a>
            </li>
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
              <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    {{-- Bagian konten halaman --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">RW 2 Sidotopo</h2>
              <p>Website Informasi Seputar RW 2 Sidotopo Surabaya</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/rw2sidotopo/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Tentang Kami</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('profil') }}" class="py-2 d-block">Profil</a></li>
                <li><a href="{{ route('struktur-rw') }}" class="py-2 d-block">Struktur RW</a></li>
                <li><a href="{{ route('pengurus-rt') }}" class="py-2 d-block">Struktur RT</a></li>
                <li><a href="{{ route('about') }}" class="py-2 d-block">KKN Dharmakarya</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Dokumentasi</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('galeri') }}" class="py-2 d-block">Galeri</a></li>
                <li><a href="{{ route('blog') }}" class="py-2 d-block">Berita</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <a href="https://maps.app.goo.gl/EX9NN1gY4Lc7AT9G9" target="_blank">
                      <span class="icon icon-map-marker"></span
                      ><span class="text"
                        >JL. SIDOTOPO LOR I/21, Kelurahan Sidotopo, Kecamatan Semampir, Kota Surabaya</span
                      >
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+6285964165170</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">rw2sidotopo@gmail.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy; <script>document.write(new Date().getFullYear());</script>
              All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Kelompok 4 KKN UPNVJT 2025</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    {{-- JS --}}
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
  </body>
</html>
