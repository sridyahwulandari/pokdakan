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
                        <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
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
                                <th>ID</th>
                                <th>Author</th>
                                <th>Kategori</th>
                                <th>Jenis Ikan</th>
                                <th>Slug</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Alamat</th>
                                <th>No Tlpn/Wa</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Video</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->users->name }}</td>
                                <td>{{ $row->kategori->nama_kategori }}</td>
                                <td>{{ $row->jenis_ikan }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->harga }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->notlpn }}</td>
                                <td>{!! $row->deskripsi !!}</td>
                                <td><img src=" {{ asset('uploads/' . $row->gambar_produk) }} " width="100"></td>
                                <td><video src=" {{ asset('uploads/' . $row->video_produk) }} " width="100"></td>
                                <td>
                                    @if ($row->status == '1')
                                        Tersedia
                                        @else
                                        Habis
                                        @endif
                                </td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Artikel">
                                            <a href="{{ route('produk.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        <form action="{{ route('produk.destroy', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
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