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
						<div class="card-title">Form History</div>
                        <a href="{{ route('histori.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('histori.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="event">Event</label>
                        <select name="event_id" class="form-control">
                            @foreach ($event as $row)
                                <option value="{{ $row->id }}">{{ $row->judul }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pengepul">Pengepul</label>
                        <select name="pengepul_id" class="form-control">
                            @foreach ($pengepul as $row)
                                <option value="{{ $row->id }}">{{ $row->kategori_pengepul }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_pembeli">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" class="form-control" id="text" placeholder="Enter Nama Pembeli">
                    </div>

                    <div class="form-group">
                        <label for="produk_terjual">Produk Terjual</label>
                        <input type="text" name="produk_terjual" class="form-control" id="text" placeholder="Enter Produk Terjual">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        <button class="btn btn-primary btn-sm" type="reset">Reset</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection