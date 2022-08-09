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
          {{-- <li><a class="getstarted scrollto" href="{{ route('login')}}">Login</a></li> --}}
          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                        {{-- <li><a class="{{ Request::is('booking*') ? 'active font-bold' : ''}}" href="/booking">Booking Wisata</a></li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  