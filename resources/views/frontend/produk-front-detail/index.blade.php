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

              <p><b>Nama Supplier:</b> {{ $produk->users->name }}</p>
              <p><b>Kategori:</b> {{ $produk->supplier->bahan_baku }}</p>
              <p><b>Jenis Ikan:</b> {{ $produk->jenis_pakan }}</p>
              <p><b>Harga:</b> Rp. {{ number_format ($produk->harga) }}</p>
              <p class="mb-0"><b>Stok:</b> {{ $produk->stok }}</p>
              <p><b>Kondisi:</b> @if ($produk->kondisi == '1')
                <button class="btn btn-success btn-round">Tersedia</button>
                @else
                <button class="btn btn-darge btn-round">Habis</button>
                @endif</p>
                {{-- <table class="col-md-8">
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
                </table> --}}
                    
            </article><!-- End blog entry -->
            {{-- @endforeach --}}
        </div>
        <div class="col-lg-4">
          <div class="sidebar">

            <h3 class="sidebar-title">Detail Supplier</h3>
            
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('uploads/'. $produk->users->foto)}}" alt="">
              </div> 
              <div class="col-lg-12">
                <table class="table table-striped mt-3">
                    <tbody>
                        <tr>
                            <td>Nama Supplier</td>
                            <td>:</td>
                            <td>{{ $produk->users->name }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon / Wa</td>
                            <td>:</td>
                            <td>{{ $produk->users->telepon }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $produk->users->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <a href="https://api.whatsapp.com/send?phone={{ $produk->users->telepon }}&text=Hallo%20Minat"><img src="{{ asset('img/hubungi-kami.png')}}"></a>
                <br>
            </div><!-- End sidebar recent posts-->
	


          </div><!-- End sidebar -->
        </div><!-- End blog sidebar -->
      
    </div>

    </section><!-- End Blog Single Section -->

@endsection