@extends('layouts.front')

@section('content')

<br>
<br>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @foreach ($berita as $key => $row)
          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('uploads/'. $row->gambar_berita)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{ $row->judul_berita }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $row->users->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time>{{ $row->created_at }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <div class="read-more">
                  <a href="{{ route('berita-front-detail', $row->slug)}}">Baca Selengkapnya</a>
                </div>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="{{ asset('uploads/'. $row->gambar_berita)}}" alt="">
                  <h4><a href="blog-single.html">{{ $row->judul_berita }}</a></h4>
                  <time>{{ $row->created_at }}</time>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
          @endforeach
        </div>

      </div>
    </section><!-- End Blog Section -->
@endsection