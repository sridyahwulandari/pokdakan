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
						<div class="card-title">Edit Berita {{ $berita->judul_berita}}</div>
                        <a href="{{ route('berita.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="1" {{ $berita->kategori == '1' ? 'selected' : ''}}>
                                Berita
                            </option>
                            <option value="0"{{ $berita->kategori == '0' ? 'selected' : ''}}>
                                Edukasi
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" id="text" 
                        value="{{ $berita->judul_berita }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor1" class="form-control">{{ $berita->deskripsi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar_berita">Gambar berita</label>
                        <input type="file" name="gambar_berita" class="form-control">
                        <br>
                        <label for="gambar">Gambar Saat Ini</label><br>
                        <img src=" {{ asset('uploads/' . $berita->gambar_berita) }} " width="100">
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