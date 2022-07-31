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
          <li><a class="{{ Request::is('produk-front*') ? 'active font-bold' : ''}}" href="/produk-front">Produk Supplier</a></li>
          <li><a class="{{ Request::is('event-front*') ? 'active font-bold' : ''}}" href="/event-front">Event</a></li>
          <li><a class="{{ Request::is('jadwal-front*') ? 'active font-bold' : ''}}" href="/jadwal-front">Jadwal</a></li>
          <li><a class="{{ Request::is('berita-front*') ? 'active font-bold' : ''}}" href="/berita-front">Berita</a></li>
          <li><a class="{{ Request::is('formemail*') ? 'active font-bold' : ''}}" href="formemail">Hubungi Kami</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  