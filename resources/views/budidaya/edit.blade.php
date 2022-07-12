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
						<div class="card-title">Edit Kategori Budidaya <i>{{ $budidaya->kategori_budidaya }}</i></div>
                        <a href="{{ route('budidaya.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('budidaya.update', $budidaya->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="budidaya">Nama Kategori Budidaya</label>
                        <input type="text" name="kategori_budidaya" value="{{ $budidaya->kategori_budidaya }}" class="form-control" id="email2" placeholder="Enter Kategori Budidaya">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection