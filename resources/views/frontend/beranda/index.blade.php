@extends('layouts.front')

@section('content')



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <marquee>
        <section id="counts" class="counts">
          <div class="container" data-aos="fade-up">
    
            <div class="row gy-4">
              @foreach ($event as $key => $row)
              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-calendar3"></i>
                  <div>
                    <p>{{date ('d/m/Y',strtotime($row->tgl_mulai))}} s/d {{date ('d/m/Y',strtotime($row->tgl_selesai))}}</p>
                    <p>{{ $row->judul}}</p>
                    <p>Stok Tersedia : {{ $row->produk_dijual}} Kg</p>
                  </div>
                </div>
              </div>
    
              
              @endforeach
            </div>
    
          </div>
        </section>
      </marquee>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Produktivitas Budidaya Ikan</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Menumbuhkan Ekosistem Akuakultur yang Berkelanjutan</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
  {{-- <header class="section-header">
    <p>Event Berjalan</p>
  </header>
  <marquee>

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          @foreach ($event as $key => $row)
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-calendar3"></i>
              <div>
                <p>{{date ('d/m/Y',strtotime($row->tgl_mulai))}} s/d {{date ('d/m/Y',strtotime($row->tgl_selesai))}}</p>
                <p>{{ $row->judul}}</p>
              </div>
            </div>
          </div>

          
          @endforeach
        </div>

      </div>
    </section><!-- End Counts Section -->
  </marquee> --}}


    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <p>Solusi Kami untuk Dunia Perikanan</p>
          </header>
  
          <div class="row">
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ asset('web/img/2.jpg')}}" class="img-fluid" alt="">
                <h3>Solusi Untuk Pembudidaya</h3>
                <p class="justify">Ekosistem budidaya ikan air payau dan ikan air tawar, dibangun untuk menigkatkan produktivitas menjaga kualitas air tambak, mencegah wabah, dan merekomendasikan sistem pengelolaan tambak berbasis data, untuk mendukung tambak para pembudidaya ikan air payau</p>
                <div data-aos="fade-up" data-aos-delay="600">
                  <div class="text-center text-lg-start">
                    <a href="/beranda-detail" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Cari Tahu Lebih Lanjut</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src="{{ asset('web/img/3.jpg')}}" class="img-fluid" alt="">
                <h3>Ikan Air Payau & Ikan Air Tawar</h3>
                Ikan Payau
                * Udang Windu
                * Ikan Paname
                * Ikan Bandeng
                * Ikan Nila
                <br>
                <br>
                Ikan Tawar
                * Ikan Lele
                * Ikan Gurame
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div data-aos="fade-up" data-aos-delay="600">
                  <div class="text-center text-lg-start">
                    <a href="/beranda-detail" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Cari Tahu Lebih Lanjut</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src="{{ asset('web/img/2.jpg')}}" class="img-fluid" alt="">
                <h3>Solusi Untuk Pengepul</h3>
                <p class="justify">Memastikan ikan berkualitas terbaik dapat dinikmati di seluruh penjuru dengan mendistribusikan hasil panen pembudidaya dalam bentuk hidup, segar, dan beku.</p>
                <br>
                <br>
                <br>
                <br>
                <div data-aos="fade-up" data-aos-delay="600">
                  <div class="text-center text-lg-start">
                    
                    <a href="/beranda-detail" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Cari Tahu Lebih Lanjut</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Values Section -->


  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Ayo Tumbuh Bersama</p>
          <p>Bergabunglah dan nikmati keuntungannya sambil menciptakan dampak.</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            @foreach ($user as $key => $row)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="{{ asset('uploads/' . $row->foto) }}" class="testimonial-img" alt="">
                  <h3>{{ $row->name }}</h3>
                  <h4>{{ $row->email }}</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

  
@endsection