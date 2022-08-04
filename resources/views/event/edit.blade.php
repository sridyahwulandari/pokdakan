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
						<div class="card-title">Edit Event {{ $event->kode_tambak}}</div>
                        <a href="{{ route('event.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="text" 
                        value="{{ $event->judul }}">
                    </div>

                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" class="form-control" id="text" 
                        value="{{ $event->tgl_mulai }}">
                    </div>

                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" name="tgl_selesai" class="form-control" id="text" 
                        value="{{ $event->tgl_selesai }}">
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="text" 
                        value="{{ $event->lokasi }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor1" class="form-control">{{ $event->deskripsi }}</textarea>
                    </div>

                <div class="row">
                    <div class="col-md-8 form-group">
                        <label for="produk_dijual">Produk Yang Dijual</label>
                        <input type="text" name="produk_dijual" class="form-control" id="text" 
                        value="{{ $event->produk_dijual }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="berat">Status</label>
                        <select name="berat" class="form-control">
                            <option value="1" {{ $event->berat == '1' ? 'selected' : ''}}>
                                Kg
                            </option>
                            <option value="0"{{ $event->berat == '0' ? 'selected' : ''}}>
                                Ton
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="text" 
                    value="{{ $event->harga }}">
                </div>

                <div class="form-group">
                    <label for="gambar_event">Gambar event</label>
                    <input type="file" name="gambar_event" class="form-control">
                    <br>
                    <label for="gambar">Gambar Saat Ini</label><br>
                    <img src=" {{ asset('uploads/' . $event->gambar_event) }} " width="100">
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