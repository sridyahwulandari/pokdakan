@extends('layouts.front')

@section('content')
  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Didukung oleh kemajuan teknologi di bidang Budidaya Perikanan</h3>

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <p class="justify">Baik Pembudidaya ikan maupun udang memiliki peran yang sangat vital dalam berkontribusi terhadap ketahanan pangan dunia. Untuk mewujudkan mimpi besar tersebut, kami membangun ekosistem di mana para Pembudidaya ikan dan udang dapat dengan mudah meningkatkan produktivitas, sekaligus menciptakan lingkungan yang lebih berkelanjutan, aman, dan adil bagi mereka. Dengan cara ini, kami dapat menyediakan produk ikan dan udang berkualitas tinggi dan kaya nutrisi yang diperoleh langsung dari Pembudidaya.</p>
              </div><!-- End Tab 1 Content -->
            </div>

          </div>

          <div class="col-lg-6">
            <img src="{{ asset('web/img/features-2.png')}}" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->


      </div>

    </section><!-- End Features Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <p>Pegawai <br>
                Dinas Perikanan dan Kelautan</p>
            </header>
    
            <div class="row gy-4">
              @foreach ($pegawai as $key => $row)
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="{{ asset('uploads/'. $row->foto)}}" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $row->nama_pegawai }}</h4>
                    <span>{{ $row->jabatan }}</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
    
          </div>
    
        </section><!-- End Team Section -->

@endsection