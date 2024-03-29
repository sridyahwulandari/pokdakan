@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css')}}">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ asset('img/logo_ikan.png')}}" alt="logo">
					</div>
					@if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                     @endif
					{{-- <div class="card fat">
						<div class="card-body">
							<h4 class="card-title">{{ __('Register') }}</h4>
							{!! Form::open(array('route' => 'user.store_regis','method'=>'POST','enctype' => 'multipart/form-data')) !!}
								@csrf
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Nama Lengkap','class' => 'form-control')) !!}
									@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

								<div class="form-group">
									<label for="name">Nama Lengkap</label>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
									<div class="invalid-feedback">
										Nama Salah
									</div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div class="form-group">
									<strong>Sebagai :</strong>
                                   <select class="form-control" id="roles" name="roles" required>
									<option value="2"> Pembudidaya </option>
									<option value="3"> Supplier </option>
									<option value="4"> Pengepul </option>
								   </select>
								</div>
								<div class="form-group">
                                    <strong>Alamat:</strong>
                                    {!! Form::text('alamat', null, array('placeholder' => 'Alamat Lengkap','class' => 'form-control', 'required')) !!}
                                </div>
								<div class="row">
								<div class="col-md-6 form-group">
                                    <strong>No Telepon:</strong>
                                    {!! Form::text('telepon', null, array('placeholder' => '087654321455','class' => 'form-control', 'required')) !!}
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'nama@gmail.com','class' => 'form-control', 'required')) !!}
                                </div>
								</div>
								<div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Password:</strong>
                                    {!! Form::password('password', array('placeholder' => '@Password123','class' => 'form-control', 'required')) !!}
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Konfirmasi Password:</strong>
                                    {!! Form::password('password_confirmation', array('placeholder' => '@Password123','class' => 'form-control', 'required')) !!}
                                </div>
								</div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>
								<div class="mt-4 text-center">
                                    
									Sudah Punya Akun <a href="{{ route('login') }}">Masuk</a>
								</div>
                            {!! Form::close() !!}
						</div>
					</div> --}}

					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registrasi</h4>
							<form action="{{ route('user.store_regis') }}" method="POST" enctype="multipart/form-data" class="my-login-validation" novalidate="">
								@csrf
                                <div class="form-group">
									<label for="name">Nama Lengkap</label>
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
									<div class="invalid-feedback">
										Nama Lengkap Salah
									</div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>

								<div class="form-group">
									<strong>Sebagai :</strong>
									<select id="roles" type="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" value="{{ old('roles') }}" required autocomplete="roles" autofocus>
										<option value=""> -- Pilih Sebagai -- </option>
										<option value="2"> Pembudidaya </option>
										<option value="3"> Supplier </option>
										<option value="4"> Pengepul </option>
									</select>
									@error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>

								<div class="form-group">
									<label for="alamat">Alamat Lengkap</label>
                                    <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
									<div class="invalid-feedback">
										Alamat Lengkap Salah
									</div>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>

								<div class="row">
									<div class="col-md-6 form-group">
										<label for="telepon">Telepon</label>
										<input id="telepon" type="telepon" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>
										<div class="invalid-feedback">
											Telepon Salah
										</div>
										@error('telepon')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>

									<div class="col-md-6 form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
										<div class="invalid-feedback">
											Email Salah
										</div>
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 form-group">
										<label for="password">Password</label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
										<div class="invalid-feedback">
											Password Salah
										</div>
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>

									<div class="col-md-6 form-group">
										<label for="password_confirmation">Konfirmasi Password</label>
										<input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus>
										<div class="invalid-feedback">
											Konfirmasi Password Salah
										</div>
										@error('password_confirmation')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>

								<div class="form-group row">
									<div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
								</div>

								<button type="submit" class="btn btn-primary">Daftar</button>
								<div class="mt-4 text-center">
									Sudah Punya Akun <a href="{{ route('login') }}">Masuk</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('js/my-login.js')}}"></script>
</body>
</html>
@endsection
