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
						<div class="card-title">Edit Kebutuhan Pengepul {{ $kebutuhanpengepul->kategori}}</div>
                        <a href="{{ route('kebutuhan-pengepul.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('kebutuhan-pengepul.update', $kebutuhanpengepul->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="pengepul">Pengepul</label>

                        <select name="pengepul_id" class="form-control">
                            @foreach ($pengepul as $row)
                            @if ($row->id == $kebutuhanpengepul->pengepul_id)
                            <option value={{ $row->id }} selected='selected'> {{ $row->kategori_pengepul }}</option>
                            @else
                            <option value="{{ $row->id }}">
                                {{ $row->kategori_pengepul }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pembudidaya">Kategori Budidaya</label>

                        <select name="pembudidaya_id" class="form-control">
                            @foreach ($pembudidaya as $row)
                            @if ($row->id == $kebutuhanpengepul->pembudidaya_id)
                            <option value={{ $row->id }} selected='selected'> {{ $row->kategori_pembudidaya }}</option>
                            @else
                            <option value="{{ $row->id }}">
                                {{ $row->kategori_pembudidaya }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tgl_kebutuhan">Tanggal</label>
                        <input type="date" name="tgl_kebutuhan" class="form-control" id="date" 
                        value="{{ $kebutuhanpengepul->tgl_kebutuhan }}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="text" 
                        value="{{ $kebutuhanpengepul->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="text" 
                        value="{{ $kebutuhanpengepul->jenis }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="text" 
                        value="{{ $kebutuhanpengepul->jumlah }}">
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