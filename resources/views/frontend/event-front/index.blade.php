@extends('layouts.front')

@section('content')


   <!-- ======= Recent Blog Posts Section ======= -->
   <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Event</p>
      </header>

      <div class="row">
        @foreach ($event as $key => $row)
        <div class="col-lg-4 mt-5">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_event)}}" class="img-fluid" alt="" width="400" height="400"></div>
            <span class="post-date">{{ $row->created_at }}</span>
            <h3 class="post-title">{{ $row->judul }}</h3>
            <p>{!! $row->deskripsi !!}</p>
            <p>{{ $row->tgl_mulai }} s/d {{ $row->tgl_selesai }}</p>
            {{-- <a href="{{ route('produk-front-detail', $row->slug)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div>

        @endforeach
      </div>

      
    </div>

  </section><!-- End Recent Blog Posts Section --> 

@endsection