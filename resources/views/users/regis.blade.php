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
						<img src="{{ asset('img/logo.jpg')}}" alt="logo">
					</div>
					@if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                     @endif
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">{{ __('Register') }}</h4>
							{!! Form::open(array('route' => 'user.store_regis','method'=>'POST','enctype' => 'multipart/form-data')) !!}
								@csrf
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Contoh : Sri Dyah Wulandari','class' => 'form-control')) !!}
                                </div>
								<div class="form-group">
									<strong>Sebagai :</strong>
                                   <select class="form-control" id="roles" name="roles">
									{{-- <option value="1"> Administrator </option> --}}
									<option value="2"> Pembudidaya </option>
									<option value="3"> Supplier </option>
									<option value="4"> Pengepul </option>
								   </select>
								</div>
								<div class="form-group">
                                    <strong>Alamat:</strong>
                                    {!! Form::text('alamat', null, array('placeholder' => 'Contoh : Ds. Pekandangan Rt.54 Rw.01 Indramayu','class' => 'form-control')) !!}
                                </div>
								<div class="row">
								<div class="col-md-6 form-group">
                                    <strong>No Telepon:</strong>
                                    {!! Form::text('telepon', null, array('placeholder' => 'Contoh : 087654321455','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'Contoh : sridyhwd@gmail.com','class' => 'form-control')) !!}
                                </div>
								</div>
								<div class="row">
                                <div class="col-md-6 form-group">
                                    <strong>Password:</strong>
                                    {!! Form::password('password', array('placeholder' => 'Contoh : @Password123','class' => 'form-control')) !!}
                                </div>
                                <div class="col-md-6 form-group">
                                    <strong>Konfirmasi Password:</strong>
                                    {!! Form::password('password_confirmation', array('placeholder' => 'Contoh : @Password123','class' => 'form-control')) !!}
                                </div>
								</div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>
								<div class="mt-4 text-center">
                                    
									Don't have an account? <a href="{{ route('login') }}">Masuk</a>
								</div>
                            {!! Form::close() !!}
        

                                
							
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
