@extends('layouts.dashboard')

@section('title')
Profile
@endsection

@section('content')
{{-- <section class="content">
    <div class="">
        <div class="row">
            <div class="col-md-12 mt-3 mr-3">
                <div class="card card-profile">
                    <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('img/avatar.jpg') }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name">{{ auth()->user()->name }}</div>
                            <div class="job">{{ auth()->user()->email }}</div>
                            <div class="desc">{{ auth()->user()->telepon }}</div>
                            <div class="view-profile">
                                <a href="{{ route('user.profile')}}" class="btn btn-primary btn-block">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>

<div class="page-inner">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <img src="{{ asset('uploads/' . auth()->user()->foto) }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="card-body">
                    <table class="table table-striped mt-3">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td>{{ auth()->user()->telepon }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ auth()->user()->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
