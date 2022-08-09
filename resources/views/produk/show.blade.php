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
                            <a href="https://api.whatsapp.com/send?phone={{ $produk->users->telepon }}&text=Hallo%20Minat"><img src="{{ asset('img/hubungi-kami.png')}}" width="250px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-8">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Detail Produk {{ $produk->jenis}}</div>
					</div>
				</div>
				<div class="card-body">
            <div class="col-lg-12">
                <table class="table table-striped mt-3">
                    <tbody>
                        <tr>
                            <td>Kategori Supplier</td>
                            <td>:</td>
                            <td>{{ $produk->supplier->bahan_baku }}</td>
                        </tr>
                        <tr>
                            <td>Nama Produk</td>
                            <td>:</td>
                            <td>{{ $produk->nama_produk }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $produk->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td>:</td>
                            <td>{{ $produk->merk }}</td>
                        </tr>
                        <tr>
                            <td>Kondisi</td>
                            <td>:</td>
                            <td>{{ $produk->kondisi }}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ $produk->berat }}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td>Rp. {{ number_format ($produk->harga) }}</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td>{{ $produk->stok }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td class="justify">{!! $produk->deskripsi !!}</td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td> <img class="card-img-top" src="{{ asset('uploads/' . $produk->gambar_produk_supplier) }}" alt="Card image cap"></td>
                        </tr>
                    </tbody>
                </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection