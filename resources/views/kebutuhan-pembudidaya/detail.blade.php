@extends('layouts.dashboard')
@section('content')
   

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
{{-- <div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Produk Tersedia</div>
					</div>
				</div>
				<div class="card-body">
                    @if(Session::has('success'))

                        <div class="alert alert-primary">
                            {{ Session('success') }}
                        </div>
                    @endif
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Jenis Pakan</th>
                                <th>Merk</th>
                                <th>Kondisi</th>
                                <th>Berat</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Gambar Produk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $row)
                            <tr>
                                <td>{{ $row->supplier->bahan_baku }}</td>
                                <td>{{ $row->nama_produk }}</td>
                                <td>{{ $row->jenis_pakan }}</td>
                                <td>{{ $row->merk }}</td>
                                <td>{{ $row->kondisi }}</td>
                                <td>{{ $row->berat }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->stok }}</td>
                                <td><img src=" {{ asset('uploads/' . $row->gambar_produk_supplier) }} " width="100"></td>
                                <td>
                                    <div class="form-button-action">
                                        
                                        @can('produk-show')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Produk">
                                            <a href="{{ route('produk.show', $row->id)}}"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan
                                        
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                          
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div> --}}

<!-- Customized Card -->
{{-- <div class="row ">
    @foreach ($kebutuhanpembudidaya as $key => $row)
    <div class="col-md-4 mt-3">
        <div class="card card-post card-round">
            <div class="card-body">
                <div class="separator-solid"></div>
                <p class="card-category text-info mb-1">Kebutuhan Pembudidaya</a></p>

                <div class="project-info-box">
                    <p><b>Kategori Supplier:</b> {{ $row->supplier->bahan_baku }}</p>
                    <p><b>Kategori Pembudidaya:</b> {{ $row->pembudidaya->kategori_pembudidaya }}</p>
                    <p><b>Nama Pembudidaya:</b> {{ $row->users->name }}</p>
                    <p><b>No Telpon:</b> {{ $row->users->telepon }}</p>
                    <p><b>Alamat:</b> {{ $row->users->alamat }}</p>
                    <p class="mb-0"><b>Tanggal Kebutuhan:</b> {{ $row->tgl_kebutuhan }}</p>
                    <p class="mb-0"><b>Nama:</b> {{ $row->nama }}</p>
                    <p class="mb-0"><b>Jenis:</b> {{ $row->jenis }}</p>
                    <p class="mb-0"><b>Jumlah:</b> {{ $row->jumlah }} Kg</p>
                </div><!-- / project-info-box -->
    
                <div class="project-info-box mt-0 mb-0">
                    <p class="mb-0">
                        <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                        <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                        <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
                        <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div><!-- / project-info-box -->
            </div>
        </div>
    </div>
    @endforeach
</div> --}}

        <div class="page-inner">
            <div class="row">
                @foreach ($kebutuhanpembudidaya as $key => $row)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kebutuhan Pembudidaya</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped mt-3">
                                <tbody>
                                    <tr>
                                        <td>Kategori Supplier</td>
                                        <td>:</td>
                                        <td>{{ $row->supplier->bahan_baku }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Pembudidaya</td>
                                        <td>:</td>
                                        <td>{{ $row->pembudidaya->kategori_pembudidaya }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kebutuhan</td>
                                        <td>:</td>
                                        <td>{{ $row->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Kebutuhan</td>
                                        <td>:</td>
                                        <td>{{ $row->tgl_kebutuhan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis</td>
                                        <td>:</td>
                                        <td>{{ $row->jenis }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td>:</td>
                                        <td>{{ $row->jumlah }} Kg</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('kebutuhan-pembudidaya.show', $row->id)}}" class="btn btn-primary btn-rounded btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

<div class="text-center mt-4">
          <form action="/detailkebutuhanpembudidaya" method="get">
            @csrf
            <input type="hidden" name="more_view" value="{{($total_view)}}" class="form-control">
            <button class="btn btn-primary" type="submit">{{$total_view}} More Views</button>
          </form>
        </div>

@endsection