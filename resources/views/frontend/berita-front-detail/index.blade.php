@extends('layouts.front')

@section('content')

<br>
<br>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset('uploads/'. $berita->gambar_berita)}}" alt="" class="col-lg-12 img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $berita->judul_berita }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $berita->users->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time>{{ $berita->created_at }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p class="justify">
                  {!! $berita->deskripsi !!}
                </p>

              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
@endsection