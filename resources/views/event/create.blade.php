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
						<div class="card-title">Form Event</div>
                        <a href="{{ route('event.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="text" placeholder="Enter Nama Event">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="tgl_mulai">Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" class="form-control" id="text" placeholder="Enter Tanggal Mulai">
                    </div>

                    <div class=" col-md-4 form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" name="tgl_selesai" class="form-control" id="text" placeholder="Enter Tanggal Selesai">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="text" placeholder="Enter Lokasi">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="produk_dijual">Produk Yang Dijual</label>
                            <input type="number" name="produk_dijual" class="form-control" id="text" placeholder="Enter Produk Yang Dijual">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="berat">Berat</label>
                            <select name="berat" class="form-control">
                                <option value="1">Kg</option>
                                <option value="0">Ton</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="text" placeholder="Enter Lokasi">
                        </div>
                        </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor1" class="form-control"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar_event">Gambar Event</label>
                        <input type="file" name="gambar_event" class="form-control">
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