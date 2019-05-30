<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand wmin-0 mr-5">
			<a href="#" class="d-inline-block">
				
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			

			<ul class="navbar-nav ml-auto">
			

			

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user mr-2" height="34" alt=""></i>
						<span>Admin</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<!-- <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
					
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a> -->
						<a href="<?php echo base_url('login/logout'); ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar	<!-- Secondary navbar -->
	<div class="navbar navbar-expand-md navbar-light">
		<div class="text-center d-md-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
				<i class="icon-unfold mr-2"></i>
				Navigation
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo base_url('admin/dashboard'); ?>" class="navbar-nav-link active">
						<i class="icon-home4 mr-2"></i>
						Dashboard
					</a>
				</li>
				<li class="nav-item dropdown">
					<a href="<?php echo base_url('admin/penghuni'); ?>" class="navbar-nav-link ">
						<i class="icon-users4 mr-2"></i>
						Manajemen Penghuni
					</a>


				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown" >
						<i class="fas fa-utensils mr-2"></i>
						Makanan
					</a>


					<div class="dropdown-menu">

					<a href="<?php echo base_url('admin/sarapan'); ?>" class="dropdown-item "><i class="icon-file-plus"></i> Menu Makanan</a>
					<a href="<?php echo base_url('admin/pesan_sarapan'); ?>" class="dropdown-item "><i class="icon-books"></i> Daftar Pesanan</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle " data-toggle="dropdown">
						<i class="icon-cash3 mr-2"></i>
						Pembayaran
					</a>


					<div class="dropdown-menu">

						<a href="" class="dropdown-item "><i class="far fa-credit-card"></i>  Pembayaran Sarapan</a>
						<a href="" class="dropdown-item "><i class="fas fa-list-ol"></i> Pembayaran Kost</a>
						<a href="<?php echo base_url('admin/monitor'); ?>" class="dropdown-item "><i class="icon-book  mr-2"></i> Monitoring Pembayaran</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle " data-toggle="dropdown">
						<i class="icon-calculator2 mr-2"></i>
						Pengeluaran
					</a>


					<div class="dropdown-menu">

						<a href="<?php echo base_url('admin/PengeluaranFix'); ?>" class="dropdown-item "><i class="far fa-credit-card"></i>  Pengeluaran Fix </a>
						<a href="<?php echo base_url('admin/pengeluaran'); ?>" class="dropdown-item "><i class="fas fa-list-ol"></i> Pengeluaran Barang</a>
						
					</div>
				</li>
			

				<li class="nav-item nav-item-levels mega-menu-full">
					<a href="#" class="navbar-nav-link   dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group mr-2"></i>
						Master Data
					</a>

					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-body">

							<div class="row">
								
								<div class="col-md-3">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Manajemen Kamar</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li><a href="<?php echo base_url('admin/kamar'); ?>" class="dropdown-item rounded"><i class="icon-office"></i>Data Kamar</a></li>
											<li>
												<a href="<?php echo base_url('admin/lantai'); ?>" class="dropdown-item rounded">
													<i class="icon-stack2"></i> Data Lantai
												</a>
											</li>
											
										</ul>
									</div>
								</div>
								<div class="col-md-3">
									<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">
										Pengaturan Kost
									</div>
									<div class="dropdown-divider mb-2"></div>
									<div class="dropdown-item-group mb-3 mb-md-0">
										<ul class="list-unstyled">
											<li>
												<a href="<?php echo base_url('admin/pengaturan'); ?>" class="dropdown-item rounded">
													<i class="icon-cash"></i> Pengaturan Biaya Kost & Lain - Lain
												</a>
											</li>
											
										</ul>
									</div>
								</div>
								
								
								
							</div>

						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle " data-toggle="dropdown">
						<i class="fas fa-clipboard-list"></i>
						Fasilitas
					</a>

					<div class="dropdown-menu">
						<a href="<?php echo base_url('admin/fasilitas'); ?>" class="dropdown-item "><i class="fas fa-list"></i> Daftar Fasilitas</a>
						<a href="<?php echo base_url('admin/fasilitas/laporan'); ?>"" class="dropdown-item "><i class="fas fa-clipboard"></i> List Laporan</a>
						<!-- <a href="../seed/layout_boxed.html" class="dropdown-item "><i class="icon-align-center-horizontal"></i> Laporan Tahunan</a> -->


					<!-- 	<div class="dropdown-header">Basic layouts</div>
						<div class="dropdown-submenu">
							<a href="#" class="dropdown-item dropdown-item-open dropdown-toggle"><i class="icon-grid2"></i> Sidebars</a>
							<div class="dropdown-menu">
								<a href="../seed/sidebar_none.html" class="dropdown-item active">No sidebar</a>
								<a href="../seed/sidebar_main.html" class="dropdown-item">1 sidebar</a>
								<div class="dropdown-submenu">
									<a href="#" class="dropdown-item dropdown-toggle">2 sidebars</a>
									<div class="dropdown-menu">
										<a href="../seed/sidebar_secondary.html" class="dropdown-item">Secondary sidebar</a>
										<a href="../seed/sidebar_right.html" class="dropdown-item">Right sidebar</a>
									</div>
								</div>
								<div class="dropdown-submenu">
									<a href="#" class="dropdown-item dropdown-toggle">3 sidebars</a>
									<div class="dropdown-menu">
										<a href="../seed/sidebar_right_hidden.html" class="dropdown-item">Right sidebar hidden</a>
										<a href="../seed/sidebar_right_visible.html" class="dropdown-item">Right sidebar visible</a>
									</div>
								</div>
								<a href="../seed/sidebar_sections.html" class="dropdown-item">Sectioned sidebar</a>
								<a href="../seed/sidebar_stretched.html" class="dropdown-item">Stretched sidebar</a>
							</div>


						</div> -->
						
						
					</div>
				</li>

					
				
				
			</ul>

			<ul class="navbar-nav ml-md-auto">
			<ul class="navbar-nav ml-md-auto">
			

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="d-md-none ml-2">Dropdown</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="<?php echo base_url('admin/akun'); ?>" class="dropdown-item"><i class="icon-user-lock"></i> Account Member</a>
						<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
						<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
					</div>
				</li>
			</ul>

		</div>
	</div>
	<!-- /secondary navbar -->
