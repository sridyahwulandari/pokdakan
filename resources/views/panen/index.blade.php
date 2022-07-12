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
						<div class="card-title">Aktivitas Budidaya Ikan</div>
                        @can('jadwal-create')
                        <a href="{{ route('jadwal.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
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
                                <th>Tambak</th>
                                <th>Tanggal Tabur Bibit</th>
                                <th>Jumlah Benih</th>
                                <th>Tanggal Tabur Pakan</th>
                                <th>Jumlah Pakan</th>
                                <th>Jenis Pakan</th>
                                <th>Usia Tambak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jadwal as $row)
                            <tr>
                                <td>{{ $row->tambak->nama_tambak }}</td>
                                <td>{{ $row->tgl_bibit }}</td>
                                <td>{{ $row->jumlah_bibit }}</td>
                                <td>{{ $row->tgl_pakan }}</td>
                                <td>{{ $row->jumlah_pakan }}</td>
                                <td>{{ $row->jenis_pakan }}</td>
                                <td>{{ $row->usia_tambak }}</td>
                                <td>
                                    {{-- <button type="button" class="btn btn-success btn-sm">Kembali</button>
                                    <button type="button" class="btn btn-danger btn-sm">Telat</button> --}}
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Panen
                                          </button>
                                        </div>
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