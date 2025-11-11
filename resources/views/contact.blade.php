@extends('layouts.app')

@section('title', 'Kontak - RW 2 Sidotopo')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/bromo.webp') }}')"
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
              <span class="mr-2"><a href="{{ url('/') }}">Beranda</a></span>
              <span>Kontak</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              Hubungi Kami
            </h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Informasi Kontak</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p>
              <span>Alamat:</span> JL. SIDOTOPO LOR I/21, Kelurahan Sidotopo, Kecamatan Semampir, Kota Surabaya
            </p>
          </div>
          <div class="col-md-3">
            <p>
              <span>Telepon:</span> <a href="tel://6285964165170">+62 859-6416-5170</a>
            </p>
          </div>
          <div class="col-md-3">
            <p>
              <span>Email:</span>
              <a href="mailto:dharmakaryasidotopo@gmail.com">dharmakaryasidotopo@gmail.com</a>
            </p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="https://rw2sidotopo.com">rw2sidotopo.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <div class="contact-form">
              <h3>Kirim Pesan</h3>
              <p>Jika Anda memiliki pertanyaan atau ingin memberikan saran, silakan hubungi kami melalui informasi kontak di atas atau kirim pesan melalui formulir berikut:</p>
              <form action="#">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Nama Anda"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Email Anda"
                  />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subjek" />
                </div>
                <div class="form-group">
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Pesan"
                  ></textarea>
                </div>
                <div class="form-group">
                  <input
                    type="submit"
                    value="Kirim Pesan"
                    class="btn btn-primary py-3 px-5"
                  />
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6" id="map">
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
      </div>
    </section>



@endsection
