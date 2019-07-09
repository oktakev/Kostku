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
				<h6 class="card-title">Detail Pesanan</h6>

			</div>

			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="nav-item"><a href="<?php echo base_url('admin/Fasilitas/laporan'); ?>" class="nav-link active"><i class="icon-clipboard3 mr-2"></i> List Detail</a></li>

				</ul>
				<div class="tab-content">
					<div class="col-md-6 alert alert-danger alert-styled-left alert-arrow-left alert-dismissible">
												<button type="button" class="close" data-dismiss="alert"><span>×</span></button>
												<span class="font-weight-semibold"><i>Pesanan Masih Pending </span>
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
				<?php 
					$no = 1;
					foreach($query as $l){ 
				?>
				
				<?php } ?>
			<div class="card-body">
				
				<fieldset>
					<legend class="font-weight-semibold text-uppercase font-size-sm">
						<i class="icon-file-text2 mr-2"></i>
						Data Pemesan
						<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
					</legend>
					<input type="hidden" name="pesan_sarapan_id" value="<?php echo $l->pesan_sarapan_id ?>">
					<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Nama Pemesan</label>
							<input 
							type="text" 
							class="form-control" 
							placeholder="Nama penghuni"
							required="" 
							name="nama_penghuni"
							disabled=""
							value="<?php echo $l->nama_lengkap?>"
							>
						</div>

						<div class="form-group">
							<label>No Kamar</label>
							<input 
							type="text" 
							class="form-control"
							placeholder="Nama Fasilitas"
							required="" 
							name="nama_fasilitas"
							disabled=""
							value="<?php echo $l->no_kamar?>"		
							>
						</div>

					<legend class="font-weight-semibold text-uppercase font-size-sm">
						<i class="fas fa-utensils mr-2"></i>
						Menu Pesanan
						<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
					</legend>
					<input type="hidden" name="pesan_sarapan_id" value="<?php echo $l->pesan_sarapan_id ?>">
					<div class="collapse show" id="demo1">
						<div class="form-group">
						
						<div class="form-group">
							<label>Menu yang dipilih</label>
							<textarea 
							rows="5" 
							cols="5" 
							class="form-control" 
							placeholder="Isi Keluhan"
							required=""
							disabled="" 
							name="keluhan"
							><?php echo $l->nama_menu?></textarea>
						</div>
					</div>

					<div class="form-group">
							<label>Harga Menu</label>
							<input 
							type="text" 
							class="form-control"
							placeholder="Nama Fasilitas"
							required="" 
							name="nama_fasilitas"
							disabled=""
							value="<?php echo $this->lib->rupiah($l->harga) ?>"		
							>
						</div>
				</fieldset>



				

				<div class="text-left">
					<button type="button" class="btn btn-primary">Submit Data <i class="icon-paperplane ml-2"></i></button>
					<button type="button" class="btn btn-danger">Batalkan Pesanan <i class="icon-x ml-2"></i></button>
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
					<i class="icon-opt mr-2"></i>
										Status Option
										<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
										<i class="icon-circle-down2"></i>
										</a>
									</label>
								</legend>
									<div class="collapse show" id="demo1">
						<div class="form-group">
							<label>Status</label>
							<select class="form-control">
								<option>---Pilih Status---</option>
								<option>Pending</option>
								<option>Selesai</option>
							</select>
						</div>
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