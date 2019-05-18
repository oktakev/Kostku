	
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
				<h6 class="card-title">Menu Sarapan Kost</h6>

			</div>

			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="nav-item"><a href="" class="nav-link active"><i class="icon-book mr-2"></i> Daftar Menu</a></li>
					<li class="nav-item"><a href="#" class="nav-link"  "><i class="icon-list-ordered mr-2"></i> Daftar Pesanan</a></li></li>

				</ul>

				<div class="tab-content">
					<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
								
				<!-- Basic card -->
					<div class="row">
		<div class="col-md-6">
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">List Menu</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					

					<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Menu</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
						<tr>
							<td>1</td>
							<td>Nasi Pecel</td>
							<td>RP. 10,000</td>
							<td></td>
						</tr>	
														
						</tbody>
					</table>
				</div>
					<!-- /action toolbar -->


					
				

		</div>
		<div class="col-md-6">
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