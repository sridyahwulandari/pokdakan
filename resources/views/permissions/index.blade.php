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
						<div class="card-title">Data Permission</div>
                        @can('role-create')
                        <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Permission</a>
                        @endcan
					</div>
				</div>
				<div class="card-body">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                     @endif
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Show Permission">
                                            <a href="{{ route('permissions.show',$permission->id) }}"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @can('role-edit')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Permission">
                                            <a href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        @endcan
                                        @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-link btn-danger btn-lg', 'type' => 'button', ' data-toggle' => 'tooltip', 'type' => 'button',  'data-original-title' => 'Hapus Permission']) !!}
                                        {!! Form::close() !!}
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
                    {{ $data->render() }}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection