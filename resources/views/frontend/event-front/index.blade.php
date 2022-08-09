@extends('layouts.front')

@section('content')


   <!-- ======= Recent Blog Posts Section ======= -->
   <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Event</p>
      </header>
      <div class="text-center">
        <form action="/event-front" method="get">
          <select name="tgl_selesai" class="form-control" id="">
            <option value="">--Pilih Tanggal Yang Diinginkan--</option>
            @foreach ($tgl_selesai as $tgl_s)
            <option value="{{$tgl_s->tgl_selesai}}">{{date ('d/m/Y',strtotime($tgl_s->tgl_selesai))}}</option>
            @endforeach
          </select>
          <br>
          <button class="btn btn-primary" type="submit">Cari berdasarkan tanggal</button>
      </form>
      </div>
      <div class="row">
        @foreach ($event as $key => $row)
        <div class="col-lg-4 mt-5">
          <div class="post-box">
            <div class="post-img"><img src="{{ asset('uploads/'. $row->gambar_event)}}" class="img-fluid" alt="" width="400" height="400"></div>
            <span class="post-date">{{ $row->created_at }}</span>
            <h3 class="post-title">{{ $row->judul }}</h3>
            {{-- <p>{!! $row->deskripsi !!}</p> --}}
            <p>{{date ('d/m/Y',strtotime($row->tgl_mulai))}} s/d {{date ('d/m/Y',strtotime($row->tgl_selesai))}}</p>
            <a href="{{ route('event-front-detail', $row->slug)}}" class="readmore stretched-link mt-auto"><span>Detail</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        @endforeach
      </div>

      
    </div>

  </section><!-- End Recent Blog Posts Section --> 

@endsection