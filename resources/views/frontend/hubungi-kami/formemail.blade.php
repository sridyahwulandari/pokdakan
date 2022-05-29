@extends('layouts.front')

@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

	<div class="container" data-aos="fade-up">

	  <header class="section-header">
		<p>Hubungi Kami</p>
	  </header>

	  <div class="row gy-4">

		<div class="col-lg-6">

		  <div class="row gy-4">
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-geo-alt"></i>
				<h3>Alamat</h3>
				<p class="justify">Jl. Raya Pabean Udik No.1, Pabeanudik, Kec. Indramayu, Kabupaten Indramayu<br>Jawa Barat 45219</p>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-telephone"></i>
				<h3>Tlp/Fax</h3>
				<p>(0234) 272767<br>089520435270 (WhatsApp)</p>
				<br>
				<br>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-envelope"></i>
				<h3>Email</h3>
				<p>indramayuperikanan@yahoo.com</p>
				<br>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-clock"></i>
				<h3>Jam Kerja</h3>
				<p>Senin - Jumat<br>9:00 - 17:00</p>
			  </div>
			</div>
		  </div>

		</div>

		<div class="col-lg-6">
		  <form method="post" action="/kirim">
			@csrf
			<div class="row gy-4">
			  <div class="col-md-6">
				<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
			  </div>

			  <div class="col-md-6 ">
				<input type="email" class="form-control" name="email" placeholder="Email Anda" required>
			  </div>

			  <div class="col-md-12">
				<input type="text" class="form-control" name="judul" placeholder="Judul" required>
			  </div>

			  <div class="col-md-12">
				<textarea class="form-control" name="pesan" rows="6" placeholder="Pesan" required></textarea>
			  </div>

			  <div class="text-right">
				<button type="submit" class="btn btn-primary">Kirim ke Email Saya</button>
			  </div>
			</div>
		  </form>

		</div>

	  </div>

	</div>

  </section><!-- End Contact Section -->


@endsection