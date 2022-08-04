@extends('layouts.front')

@section('content')

<br>
<br>
<br>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Jadwal Pembudidaya</p>
        </header>

        <div class="row gy-4">
          @foreach ($jadwal as $key => $row)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img src="{{ asset('uploads/' . $row->tambak->gambar_tambak) }}" class="img-fluid" alt="">
              <h3>{{ $row->tambak->nama_tambak }}</h3>
              <p>Tanggal Bibit : {{date('d/m/Y',strtotime($row->tgl_bibit)) }}</p>
              <p>Tanggal Pakan : {{date('d/m/Y',strtotime($row->tgl_pakan)) }}</p>
              <p>Prediksi Panen : {{date('d/m/Y',strtotime($row->tgl_panen)) }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>

    </section><!-- End Services Section -->
@endsection