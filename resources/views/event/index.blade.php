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
						<div class="card-title">Data Event</div>
                        @can('event-create')
                        <a href="{{ route('event.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
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
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Produk Dijual</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                @can('event-create')
                                <th>Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($event as $row)
                            <tr>
                                <td>{{ $loop->iteration ?? '' }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->tgl_mulai }}</td>
                                <td>{{ $row->tgl_selesai }}</td>
                                <td>{{ $row->lokasi }}</td>
                                <td>{!! $row->deskripsi !!}</td>
                                <td>{{ $row->produk_dijual }}</td>
                                <td>Rp. {{ number_format($row->harga) }}</td>
                                <td><img src=" {{ asset('uploads/' . $row->gambar_event) }} " width="100"></td>
                                @can('event-create')
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                            <a href="{{ route('event.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        <form action="{{ route('event.destroy', $row->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                    </div>
                                </td>
                                @endcan
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12" class="text-center">Data Masih Kosong</td>
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