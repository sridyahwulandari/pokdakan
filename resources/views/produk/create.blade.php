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
                    
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori_id" class="form-control">
                            @foreach ($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_ikan">Jenis Ikan</label>
                        <input type="text" name="jenis_ikan" class="form-control" id="text" placeholder="Enter Jenis Ikan">
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="text" placeholder="Enter Harga">
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" id="text" placeholder="Enter Stok">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="text" placeholder="Enter Alamat">
                    </div>

                    <div class="form-group">
                        <label for="notlpn">No Tlpn</label>
                        <input type="text" name="notlpn" class="form-control" id="text" placeholder="Enter No Tlpn/Wa">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor1" class="form-control"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambar_produk">Gambar Produk</label>
                        <input type="file" name="gambar_produk" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="video_produk">Video Produk</label>
                        <input type="file" name="video_produk" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Tersedia</option>
                            <option value="0">Habis</option>
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