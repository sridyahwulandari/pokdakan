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
						<div class="card-title">Form Jadwal</div>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="tambak">Tambak</label>
                        <select name="tambak_id" class="form-control">
                            @foreach ($tambak as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_tambak }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="tgl_bibit">Tanggal Bibit</label>
                        <input type="date" name="tgl_bibit" class="form-control" id="text" placeholder="Enter Tanggal Bibit">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="jumlah_bibit">Jumlah Bibit</label>
                        <input type="text" name="jumlah_bibit" class="form-control" id="text" placeholder="Enter Jumlah Bibit">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="tgl_pakan">Tanggal Pakan</label>
                        <input type="date" name="tgl_pakan" class="form-control" id="text" placeholder="Enter Tanggal Pakan">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="jumlah_pakan">Jumlah Pakan</label>
                        <input type="text" name="jumlah_pakan" class="form-control" id="text" placeholder="Enter Jumlah Pakan">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="jenis_pakan">Jenis Pakan</label>
                        <input type="text" name="jenis_pakan" class="form-control" id="text" placeholder="Enter Jenis Pakan">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="usia_tambak">Usia Tambak</label>
                        <input type="text" name="usia_tambak" class="form-control" id="text" placeholder="Enter Usia Tambak">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="tgl_panen">Prediksi Tanggal Panen</label>
                        <input type="date" name="tgl_panen" class="form-control" id="text" placeholder="Enter Prediksi Tanggal Panen">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="aksi">Aksi</label>
                        <select name="aksi" class="form-control">
                            <option value="tebar_bibit">Tebar Bibit</option>
                        </select>
                    </div>
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