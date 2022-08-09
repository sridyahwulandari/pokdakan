@extends('layouts.dashboard')
@section('content')
   

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
        <div class="col-md-4">
            <div class="card card-post card-round">
                <h3>Detail Supplier</h3>
                <img class="card-img-top" src="{{ asset('uploads/' . auth()->user()->foto) }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Supplier</td>
                                        <td>:</td>
                                        <td>{{ $kebutuhanpengepul->users->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>No Telepon / Wa</td>
                                        <td>:</td>
                                        <td>{{ $kebutuhanpengepul->users->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $kebutuhanpengepul->users->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://api.whatsapp.com/send?phone={{ $kebutuhanpengepul->users->telepon }}&text=Hallo%20Minat"><img src="{{ asset('img/hubungi-kami.png')}}" width="250px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-8">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Detail Kebutuhan Pembudidaya {{ $kebutuhanpengepul->jenis}}</div>
					</div>
				</div>
				<div class="card-body">
            <div class="col-lg-12">
                <table class="table table-striped mt-3">
                    <tbody>
                        <tr>
                            <td>Kategori Pengepul</td>
                            <td>:</td>
                            <td>{{ $kebutuhanpengepul->pengepul->kategori_pengepul }}</td>
                        </tr>
                        <tr>
                            <td>Kategori Pembudidaya</td>
                            <td>:</td>
                            <td>{{ $kebutuhanpengepul->pembudidaya->kategori_pembudidaya }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Kebutuhan</td>
                            <td>:</td>
                            <td>{{date('d-m-Y',strtotime($kebutuhanpengepul->tgl_kebutuhan)) }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $kebutuhanpengepul->nama }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $kebutuhanpengepul->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>{{ $kebutuhanpengepul->jumlah }}</td>
                        </tr>
                    </tbody>
                </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection