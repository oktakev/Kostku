	
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
					<li class="nav-item"><a href="" class="nav-link active" ><i class="icon-vcard mr-2"></i> Daftar Penghuni</a></li>

				</ul>

				<div class="tab-content">
					<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
						<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Penghuni</th>
								<th>No Ktp</th>
								<th>Alamat</th>
								<th>No Hp</th>
								<th>No Kamar</th>
								<th>Biaya Bulanan</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach($query as $u){ 
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $u->nama_lengkap ?></td>
							<td><?php echo $u->no_ktp ?></td>
							<td><?php echo $u->alamat ?></td>
							<td><?php echo $u->no_hp ?></td>
							<td><?php echo $u->no_kamar //echo $this->libkamar->format($u->no_kamar) ?></td>
							<td><?php echo $this->lib->rupiah($u->biaya) ?></td>
							<td><?php   
									$status = $u->status;
									if ($status == "Sudah Keluar") {
									 	echo '<span class="badge badge-danger">';
									 	echo $u->status;
									 	echo '</span>';
									} 

									else if($status == "Aktif"){
									 	echo '<span class="badge badge-success">';
									 	echo $u->status;
									 	echo '</span>';
									}
								?></td>

							<td>
								<?php echo anchor('admin/penghuni/edit/'.$u->data_penghuni_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php //echo anchor('admin/lantai/hapus/'.$u->data_lantai_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
							</td>
						</tr>
						<?php } ?>
									
														
						</tbody>
					</table>
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