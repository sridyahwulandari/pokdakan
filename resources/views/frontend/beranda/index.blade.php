@extends('layouts.front')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Produktivitas Budidaya Ikan</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Menumbuhkan Ekosistem Akuakultur yang Berkelanjutan</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="https://bit.ly/pokdakan" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Gabung Bersama Kami</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('web/img/1.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <p>Solusi Kami untuk Dunia Perikanan</p>
          </header>
  
          <div class="row">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ asset('web/img/values-1.png')}}" class="img-fluid" alt="">
                <h3>Solusi Untuk Pembudidaya Ikan Air Tawar</h3>
                <p class="justify">Ekosistem budidaya ikan air payau, dibangun untuk menigkatkan produktivitas menjaga kualitas air tambak, mencegah wabah, dan merekomendasikan sistem pengelolaan tambak berbasis data, untuk mendukung tambak para pembudidaya ikan air payau</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src="{{ asset('web/img/values-2.png')}}" class="img-fluid" alt="">
                <h3>Solusi Untuk Pembudidaya Ikan Air Payau</h3>
                <p class="justify">Ekosistem budidaya ikan air payau, dibangun untuk menigkatkan produktivitas menjaga kualitas air tambak, mencegah wabah, dan merekomendasikan sistem pengelolaan tambak berbasis data, untuk mendukung tambak para pembudidaya ikan air payau</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src="{{ asset('web/img/values-3.png')}}" class="img-fluid" alt="">
                <h3>Solusi Untuk Pembeli & Konsumen</h3>
                <p class="justify">Memastikan ikan berkualitas terbaik dapat dinikmati di seluruh penjuru dengan mendistribusikan hasil panen pembudidaya dalam bentuk hidup, segar, dan beku.</p>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Values Section -->

          <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Features</h2>
          <p>Laboriosam et omnis fuga quis dolor direda fara</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{ asset('web/img/features.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Eos aspernatur rem</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Facilis neque ipsa</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Volup amet voluptas</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Rerum omnis sint</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Alias possimus</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Repellendus mollitia</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->
      </div>

    </section><!-- End Features Section -->
@endsection