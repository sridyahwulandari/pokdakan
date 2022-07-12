@extends('layouts.front')

@section('content')
<br>
<br>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Produk Ikan Air Tawar & Ikan Air Payau</p>
        </header>
        <div class="row">
          {{-- @foreach ($produk as $key => $row) --}}
          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-gambar">
                <img src="{{ asset('uploads/'. $produk->gambar_produk)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{ $produk->kategori->nama_kategori }} - {{ $produk->jenis_ikan }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $produk->users->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="">{{ $produk->created_at }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html"><td>
                    @if ($produk->status == '1')
                        Tersedia
                        @else
                        Habis
                        @endif
                </td></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!! $produk->deskripsi !!}
                </p>
              <h3>Daftar Harga {{ $produk->jenis_ikan }} Per Kilogram</h3>
                <table class="col-md-8">
                  <tr>
                      <th>Author</th>
                      <th>Kategori</th>
                      <th>Jenis Ikan</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Alamat</th>
                      <th>No Tlpn/Wa</th>
                  </tr>
                  <tr>
                      <td align="center">{{ $produk->users->name }}</td>
                      <td align="center">{{ $produk->kategori->nama_kategori }}</td>
                      <td align="center">{{ $produk->jenis_ikan }}</td>
                      <td align="center">Rp. {{ $produk->harga }}/Kg</td>
                      <td align="center">{{ $produk->stok }}/Kg</td>
                      <td align="center">{{ $produk->alamat }}</td>
                      <td align="center">{{ $produk->notlpn }}</td>
                  </tr>
                </table>
                    
            </article><!-- End blog entry -->
            {{-- @endforeach --}}
            <div class="entry-video">
              <video width="500" height="500" controls preload>
                <source src="{{ asset('uploads/'. $produk->video_produk)}}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Produk</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('uploads/'. $produk->gambar_produk)}}" alt="">
                <h4><a href="blog-single.html">{{ $produk->kategori->nama_kategori }} - {{ $produk->jenis_ikan }}</a></h4>
                <time datetime="2020-01-01">{{ $produk->created_at }}</time>
              </div>
            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Blog</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('uploads/'. $produk->gambar_produk)}}" alt="">
                <h4><a href="blog-single.html">{{ $produk->kategori->nama_kategori }} - {{ $produk->jenis_ikan }}</a></h4>
                <time datetime="2020-01-01">{{ $produk->created_at }}</time>
              </div>

            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->
      </div>
    </section><!-- End Blog Single Section -->

@endsection