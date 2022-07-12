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
						<div class="card-title">Data Tambak</div>
                        <a href="{{ route('tambak.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Produk</a>
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
                                <th>PJ</th>
                                <th>Kode Tambak</th>
                                <th>Nama Tambak</th>
                                <th>Luas Tambak</th>
                                <th>Kedalaman</th>
                                <th>Kapasitas</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tambak as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->users->name }}</td>
                                <td>{{ $row->kode_tambak }}</td>
                                <td>{{ $row->nama_tambak }}</td>
                                <td>{{ $row->luas_tambak }}</td>
                                <td>{{ $row->kedalaman }}</td>
                                <td>{{ $row->kapasitas_ikan }}</td>
                                <td><img src=" {{ asset('uploads/' . $row->gambar_tambak) }} " width="100"></td>
                                <td>
                                    @if ($row->status == '1')
                                        <button class="btn btn-success btn-round">Aktif</button>
                                        @else
                                        <button class="btn btn-darge btn-round">Tidak Aktif</button>
                                        @endif
                                </td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                            <a href="{{ route('tambak.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        <form action="{{ route('tambak.destroy', $row->id) }}" method="post" class="d-inline">
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