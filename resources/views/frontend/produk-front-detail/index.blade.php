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
                <img src="{{ asset('uploads/'. $produk->gambar_produk_supplier)}}" alt=""  class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{ $produk->supplier->bahan_baku }} - {{ $produk->jenis_pakan }}</a>
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
              <h3>Daftar Harga {{ $produk->jenis_pakan }} Per Kilogram</h3>
                <table class="col-md-8">
                  <tr>
                      <th>Author</th>
                      <th>Kategori</th>
                      <th>Jenis Ikan</th>
                      <th>Harga</th>
                      <th>Stok</th>
                  </tr>
                  <tr>
                      <td align="center">{{ $produk->users->name }}</td>
                      <td align="center">{{ $produk->supplier->bahan_baku }}</td>
                      <td align="center">{{ $produk->jenis_pakan }}</td>
                      <td align="center">Rp. {{ $produk->harga }}/Kg</td>
                      <td align="center">{{ $produk->stok }}/Kg</td>
                  </tr>
                </table>
                    
            </article><!-- End blog entry -->
            {{-- @endforeach --}}
        </div>
        <div class="col-lg-4">
          <div class="sidebar">

            <h3 class="sidebar-title">Supplier</h3>
            
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('uploads/'. $produk->users->foto)}}" alt="">
              </div> 
              <p>{{ $produk->users->name }}</p>
                <p>{{ $produk->users->alamat }}</p>
                <p>{{ $produk->users->telepon }}</p>
                <a href="https://api.whatsapp.com/send?phone={{ $produk->users->telepon }}&text=Hallo%20Minat"><img src="{{ asset('web/img/hubungiwa.png')}}"></a>
            </div><!-- End sidebar recent posts-->
	


          </div><!-- End sidebar -->
        </div><!-- End blog sidebar -->
      
    </div>

    </section><!-- End Blog Single Section -->

@endsection