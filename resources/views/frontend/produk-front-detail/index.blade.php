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
          @foreach ($produk as $key => $row)
          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-video">
                <video src="{{ asset('uploads/'. $row->video_produk)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{ $row->kategori->nama_kategori }} - {{ $row->jenis_ikan }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $row->users->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="">{{ $row->created_at }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {!! $row->deskripsi !!}
                </p>

                
                <img src="{{ asset('uploads/'. $row->gambar_produk)}}" class="img-fluid" alt="">


              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->
            @endforeach
        </div>

      </div>
    </section><!-- End Blog Single Section -->

@endsection