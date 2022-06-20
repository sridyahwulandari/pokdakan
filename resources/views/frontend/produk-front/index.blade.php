@extends('layouts.front')

@section('content')

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Produk Ikan Air Tawar & Ikan Air Payau</p>
      </header>

      <div class="row">
        @foreach ($produk as $key => $row)
        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_produk)}}" class="img-fluid" alt=""></div>
            <span class="post-date">{{ $row->created_at }}</span>
            <h3 class="post-title">{{ $row->kategori->nama_kategori }} - {{ $row->jenis_ikan }}</h3>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
            <a href="/produk-front-detail" class="readmore stretched-link mt-auto"><span>Detail</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->
@endsection