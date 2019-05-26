		
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
				<h6 class="card-title">Menu Makanan Kost</h6>

			</div>

			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li class="nav-item"><a href="<?php echo base_url('admin/Sarapan'); ?>" class="nav-link"><i class="icon-book mr-2"></i> Daftar Menu</a></li>
					<li class="nav-item"><a href="#" class="nav-link active"  "><i class="icon-list-ordered mr-2"></i> Daftar Pesanan</a></li></li>

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
						<h6 class="card-title">List Pemesan</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					

					<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pemesan</th>
								<th>Nomor Kamar</th>
								<th>Tanggal Pesan</th>
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
							<td><?php echo $u->no_kamar ?></td>
							<td><?php echo $this->libdate->convert($u->tanggal) ?></td>
							<td>
								<?php echo anchor('admin/pesan_sarapan/index/'.$u->pesan_sarapan_id,'<button onclick="myFunction()" class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php //echo anchor('admin/lantai/hapus/'.$u->pesan_sarapan_id,'<button class="btn btn-primary"><i class="icon-check"></i></button>'); ?>
								
								
							</td>
						</tr>
						<?php } ?>
									
														
						</tbody>
					</table>
				</div>
					<!-- /action toolbar -->


					

		</div>
		
				<div class="col-md-7">
				<div id="detailmakan" class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Detail Pesanan</h6>

						<div class="header-elements">
						
	                	</div>
					</div>
				<table id="" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pemesan</th>
								<th>Nomor Kamar</th>
								<th>Nama Menu</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						
						$no = 1;
						foreach($detailquery as $qd){ 
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $qd->nama_lengkap ?></td>
							<td><?php echo $qd->no_kamar ?></td>
							<td><?php echo $qd->nama_menu ?></td>
							<td><?php echo $this->lib->rupiah($qd->harga) ?></td>
							<td>1</td>
							<td>
								<?php //echo anchor('admin/pesan_sarapan/edit/'.$u->pesan_sarapan_id,'<button class="btn btn-success"><i class="icon-search4"></i></button>'); ?>
								<?php //echo anchor('admin/pesan_sarapan/edit/'.$u->pesan_sarapan_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

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
	
	<script>
function myFunction() {
  var x = document.getElementById("detailmakan");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>