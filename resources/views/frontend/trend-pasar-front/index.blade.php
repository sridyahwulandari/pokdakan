@extends('layouts.front')

@section('content')

<br>
<br>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Produk Tersedia</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Produk Habis</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Acara</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Blog</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Produk Tersedia Ikan Air Tawar & Ikan Air Payau</p>
      </header>

      <div class="row">
        @foreach ($produk as $key => $row)
        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_produk)}}" class="img-fluid" alt=""></div>
            <span class="post-date">{{ $row->created_at }} - @if ($row->status == '1')
              Tersedia
              @else
              Habis
              @endif</span>
            <h3 class="post-title">{{ $row->kategori->nama_kategori }} - {{ $row->jenis_ikan }}</h3>
            <a href="{{ route('produk-front-detail', $row->slug)}}" class="readmore stretched-link mt-auto"><span>Detail</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        @endforeach
      </div>

      <header class="section-header">
        <p>Produk Habis Ikan Air Tawar & Ikan Air Payau</p>
      </header>

      <div class="row">
        @foreach ($produk as $key => $row)
        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_produk)}}" class="img-fluid" alt=""></div>
            <span class="post-date">{{ $row->created_at }} - @if ($row->status == '1')
              Tersedia
              @else
              Habis
              @endif</span>
            <h3 class="post-title">{{ $row->kategori->nama_kategori }} - {{ $row->jenis_ikan }}</h3>
            <a href="{{ route('produk-front-detail', $row->slug)}}" class="readmore stretched-link mt-auto"><span>Detail</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->
@endsection