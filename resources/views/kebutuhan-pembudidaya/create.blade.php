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
						<div class="card-title">Form Kebutuhan Pembudidaya</div>
                        <a href="{{ route('kebutuhan-pembudidaya.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('kebutuhan-pembudidaya.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="supplier">Kategori Produk</label>
                        <select name="supplier_id" class="form-control">
                            @foreach ($supplier as $row)
                                <option value="{{ $row->id }}">{{ $row->bahan_baku }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pembudidaya">Kategori Budidaya</label>
                        <select name="pembudidaya_id" class="form-control">
                            @foreach ($pembudidaya as $row)
                                <option value="{{ $row->id }}">{{ $row->kategori_pembudidaya }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="tgl_kebutuhan">Tanggal Kebutuhan</label>
                        <input type="date" name="tgl_kebutuhan" class="form-control" id="text" placeholder="Enter Tanggal Kebutuhan">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="text" placeholder="Enter Nama">
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="text" placeholder="Enter Jenis">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="text" placeholder="Enter Jumlah">
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