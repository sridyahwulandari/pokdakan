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
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Produk</div>
                        @can('produk-create')
                        <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
                        @endcan
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
                                        @can('produk-edit')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Produk">
                                            <a href="{{ route('produk.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        @endcan
                                        @can('produk-delete')
                                        <form action="{{ route('produk.destroy', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        </form>
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
</div>
@endsection