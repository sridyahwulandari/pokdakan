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
                        <div class="card-title">Data Berita</div>
                        <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Beritas</a>
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
                                    <th>Author</th>
                                    <th>Kategori</th>
                                    <th>Judul Berita</th>
                                    <th>Slug</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($berita as $row)
                                <tr>
                                    <td>{{ $loop->iteration ?? '' }}</td>
                                    <td>{{ $row->users->name }}</td>
                                    <td>
                                        @if ($row->kategori == '1')
                                            Berita
                                            @else
                                            Edukasi
                                            @endif
                                    </td>
                                    <td>{{ $row->judul_berita }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td><img src=" {{ asset('uploads/' . $row->gambar_berita) }} " width="100"></td>
                                    <td>
                                        <div class="form-button-action">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <a href="{{ route('berita.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                            </button>
                                            <form action="{{ route('berita.destroy', $row->id) }}" method="post" class="d-inline">
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

@endsection