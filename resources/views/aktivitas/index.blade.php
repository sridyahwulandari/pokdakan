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
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Aktivitas Pembudidaya</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                     @endif
                     
                     <div class="text-center">
                        <form action="/aktivitas/export-pdf" method="post">
                            @csrf
                        <input type="date" name="mulai" id="" class="form-control">
                        <input type="date" name="akhir" id="" class="form-control">
                        <br>
                        <button class="btn btn-primary" type="submit">Cari berdasarkan tanggal</button>
                        {{-- <a href=""><button class="btn btn-success">Export</button></a> --}}
                    </form>
                    </div>
                     </div>
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Tambak</th>
                                    <th>Tanggal Tabur Bibit</th>
                                    <th>Jumlah Benih</th>
                                    <th>Tanggal Tabur Pakan</th>
                                    <th>Jumlah Pakan</th>
                                    <th>Jenis Pakan</th>
                                    <th>Usia Tambak</th>
                                    <th>Prediksi Panen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $row)
                                <tr>
                                    <td>{{ $row->tambak->nama_tambak }}</td>
                                    <td>{{ $row->tgl_bibit }}</td>
                                    <td>{{ $row->jumlah_bibit }}</td>
                                    <td>{{ $row->tgl_pakan }}</td>
                                    <td>{{ $row->jumlah_pakan }}</td>
                                    <td>{{ $row->jenis_pakan }}</td>
                                    <td>{{ $row->usia_tambak }}</td>
                                    <td>{{ $row->tgl_panen }}</td>
                                    <td>{{ $row->aksi }} </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="12" class="text-center">Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
	</div>
</div>

@endsection