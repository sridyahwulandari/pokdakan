@extends('layouts.dashboard')
@section('content')
   

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div  
<div class="page-inner mt--5">
	<div class="row">
        <div class="col-md-4">
            <div class="card card-post card-round">
                <img class="card-img-top" src="{{ asset('uploads/' . $produk->gambar_produk_supplier) }}" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="{{ asset('uploads/' . auth()->user()->foto) }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info-post ml-2">
                            <p class="username">{{ $produk->users->name }}</p>
                            <p class="date text-muted">{{ $produk->users->telepon }}</p>
                            <p class="date text-muted">{{ $produk->users->alamat }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-8">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Detail Produk {{ $produk->jenis_ikan}}</div>
                        <a href="{{ route('produk.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
            <div class="col-lg-12">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="supplier">Supplier</label>

                        <select name="supplier_id" class="form-control">
                            @foreach ($supplier as $row)
                            @if ($row->id == $produk->supplier_id)
                            <option value={{ $row->id }} selected='selected'> {{ $row->bahan_baku }}</option>
                            @else
                            <option value="{{ $row->id }}">
                                {{ $row->bahan_baku }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="jenis_pakan">Jenis Pakan</label>
                        <input type="text" name="jenis_pakan" class="form-control" id="text" 
                        value="{{ $produk->jenis_pakan }}">
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" id="text" 
                        value="{{ $produk->nama_produk }}">
                    </div>

                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="text" 
                            value="{{ $produk->merk }}">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="kondisi">Kondisi</label>
                            <input type="text" name="kondisi" class="form-control" id="text" 
                            value="{{ $produk->kondisi }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="berat">Berat</label>
                            <input type="text" name="berat" class="form-control" id="text" 
                            value="{{ $produk->berat }}">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="text" 
                            value="Rp. {{ number_format ($produk->harga) }}">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="text" 
                            value="{{ $produk->stok }}">
                        </div>
                    </div>
                    
                </form>
				</div>
			</div>
		</div>
	</div>
    <div class="col-md-12">
        <div class="card full-height">
            <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <div class="card-title">Deskripsi Produk</div>
                    <br>
                    <label for="deskripsi">{!! $produk->deskripsi !!}</label>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</div>
@endsection