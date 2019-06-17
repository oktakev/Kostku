	
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
					<li class="nav-item"><a href="<?php echo base_url('admin/akun'); ?>" class="nav-link " ><i class="icon-list-ordered mr-2"></i> member</a></li>
					
					<li class="nav-item"><a href="" class="nav-link active"><i class="icon-plus3 mr-2"></i> Buat Akun</a></li>

				</ul>
				<div class="tab-content">
					 
	<br/>
</div>
<form 
action="<?php echo base_url(). 'admin/akun/add'; ?>"
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
				
				<fieldset>
					<legend class="font-weight-semibold text-uppercase font-size-sm">
						<i class="icon-file-text2 mr-2"></i>
						buat Akun penghuni
						<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
					</legend>
					<input type="hidden" name="id" value="">
					<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Username</label>
							<input 
							type="text" 
							class="form-control" 
							placeholder=""
							required="" 
							name="username"
							value=""
							>

						</div>

						<div class="form-group">
							<label>Password</label>
							<input 
							type="password" 
							class="form-control"
							placeholder=""
							required="" 
							name="password"
							value=""		
							>
						</div>

						<input type="hidden" name="tanggal">
				<div class="text-left">
					<button type="submit" class="btn btn-primary">Submit Data <i class="icon-paperplane ml-2"></i></button>
				</div>

			</div>
		</div>
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