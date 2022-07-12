@extends('layouts.front')

@section('content')

<br>
<br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Solusi di Setiap Langkah Budidaya</p>
        </header>

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3 class="justify">Pokdakan percaya, bahwa sektor perikanan adalah kunci mengatasi isu kelaparan dunia.</h3>

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p class="justify">Namun, besar potensinya bukan berarti mudah mencapai tujuannya. Sektor perikanan masih harus menghadapi tantangan yang kompleks untuk dapat terus produktif.</p>
                <p class="justify">Tantangan yang ada mendorong Pokdakan menciptakan solusi sistematis untuk memfasilitasi setiap langkah proses budidaya. Produk dan layanan Pokdakan yang sekarang tersedia; dan kelak dibuat, ada untuk mendukung penuh bisnis perikanan. Lebih dari itu, produk dan layanan Pokdakan ada untuk membangun ekosistem, di mana para Pembudidaya ikan dan udang dapat meningkatkan produktivitas sekaligus menciptakan lingkungan yang berkelanjutan.</p>
                <p class="justify">Mendukung finansial Pembudidaya lewat program pembiayaan, menciptakan teknologi untuk meningkatkan efisiensi pakan, mendampingi dengan ragam layanan untuk mendorong produktivitas, hingga menyalurkan hasil panen untuk budidaya yang berkelanjutan.</p>
                <p class="justify">Inilah solusi yang diberikan, agar kesejahteraan Pembudidaya dapat dihadirkan dan ketahanan pangan dapat diwujudkan.</p>
              </div><!-- End Tab 1 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="{{ asset('web/img/pokdakan.png')}}" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Solusi untuk Pembudidaya Ikan</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('web/img/solusi.jpg')}}" class="img-fluid p-8" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">
                <p class="justify">Layanan lengkap, dari hulu ke hilir untuk Pembudidaya Ikan. Rasakan kemudahan transaksi pakan, akses ke program finansial, serta berita dan info terbaru terkait dunia Akuakultur, semua tersedia untuk Pembudidaya!</p>
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Lapak Ikan</h4>
                    <p>Tempat dipasarkannya hasil panen ikan Anda, memastikan transaksi & distribusi produk yang cepat, secara langsung, dan andal.</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->


<!-- Feature Icons -->
<div class="row feature-icons" data-aos="fade-up">
  <h3>Solusi untuk
    Pembeli & Konsumen</h3>

  <div class="row">

    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
      <img src="{{ asset('web/img/solusi.jpg')}}" class="img-fluid p-8" alt="">
    </div>

    <div class="col-xl-8 d-flex content">
      <div class="row align-self-center gy-4">
        <p class="justify">Memastikan ikan air tawar & ikan air payau kualitas terbaik dapat dinikmati di seluruh penjuru negeri dengan mendistribusikan hasil panen Pembudidaya dalam bentuk hidup, segar, dan beku.</p>
        <div class="col-md-4 icon-box" data-aos="fade-up">
          <i class="ri-line-chart-line"></i>
          <div>
            <h4>Ikan Hidup</h4>
            <p class="justify">Ikan air tawar hidup, didistribusikan ke pelaku bisnis & rumah-rumah dengan teliti dan sistem terbaik untuk melindungi kualitas produk.</p>
          </div>
        </div>

        <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="100">
          <i class="ri-stack-line"></i>
          <div>
            <h4>Ikan Segar</h4>
            <p class="justify">Memenuhi kebutuhan produk perikanan segar untuk pelaku bisnis & pelanggan, hasil panen terbaik dan diambil langsung dari Pembudidaya.</p>
          </div>
        </div>

        <div class="col-md-4 icon-box" data-aos="fade-up" data-aos-delay="200">
          <i class="ri-brush-4-line"></i>
          <div>
            <h4>Ikan Beku</h4>
            <p class="justify">Hasil panen Pembudidaya yang dibekukan dengan metode mutakhir dan didistribusikan ke berbagai pelaku bisnis & pelanggan.</p>
          </div>
        </div>

      </div>
    </div>

  </div>

</div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->


@endsection