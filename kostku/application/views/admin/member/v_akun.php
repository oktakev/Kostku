	
<!DOCTYPE html>
<html lang="en">
        <head>
            <?php $this->load->view("admin/part/head.php") ?>
		</head>

<body>
	<?php $this->load->view("admin/part/navbar.php") ?>
<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content header-elements-md-inline">
			<br>
		</div>
	</div>
	<!-- /page header -->
	<!-- Page content -->
	<div class="page-content pt-0">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Basic card -->
				<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header header-elements-inline">
				<h6 class="card-title">Account Member</h6>

			</div>

			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="nav-item"><a href="#" class="nav-link active"  "><i class="icon-list-ordered mr-2"></i> Member</a></li>

				</ul>

				<div class="tab-content">
					<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
								
				<!-- Basic card -->
					<div class="row">
		<div class="col-md-5">
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">List Member</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					

					<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Akun Terdaftar</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($akun as $a){ 
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $a->username ?></td>
							<td><?php echo $this->libdate->convert($a->created_date) ?></td>
							<td><a href="<?php echo base_url('admin/Penghuni'); ?>">Detail</a></td>

							<td>
								<?php //echo anchor('admin/penghuni/edit/'.$a->user_id,'<button class="btn btn-success"><i class="icon-search4"></i></button>'); ?>
								<?php //echo anchor('admin/pesan_sarapan/edit/'.$u->pesan_sarapan_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php //echo anchor('admin/lantai/hapus/'.$u->data_lantai_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
							</td>
						</tr>
						<?php } ?>
									
														
						</tbody>
					</table>
				</div>
					<!-- /action toolbar -->


					

		</div>
		
				<!-- <div class="col-md-7">
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Detail Member</h6>

						<div class="header-elements">
						
	                	</div>
					</div>
				<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>Nama Penghuni</th>
								<th>Nomor Kamar</th>
								<th>Alamat</th>
								<th>Nomor Hp</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
						<tr>
							<td>Oktakev</td>
							<td>02</td>
							<td>Jl Sadar No 16 RT 009 RW 004 Petojo Utara Gambir Jakarta Pusat</td>
							<td>089123123123</td>
							<td><a href="<?php echo base_url('admin/Penghuni'); ?>">Detail</a></td>			
						</tr>
					
									
														
						</tbody>
					</table>-->
		<!--<div class="col-md-6">
				<div class="card">
					<ul class="nav nav-tabs nav-tabs-highlight mb-0">
						<li class="nav-item"><a href="#bordered-tab1" class="nav-link active" data-toggle="tab">
							Form Menu</a>
						</li>
					</ul>
					<div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
					<div class="tab-pane fade show active" id="bordered-tab1">				
					<div class="card-body">
									<form action="<?php echo base_url(). 'admin/lantai/tambah_aksi'; ?>" method="post">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">
											<i class="icon-file-plus mr-2"></i>
											Tambah Menu
											<a class="float-right text-default" data-toggle="collapse" data-target="#demo2">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse show" id="demo1">
											<div class="form-group">
												<label>Nama Menu:</label>
												<input 
													type="text" 
													name="nama_lantai" 
													class="form-control" 
													placeholder="Nama Menu">
											</div>
											<div class="form-group">
												<label>Harga :</label>
												<input 
													type="number" 
													name="harga" 
													class="form-control" 
													placeholder="Harga menu">
											</div>
										</div>
									</fieldset>
									<div class="text-right">
										  <button type="button" class="btn btn-primary">Tambah<i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
									</div>
								</div>
							-->

				


					
				</div>

		</div>
	</div>
	</div>				
					</div>
					</div>
					</div>
					</div>

					

				</div>
			</div>
		</div>

		<!-- /action toolbar -->





	</div>

</div>


			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<!-- Footer -->
    <?php $this->load->view("admin/part/footer.php") ?>
		
	<!-- /footer -->
		<!-- Theme JS files -->
	<?php $this->load->view("admin/part/js.php") ?>
	
	

</body>
</html>