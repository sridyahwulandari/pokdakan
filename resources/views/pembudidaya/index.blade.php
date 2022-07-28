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
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="card-title">Data Pembudidaya</div>
                        <a href="{{ route('pembudidaya.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Pembudidaya</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                     @endif
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori Pembudidaya</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pembudidaya as $row)
                                <tr>
                                    <td>{{ $loop->iteration ?? '' }}</td>
                                    <td>{{ $row->kategori_pembudidaya }}</td>
                                    <td>

                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Edit Pembudidaya">
                                            <a href="{{ route('pembudidaya.edit',$row->id) }}"><i class="fa fa-edit"></i></a>
                                        </button>
                                       
                                        
                                        <form action="{{ route('pembudidaya.destroy', $row->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Hapus Pembudidaya">
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

@endsection