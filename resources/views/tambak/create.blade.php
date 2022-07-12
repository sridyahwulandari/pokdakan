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
						<div class="card-title">Form Tambak</div>
                        <a href="{{ route('tambak.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('tambak.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    
                    <div class="form-group">
                        <label for="kode_tambak">Kode Tambak</label>
                        <input type="text" name="kode_tambak" class="form-control" id="text" placeholder="Enter Kode Tambak">
                    </div>

                    <div class="form-group">
                        <label for="nama_tambak">Nama Tambak</label>
                        <input type="text" name="nama_tambak" class="form-control" id="text" placeholder="Enter Nama Tambak">
                    </div>

                    <div class="form-group">
                        <label for="luas_tambak">Luas Tambak</label>
                        <input type="text" name="luas_tambak" class="form-control" id="text" placeholder="Enter Luas Tambak">
                    </div>

                    <div class="form-group">
                        <label for="kedalaman">Kedalaman</label>
                        <input type="text" name="kedalaman" class="form-control" id="text" placeholder="Enter Kedalaman">
                    </div>

                    <div class="form-group">
                        <label for="kapasitas_ikan">Kapasitas Ikan</label>
                        <input type="text" name="kapasitas_ikan" class="form-control" id="text" placeholder="Enter Kapasitas Ikan">
                    </div>

                    <div class="form-group">
                        <label for="gambar_tambak">Gambar Tambak</label>
                        <input type="file" name="gambar_tambak" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
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