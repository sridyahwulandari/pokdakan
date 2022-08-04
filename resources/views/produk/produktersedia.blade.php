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
<div class="row ">
    @foreach ($produk as $key => $row)
    <div class="col-md-4 mt-3">
        <div class="card card-post card-round">
            <img class="card-img-top" src="{{ asset('uploads/' . $row->gambar_produk_supplier) }} " alt="Card image cap">
            <div class="card-body">
                <div class="separator-solid"></div>
                <p class="card-category text-info mb-1">{{$row->supplier->bahan_baku}}</a></p>
                <h3 class="card-title">
                    <a href="#">
                        {{$row->nama_produk}}
                    </a>
                </h3>
                <p class="card-text">{!!$row->deskripsi!!}</p>
                <a href="{{ route('produk.show', $row->id)}}" class="btn btn-primary btn-rounded btn-sm">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="text-center mt-4">
          <form action="/produktersedia" method="get">
            @csrf
            <input type="hidden" name="more_view" value="{{($total_view)}}" class="form-control">
            <button class="btn btn-primary" type="submit">{{$total_view}} More Views</button>
          </form>
        </div>

@endsection