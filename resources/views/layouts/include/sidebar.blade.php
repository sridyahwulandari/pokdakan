		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('img/avatar.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ auth()->user()->name }}
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="{{ route('user.myProfile')}}">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="{{ route('user.profile')}}">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="{{ route('userGetPassword')}}">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
									<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
											<span class="link-collapse">Logout</span>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form></a>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Manajement</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									@can('user-list')
									<li>
										<a href="{{ route('users.index') }}">
											<i class="fas fa-users"></i>
											<p>User</p>
										</a>
									</li>
									@endcan
									@can('role-list')
									<li>
										<a href="{{ route('roles.index') }}">
											<i class="fas fa-desktop"></i>
											<p>Role</p>
										</a>
									</li>
									@endcan
									@can('permission-list')
									<li>
										<a href="{{ route('permissions.index') }}">
											<i class="fas fa-desktop"></i>
											<p>Permission</p>
										</a>
									</li>
									@endcan
								</ul>
							</div>
						</li>
						@can('post-list')
						<li class="nav-item">
							<a href="{{ route('posts.index') }}">
								<i class="fas fa-desktop"></i>
								<p>Post</p>
							</a>
						</li>
						@endcan
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->