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
						<div class="card-title">Form Produk</div>
                        <a href="{{ route('produk.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="supplier">Kategori</label>
                            <select name="supplier_id" class="form-control">
                                @foreach ($supplier as $row)
                                    <option value="{{ $row->id }}">{{ $row->bahan_baku }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-8 form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="text" placeholder="Enter Nama Produk">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="text" placeholder="Enter Jenis">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="text" placeholder="Enter Merk">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="kondisi">Kondisi</label>
                            <select name="kondisi" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Habis</option>
                            </select>
                        </div>
                    </div>

                    
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="berat">Berat</label>
                        <input type="text" name="berat" class="form-control" id="text" placeholder="Enter Berat">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="text" placeholder="Enter Harga">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" id="text" placeholder="Enter Stok">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor1" class="form-control"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar_produk_supplier">Gambar Produk</label>
                        <input type="file" name="gambar_produk_supplier" class="form-control">
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