@extends('layouts.front')

@section('content')
<br>
<br>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Event</p>
        </header>
        <div class="row">
          {{-- @foreach ($event as $key => $row) --}}
          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-gambar">
                <img src="{{ asset('uploads/'. $event->gambar_event)}}" alt=""  class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{ $event->judul }}</a>
              </h2>

              <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Tanggal Mulai</td>
                        <td>:</td>
                        <td>{{ date('d-m-Y',strtotime($event->tgl_mulai))}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td>:</td>
                        <td>{{ date('d-m-Y',strtotime($event->tgl_selesai))}}</td>
                    </tr>  
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>{{ $event->lokasi }}</td>
                    </tr>  
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{ $event->berat }}</td>
                    </tr>   
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $event->harga }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{!! $event->deskripsi !!}</td>
                    </tr>          
                </tbody>
            </table>

            <h2 class="entry-title">
                <a href="">History Event Terjual</a>
              </h2>

              <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Tanggal Mulai</td>
                        <td>:</td>
                        <td>{{ date('d-m-Y',strtotime($event->tgl_mulai))}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td>:</td>
                        <td>{{ date('d-m-Y',strtotime($event->tgl_selesai))}}</td>
                    </tr>  
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>{{ $event->lokasi }}</td>
                    </tr>  
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{ $event->berat }}</td>
                    </tr>   
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $event->harga }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{!! $event->deskripsi !!}</td>
                    </tr>          
                </tbody>
            </table>
                    
            </article>
            <!-- End blog entry -->
            {{-- @endforeach --}}
        </div>
        <div class="col-lg-4">
          <div class="sidebar">

            <h3 class="sidebar-title">Detail Supplier</h3>
            
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ asset('uploads/'. $event->users->foto)}}" alt="">
              </div> 
              <div class="col-lg-12">
                <table class="table table-striped mt-3">
                    <tbody>
                        <tr>
                            <td>Nama Supplier</td>
                            <td>:</td>
                            <td>{{ $event->users->name }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon / Wa</td>
                            <td>:</td>
                            <td>{{ $event->users->telepon }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $event->users->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <a href="https://api.whatsapp.com/send?phone={{ $event->users->telepon }}&text=Hallo%20Minat"><img src="{{ asset('img/hubungi-kami.png')}}"></a>
                <br>
            </div><!-- End sidebar recent posts-->
	


          </div><!-- End sidebar -->
        </div><!-- End blog sidebar -->
      
    </div>

    </section><!-- End Blog Single Section -->

@endsection