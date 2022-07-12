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
							<a  href="{{ route('home')}}">
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
						@can('user-list')
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
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-pen-square"></i>
								<p>Master Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									@can('supplier-list')
									<li>
										<a href="{{ route('supplier.index') }}">
											<i class="fas fa-desktop"></i>
											<p>Supplier</p>
										</a>
									</li>
									@endcan
									@can('budidaya-list')
									<li>
										<a href="{{ route('budidaya.index') }}">
											<i class="fas fa-desktop"></i>
											<p>Budidaya</p>
										</a>
									</li>
									@endcan
									@can('distributor-list')
									<li>
										<a href="{{ route('distributor.index') }}">
											<i class="fas fa-desktop"></i>
											<p>Pengepul</p>
										</a>
									</li>
									@endcan
								</ul>
							</div>
						</li>
						@endcan
						@can('berita-list')
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-newspaper"></i>
								<p>Konten</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									@can('berita-list')
									<li>
										<a href="{{ route('berita.index') }}">
											<i class="far fa-newspaper"></i>
											<p>Kelola Berita & Edukasi</p>
										</a>
									</li>
									@endcan
								</ul>
							</div>
						</li>
						@endcan
						@can('produk')
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-table"></i>
								<p>Supplier</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									@can('produk-supplier')
									<li>
										<a href="{{ route('produk.index') }}">
											<span class="sub-item">Produk Supplier</span>
										</a>
									</li>
									@endcan
									@can('produk-tersedia')
									<li>
										<a href="{{ route('produk.produktersedia') }}">
											<span class="sub-item">Produk Tersedia</span>
										</a>
									</li>
									@endcan
				
									
								</ul>
							</div>
						</li>
						@endcan
						@can('pembudidaya-list')
						<li class="nav-item">
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-fish"></i>
								<p>Pembudidaya</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									@can('tambak-list')
									<li>
										<a href="{{ route('tambak.index') }}">
											<span class="sub-item">Data Tambak</span>
										</a>
									</li>
									@endcan
									<li>
										<a data-toggle="collapse" href="#subnav1">
											<span class="sub-item">Data Jadwal</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ route('jadwal.index') }}">
														<span class="sub-item">Tebar Benih</span>
													</a>
												</li>
												<li>
													<a href="{{ route('pembesaran.index') }}">
														<span class="sub-item">Pembesaran Ikan</span>
													</a>
												</li>
												<li>
													<a href="{{ route('panen.index') }}">
														<span class="sub-item">Panen</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									@can('kebutuhan-pembudidaya-list')
									<li>
										<a href="{{ route('kebutuhan-pembudidaya.index') }}">
											<span class="sub-item">Kebutuhan Budidaya</span>
										</a>
									</li>
									@endcan
								</ul>
							</div>
						</li>
						@endcan
						@can('kebutuhan-pengepul-list')
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="fas fa-user"></i>
								<p>Pengepul</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									@can('kebutuhan-pengepul-list')
									<li>
										<a href="{{ route('kebutuhan-pengepul.index') }}">
											<span class="sub-item">Kebutuhan Pengepul</span>
										</a>
									</li>
									@endcan
								</ul>
							</div>
						</li>
						@endcan
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->