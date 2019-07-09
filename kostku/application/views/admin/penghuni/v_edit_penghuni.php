	
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
				<h6 class="card-title">Daftar Semua Penghuni Kost</h6>

			</div>

			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="nav-item"><a href="<?php echo base_url('admin/penghuni'); ?>" class="nav-link " ><i class="icon-vcard mr-2"></i> Daftar Penghuni</a></li>
					
					<li class="nav-item"><a href="" class="nav-link active"><i class="icon-user-plus mr-2"></i> Edit Penghuni</a></li>

				</ul>
<?php 
		$no = 1;
		foreach($query as $u){ 
		?>
	<?php } ?>		
				<div class="tab-content">
					<?php   
									$status = $u->status;
									if ($status == "Sudah Keluar") {
									 	echo '<div class="col-md-6 alert alert-danger alert-styled-left alert-arrow-left alert-dismissible">
												<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
												<span class="font-weight-semibold">Status Penghuni: </span>';
											 	echo $u->status;
									 	echo '</span>';
									} 

									else if($status == "Aktif"){
									 	echo '<div class="col-md-6 alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
											<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
											<span class="font-weight-semibold">Status Penghuni: </span>';
									 	echo $u->status;
									 	echo '</span>';
									}
								?>
					 
	<br/>
</div>
<form 
action="#" 
data-parsley-validate=""
method="post"
enctype="multipart/form-data"

>
<div class="row">
	

	<div class="col-md-6">
		<div class="card">
			<div class="card-header header-elements-inline">
				<!-- <h5 class="card-title">Form Data Penghuni Baru</h5> -->

			</div>
			
			<div class="card-body">
				<form action="<?php echo base_url(). 'admin/penghuni/update'; ?>" method="post">
				<fieldset>
					<legend class="font-weight-semibold text-uppercase font-size-sm">
						<i class="icon-file-text2 mr-2"></i>
						Data Diri Penghuni
						<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
					</legend>
					<input type="hidden" name="data_penghuni_id" value="<?php echo $u->data_penghuni_id ?>">
					<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Nama Penghuni:</label>
							<input type="hidden" name="data_penghuni_id" value="<?php echo $u->data_penghuni_id ?>">

							<input 
							type="text" 
							class="form-control" 
							placeholder="Nama Penghuni"
							required="" 
							name="nama_penghuni"
							value="<?php echo $u->nama_lengkap?>"
							>
						</div>

						<div class="form-group">
							<label>No KTP</label>
							<input 
							type="text" 
							class="form-control"
							placeholder="No KTP"
							required="" 
							name="no_ktp"
							value="<?php echo $u->no_ktp?>"		
							>
						</div>

						
						<div class="form-group">
							<label>Alamat:</label>
							<textarea 
							rows="5" 
							cols="5" 
							class="form-control" 
							placeholder="Alamat"
							required="" 
							name="alamat"
							><?php echo $u->alamat?></textarea>
						</div>
						<div class="form-group">
							<label>No Hp:</label>
							<input 
							type="text" 
							class="form-control" 
							placeholder="No HP"
							required="" 
							name="no_hp"
							value="<?php echo $u->no_hp?>"
							>
						</div>
					</div>
				</fieldset>



				

				<div class="text-left">
					<button type="Submit" class="btn btn-primary">Submit Data <i class="icon-paperplane ml-2"></i></button>
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card">
			<div class="card-header header-elements-inline">
				<!-- <h5 class="card-title">Form Data Penghuni Baru</h5> -->

			</div>

			<div class="card-body">
				<legend class="font-weight-semibold text-uppercase font-size-sm">
					<i class="icon-file-text2 mr-2"></i>
										Kamar Saat Ini
										<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
										<i class="icon-circle-down2"></i>
										</a>
									</label>
								</legend>
									<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Nomor Kamar:</label>
							<select class="form-control">
								<option><?php echo $u->no_kamar?></option>
							</select>
						</div>
						</div>
					</div>
						<div class="card-body">
				<legend class="font-weight-semibold text-uppercase font-size-sm">
					<i class="icon-calculator mr-2"></i>
										Biaya Kost
										<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
										<i class="icon-circle-down2"></i>
										</a>
									</label>
								</legend>
									<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Biaya :</label>
							<div class="form-group">
							<input 
							type="text" 
							class="form-control" 
							placeholder="No HP"
							required="" 
							name="biaya"
							value="<?php echo $u->biaya?>"
							>
						</div>
						</div>
			
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
	<!-- Footer -->
	<?php $this->load->view("admin/part/footer.php") ?>
	<!-- /footer -->
			<!-- Theme JS files -->
			<?php $this->load->view("admin/part/js.php") ?>
	<script type="text/javascript">
	
		    $('#user-lists').DataTable({
		    	autoWidth: false,
		    	columnDefs: [
				{ width: 5, targets: 0 },
				{ width: 120, targets: 1 },
				{ width: 100, targets: 2 },
				
				
			],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>'
		    });
	
	</script>

</body>
</html>