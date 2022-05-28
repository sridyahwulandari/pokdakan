 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('web/img/logo.png')}}" alt="">
        <span>POKDAKAN</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ Request::is('beranda*') ? 'active font-bold' : ''}}" href="/beranda">Beranda</a></li>
          <li><a class="{{ Request::is('tentang-kami*') ? 'active font-bold' : ''}}" href="/tentang-kami">Tentang Kami</a></li>
          <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Ikan Air Tawar</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Ikan Bandeng</a></li>
                  <li><a href="#">Ikan Kakap Putih</a></li>
                  <li><a href="#">Ikan Bawal</a></li>
                  <li><a href="#">Ikan Mujair</a></li>
                  <li><a href="#">Ikan Nila</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Ikan Air Payau</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Ikan Lele</a></li>
                  <li><a href="#">Ikan Mas</a></li>
                  <li><a href="#">Ikan Gurame</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="{{ Request::is('acara*') ? 'active font-bold' : ''}}" href="/acara">Acara</a></li>
          <li><a class="{{ Request::is('hubungi-kami*') ? 'active font-bold' : ''}}" href="/hubungi-kami">Hubungi Kami</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->