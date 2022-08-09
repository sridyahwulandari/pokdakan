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
						<div class="card-title">Edit Tambak {{ $tambak->kode_tambak}}</div>
                        <a href="{{ route('tambak.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('tambak.update', $tambak->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="nama_tambak">Nama Tambak</label>
                        <input type="text" name="nama_tambak" class="form-control" id="text" 
                        value="{{ $tambak->nama_tambak }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="luas_tambak">Luas Tambak</label>
                        <input type="text" name="luas_tambak" class="form-control" id="text" 
                        value="{{ $tambak->luas_tambak }}">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="kedalaman">Kedalaman</label>
                        <input type="text" name="kedalaman" class="form-control" id="text" 
                        value="{{ $tambak->kedalaman }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="kapasitas_ikan">Kapasitas Ikan</label>
                        <input type="text" name="kapasitas_ikan" class="form-control" id="text" 
                        value="{{ $tambak->kapasitas_ikan }}">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $tambak->status == '1' ? 'selected' : ''}}>
                                Aktif
                            </option>
                            <option value="0"{{ $tambak->status == '0' ? 'selected' : ''}}>
                                Tidak Aktif
                            </option>
                        </select>
                    </div>
                </div>
                    

                    <div class="form-group">
                        <label for="gambar_tambak">Gambar tambak</label>
                        <input type="file" name="gambar_tambak" class="form-control">
                        <br>
                        <label for="gambar">Gambar Saat Ini</label><br>
                        <img src=" {{ asset('uploads/' . $tambak->gambar_tambak) }} " width="100">
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