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
						<div class="card-title">Data Users</div>
                        @can('user-create')
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-plus"></i>Tambah Users</a>
                        @endcan
					</div>
				</div>
				<div class="card-body">
                    
				<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $val)
                                            {{-- <label class="badge badge-success">{{ $val }}</label> --}}
                                            <span class="badge badge-pill badge-success">{{ $val }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td><img src=" {{ asset('uploads/' . $user->foto) }} " width="100"></td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Show User">
                                            <a href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @can('user-edit')
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit User">
                                            <a href="{{ route('users.edit',$user->id) }}"><i class="fa fa-edit"></i></a>
                                        </button>
                                        @endcan
                                        @can('user-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-link btn-danger btn-lg', 'type' => 'button', ' data-toggle' => 'tooltip', 'type' => 'button',  'data-original-title' => 'Hapus User']) !!}
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