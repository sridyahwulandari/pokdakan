@extends('layouts.front')

@section('content')

<br>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi bi-boxes" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="{{ $produktotal}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Produk Supplier</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="{{ $jadwaltotal }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Jadwal</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="{{ $beritatotal }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Berita</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="{{ $usertotal}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pengguna</p>
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
        <p>Produk Supplier</p>
      </header>

      <div class="row">
        @foreach ($produk as $key => $row)
        <div class="col-lg-4 mt-5">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_produk_supplier)}}" class="img-fluid" alt="" width="400" height="400"></div>
            <span class="post-date">{{ $row->created_at }}</span>
            <h3 class="post-title">{{ $row->nama_produk }}</h3>
            <a href="{{ route('produk-front-detail', $row->slug)}}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        @endforeach
      </div>

      
    </div>

  </section><!-- End Recent Blog Posts Section --> 

@endsection