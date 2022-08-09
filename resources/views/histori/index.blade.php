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
                        {{-- @can('event-create') --}}
                        <a href="{{ route('histori.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
                        {{-- @endcan --}}
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
                                <th>Nama Pembeli</th>
                                <th>Pengepul</th>
                                <th>Produk Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($histori as $row)
                            <tr>
                                <td>{{ $loop->iteration ?? '' }}</td>
                                <td>{{ $row->nama_pembeli }}</td>
                                <td>{{ $row->pengepul->kategori_pengepul }}</td>
                                <td>{{ $row->produk_terjual }}</td>
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