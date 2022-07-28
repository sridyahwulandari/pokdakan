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
						<div class="card-title">Data Kebutuhan Pembudidaya</div>
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
                                <th>Kategori Produk</th>
                                <th>Kategori Budidaya</th>
                                <th>Tanggal Kebutuhan</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kebutuhanpembudidaya as $row)
                            <tr>
                                <td>{{ $row->supplier->bahan_baku }}</td>
                                <td>{{ $row->pembudidaya->kategori_pembudidaya }}</td>
                                <td>{{ $row->tgl_kebutuhan }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jenis }}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>
                                    <div class="form-button-action">
                                        
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Detail Produk">
                                            <a href="{{ route('kebutuhan-pembudidaya.show', $row->id)}}"><i class="fa fa-eye"></i></a>
                                        </button>
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