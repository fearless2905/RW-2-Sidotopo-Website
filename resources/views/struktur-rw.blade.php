@extends('layouts.app')

@section('title', 'Struktur RW 2 - RW 2 Sidotopo')

@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Struktur RW 2 Sidotopo</h2>
        <span class="subheading">Pengurus RW 2 Kelurahan Sidotopo</span>
      </div>
    </div>
    <!-- Organizational Chart -->
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="org-chart">
          <!-- Top Level - Ketua RW -->
          <div class="org-level">
            <div class="org-node ketua-rw">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_2.webp') }}" alt="Ketua RW">
              </div>
              <div class="node-content">
                <h5>Ketua RW</h5>
                <p>H. Soedirman</p>
              </div>
            </div>
          </div>

          <!-- Connection Line -->
          <div class="org-connector">
            <div class="connector-line"></div>
          </div>

          <!-- Second Level - Wakil Ketua -->
          <div class="org-level">
            <div class="org-node wakil-ketua">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_3.webp') }}" alt="Wakil Ketua I">
              </div>
              <div class="node-content">
                <h6>Wakil Ketua I</h6>
                <p>Budy Harsana</p>
              </div>
            </div>
            <div class="org-node wakil-ketua">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_4.webp') }}" alt="Wakil Ketua II">
              </div>
              <div class="node-content">
                <h6>Wakil Ketua II</h6>
                <p>Murnila, SH</p>
              </div>
            </div>
            <div class="org-node wakil-ketua">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_1.webp') }}" alt="Wakil Ketua III">
              </div>
              <div class="node-content">
                <h6>Wakil Ketua III</h6>
                <p>Lidwina Carissa Sukendro</p>
              </div>
            </div>
          </div>

          <!-- Connection Line -->
          <div class="org-connector">
            <div class="connector-line"></div>
          </div>

          <!-- Third Level - Sekretaris and Bendahara -->
          <div class="org-level">
            <div class="org-node sekretaris">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_2.webp') }}" alt="Sekretaris">
              </div>
              <div class="node-content">
                <h6>Sekretaris</h6>
                <p>Untung Hidayat</p>
              </div>
            </div>
            <div class="org-node bendahara">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_3.webp') }}" alt="Bendahara">
              </div>
              <div class="node-content">
                <h6>Bendahara</h6>
                <p>Ratna Andayani</p>
              </div>
            </div>
          </div>

          <!-- Connection Line -->
          <div class="org-connector">
            <div class="connector-line"></div>
          </div>

          <!-- Fourth Level - Bidang -->
          <div class="org-level">
            <div class="org-node bidang">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_4.webp') }}" alt="Bidang Keamanan">
              </div>
              <div class="node-content">
                <h6>Bidang Keamanan</h6>
                <p>Djims Kurnia</p>
              </div>
            </div>
            <div class="org-node bidang">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_1.webp') }}" alt="Bidang Kesra dan Sosial">
              </div>
              <div class="node-content">
                <h6>Bidang Kesra dan Sosial</h6>
                <p>Hj. Sri Mulyati, SH</p>
              </div>
            </div>
          </div>

          <!-- Connection Line -->
          <div class="org-connector">
            <div class="connector-line"></div>
          </div>

          <!-- Bottom Level - Penasehat -->
          <div class="org-level">
            <div class="org-node penasehat">
              <div class="avatar-wrapper">
                <img src="{{ asset('frontend/images/person_1.webp') }}" alt="Penasehat">
              </div>
              <div class="node-content">
                <h5>Penasehat</h5>
                <p>Drs. Djumlie Nara</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.org-chart {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px 0;
}

.org-level {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 20px 0;
  flex-wrap: wrap;
  gap: 20px;
}

.org-node {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  padding: 20px;
  text-align: center;
  min-width: 200px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
}

.org-node:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.avatar-wrapper {
  margin-bottom: 15px;
}

.avatar-wrapper img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #007bff;
}

.node-content h5, .node-content h6 {
  margin: 0 0 8px 0;
  color: #333;
  font-weight: 600;
}

.node-content p {
  margin: 0;
  color: #666;
  font-size: 14px;
}

/* Different colors for hierarchy */
.penasehat {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
}

.penasehat .node-content h5,
.penasehat .node-content p {
  color: white;
}

.ketua-rw {
  background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  color: white;
}

.ketua-rw .node-content h5,
.ketua-rw .node-content p {
  color: white;
}

.wakil-ketua {
  background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  color: white;
}

.wakil-ketua .node-content h6,
.wakil-ketua .node-content p {
  color: white;
}

.sekretaris, .bendahara {
  background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
  color: white;
}

.sekretaris .node-content h6,
.sekretaris .node-content p,
.bendahara .node-content h6,
.bendahara .node-content p {
  color: white;
}

.bidang {
  background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
  color: white;
}

.bidang .node-content h6,
.bidang .node-content p {
  color: white;
}

.org-connector {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30px;
}

.connector-line {
  width: 2px;
  height: 30px;
  background: #ddd;
  position: relative;
}

.connector-line::before {
  content: '';
  position: absolute;
  top: -5px;
  left: -5px;
  width: 12px;
  height: 12px;
  background: #ddd;
  border-radius: 50%;
}

.connector-line::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: -5px;
  width: 12px;
  height: 12px;
  background: #ddd;
  border-radius: 50%;
}

/* Responsive */
@media (max-width: 768px) {
  .org-level {
    flex-direction: column;
  }

  .org-node {
    min-width: 250px;
  }
}
</style>
@endsection
