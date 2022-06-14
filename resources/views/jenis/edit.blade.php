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
						<div class="card-title">Edit Jenis Ikan <i>{{ $jenis->jenis_ikan }}</i></div>
                        <a href="{{ route('jenis.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                <form method="post" action="{{ route('jenis.update', $jenis->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="jenis">Jenis Ikan</label>
                        <input type="text" name="jenis_ikan" value="{{ $jenis->jenis_ikan }}" class="form-control" id="email2" placeholder="Enter Jenis Ikan">
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