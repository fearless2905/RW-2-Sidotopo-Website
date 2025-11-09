@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('{{ asset('frontend/images/wae-rebo-village.jpg') }}')"
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
              <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                        <span>Blog</span>
                        </p>
                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Tips &amp; Articles
                        </h1>
            </div>
        </div>
        </div>
        </div>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/waerebo.jpg') }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">The Wonderful of Waerebo Village</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/tangkahan.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Culture</span>
                                <h3 class="heading mt-3"><a href="#">Bathe Elephant in Tangkahan, North Sumatra, Indonesia</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/wakatobi.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">Why Wakatobi Resort is a must-visit for avid snorkelers</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/rajaampat.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">Visit Raja Ampat and Spice Islands with Coral Expeditions</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/pantaiora.jpg') }}');">
                            </a>
                            <div class="text p-4 d-block">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">Pantai Ora Maluku Dengan Suasana Layaknya Maldives - Wisata Milenial</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/panglipuran.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Culture</span>
                                <h3 class="heading mt-3"><a href="#">Wisata Desa Penglipuran Bali yang Mempesona</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/obelix.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">OBELIX SEA VIEW - Tempat Merayakan Sunset Terbaik di Jogja</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/images/toraja.jpg') }}');">
                            </a>
                            <div class="text p-4">
                                <span class="tag">Tips, Travel</span>
                                <h3 class="heading mt-3"><a href="#">Menapaki rumah adat tertua di Sulawesi di Desa Pallawa</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">August 12, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                                                        <li class="active"><span>1</span></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li><a href="#">&gt;</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        </section>



@endsection
