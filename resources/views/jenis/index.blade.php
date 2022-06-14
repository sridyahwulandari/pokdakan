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
						<div class="card-title">Data Jenis Ikan</div>
                        <a href="{{ route('jenis.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Jenis Ikan</a>
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
                                <th>Jenis Ikan</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jenis as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->jenis_ikan }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    <a href="{{ route('jenis.edit', $row->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    
                                    <form action="{{ route('jenis.destroy', $row->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>Data Masih Kosong</td>
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