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
		<div class="col-md-6">
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">List Pengaturan</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					

					<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Pengaturan Biaya</th>
								<th>Biaya</th>
								<th width="100px">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($pengaturan_biaya as $u){ 
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $u->nama_pengaturan ?></td>
							<td><?php echo $u->biaya ?></td>
							<td>
								<?php echo anchor('admin/Pengaturan/edit/'.$u->biaya_kost_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php //echo anchor('admin/lantai/hapus/'.$u->data_lantai_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
							</td>
						</tr>
						<?php } ?>
									
														
						</tbody>
					</table>
				</div>
					<!-- /action toolbar -->


					
				

		</div>
		<div class="col-md-6">
				<div class="card">
					<ul class="nav nav-tabs nav-tabs-highlight mb-0">
						<li class="nav-item"><a href="#bordered-tab1" class="nav-link active" data-toggle="tab">
						Form Pengaturan Biaya</a></li>
					</ul>
					<div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
					<div class="tab-pane fade show active" id="bordered-tab1">				
					<div class="card-body">
									<form action="<?php echo base_url(). 'admin/Pengaturan/tambah_aksi'; ?>" method="post">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">
											<i class="icon-reading mr-2"></i>
											Form Pengaturan Biaya 
											<a class="float-right text-default" data-toggle="collapse" data-target="#demo2">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>
										<div class="collapse show" id="demo1">
											<div class="form-group">
												<label>Nama Pengaturan Biaya:</label>
												<input 
													type="text" 
													name="nama_pengaturan" 
													class="form-control" 
													placeholder="Pengaturan Biaya">
											</div>
										</div>
										<div class="collapse show" id="demo1">
											<div class="form-group">
												<label>Biaya</label>
												<input 
													type="text" 
													name="Biaya" 
													class="form-control" 
													placeholder="Biaya">
											</div>
										</div>
									</fieldset>
									<div class="text-right">
										  <button type=Submit class="btn btn-primary">Tambah<i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
									</div>
								</div>

				


					
				</div>

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
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#user-lists').DataTable({
		    	autoWidth: false,
		    	columnDefs: [
				{ width: 5, targets: 0 },
				{ width: 120, targets: 1 },
				{ width: 100, targets: 2 },
				
				
			],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>'
		    });
		})
	
	</script>

</body>
</html>