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
						<div class="card-title">Edit Kebutuhan Pembudidaya {{ $kebutuhanpembudidaya->kategori}}</div>
                        <a href="{{ route('kebutuhan-pembudidaya.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('kebutuhan-pembudidaya.update', $kebutuhanpembudidaya->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="pembudidaya">Kategori Budidaya</label>

                        <select name="pembudidaya_id" class="form-control">
                            @foreach ($pembudidaya as $row)
                            @if ($row->id == $kebutuhanpembudidaya->pembudidaya_id)
                            <option value={{ $row->id }} selected='selected'> {{ $row->kategori_pembudidaya }}</option>
                            @else
                            <option value="{{ $row->id }}">
                                {{ $row->kategori_pembudidaya }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="supplier">Supplier</label>

                        <select name="supplier_id" class="form-control">
                            @foreach ($supplier as $row)
                            @if ($row->id == $kebutuhanpembudidaya->supplier_id)
                            <option value={{ $row->id }} selected='selected'> {{ $row->bahan_baku }}</option>
                            @else
                            <option value="{{ $row->id }}">
                                {{ $row->bahan_baku }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="date" 
                        value="{{ $kebutuhanpembudidaya->tanggal }}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="text" 
                        value="{{ $kebutuhanpembudidaya->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="text" 
                        value="{{ $kebutuhanpembudidaya->alamat }}">
                    </div>

                    <div class="form-group">
                        <label for="notlpn">No Tlpn</label>
                        <input type="text" name="notlpn" class="form-control" id="text" 
                        value="{{ $kebutuhanpembudidaya->notlpn }}">
                    </div>

                    <div class="form-group">
                        <label for="kebutuhan_pengepul">Kebutuhan Pengepul</label>
                        <input type="text" name="kebutuhan_pengepul" class="form-control" id="text" 
                        value="{{ $kebutuhanpembudidaya->kebutuhan_pengepul }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="text" 
                        value="{{ $kebutuhanpembudidaya->jumlah }}">
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