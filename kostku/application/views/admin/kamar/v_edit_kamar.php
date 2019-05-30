	
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
						<h6 class="card-title">List Kamar</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					

					<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Lantai Kamar</th>
								<th>Nomer Kamar</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach ($query as $row){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row->nama_lantai ?></td>
							<td><?php echo $row->no_kamar ?></td>
							<td>
								<?php   
									$status = $row->status;
									if ($status == "Ditempati") {
									 	echo '<span class="text-danger">';
									 	echo $row->status;
									 	echo '</span>';
									} 

									else if($status == "Kosong"){
									 	echo '<span class="text-success">';
									 	echo $row->status;
									 	echo '</span>';
									}
								?>
							</td>
							<td>
								<?php //echo anchor('admin/kamar/edit/'.$row->data_kamar_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php echo anchor('admin/kamar/hapus/'.$row->data_kamar_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
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
						Form Kamar</a></li>
					</ul>
					<div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
					<div class="tab-pane fade show active" id="bordered-tab1">				
					<div class="card-body">
									<form action="<?php echo base_url(). 'admin/kamar/update'; ?>" method="post">
										<input type="hidden" name="data_kamar_id" value="<?php echo $row->data_kamar_id ?>">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">
											<i class="icon-reading mr-2"></i>
											Kamar Form
											<a class="float-right text-default" data-toggle="collapse" data-target="#demo2">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse show" id="demo1">
											<div class="form-group">
												<label>Pilih Lantai:</label>
												 <select class="form-control" name="nama_lantai">
										            <option>Lantai 1</option>
										            <option>Lantai 2</option>
										            <option>Lantai 3</option>
										            </select>
											</div>
										</div>

											<div class="form-group">
												<label>Nomor Kamar:</label>
												<input 
													type="text" 
													name="no_kamar" 
													class="form-control" 
													placeholder="Nomor Lantai"
													value="<?php echo $row->no_kamar ?>">
											</div>
											<div class="form-group">
												<label>Status:</label>
												<select class="form-control" name="status">
													<option>---Pilih status kamar---</option>
													<option>Kosong</option>
													<option>Ditempati</option>
												</select>
												<!-- <input 
													type="text" 
													name="status" 
													class="form-control" 
													placeholder="Status Kamar"> -->
											</div>
										</div>
									</fieldset>
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Tambah<i class="icon-paperplane ml-2"></i></button>
										<!--<input type="submit" name="Tambah">-->
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