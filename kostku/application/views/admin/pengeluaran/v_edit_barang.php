	
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
	<div class="col-md-3">
		<div class="card">
			<ul class="nav nav-tabs nav-tabs-highlight mb-0">
				<li class="nav-item"><a href="#bordered-tab1" class="nav-link active" data-toggle="tab">
										Update Pengeluaran
									</a></li>


			</ul>

			<div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
				<div class="tab-pane fade show active" id="bordered-tab1">
<?php 
		foreach($pengeluaran_barang as $p){ 
		?>
	<?php } ?>
					<div class="card-body">
						<form 
						action="<?php echo base_url(). 'admin/pengeluaran/tambah_aksi'; ?>" 
						method="post"
						enctype="multipart/form-data"
						>
						<input type="hidden" name="id" value="<?php echo $p->pengeluaran_barang_id ?>">
						<fieldset>
							<legend class="font-weight-semibold text-uppercase font-size-sm">
								<i class="icon-paste4 mr-2"></i>
								Pengeluaran Biaya Form
								<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
							<i class="icon-circle-down2"></i>
						</a>
							</legend>

							<div class="collapse show" id="demo1">
								<div class="form-group">
									<label>Kategori:</label>
									<select name="kategori" class="form-control" value="">
										<option><?php echo $p->kategori ?></option>		
									</select>
								</div>
								
								<div class="form-group">
									<label>Keterangan Pengeluaran :</label>
									<textarea class="form-control" name="keterangan" placeholder="Keterangan Pengeluaran" required=""><?php echo $p->keterangan ?></textarea>
									
								</div>
								<div class="form-group">
									<label>Biaya:</label>
									<input 
									type="number" 
									name="biaya" 
									class="form-control" 
									placeholder="Biaya"
									required="" 
									value="<?php echo $p->biaya ?>" 
									>
								</div>
								<div class="form-group">
									<label>Tanggal Pengeluaran:</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>

										<input 
										type="date" 
										class="form-control daterange-single" 
										required="" 
										name="tanggal"
										value="<?php echo $p->tanggal ?>" 
										>
									</div>
								</div>
								<div class="form-group">
									<!--<label>Nota:</label>
									<input 
									type="text" 
									name="bukti" 
									class="form-control" 
									placeholder="Bukti nota" 
									>-->
									<label>Bukti nota :</label>
									<div class="file-input file-input-new">
	<div class="" style="display: none;"><div class="progress">
	</div></div><div class="clearfix"></div>
	<div class="input-group file-caption-main">
	  <div class="file-caption form-control kv-fileinput-caption icon-visible" tabindex="500">
	  <span class="file-caption-icon"><i class="glyphicon glyphicon-file"></i></span>
	  <input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="Select file..." title="No file selected">
	</div>
	<div class="input-group-btn input-group-append">
	      <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-file-plus mr-2"></i>  <span class="hidden-xs">Browse</span><input type="file" name="bukti" data-show-preview="false" class="file-input"></div>
	    </div>
	</div></div>
								</div>





							</div>
						</fieldset>

						
						<div class="text-left">
							<button type="button" class="btn btn-success">Submit <i class="icon-paperplane ml-2"></i></button>
														<a href=""><button type="button" class="btn btn-default">Cancel <i class="icon-arrow-left8 ml-2"></i></button></a>
													</div>
					</form>
				</div>
			</div>
		</div>





	</div>

</div>
<div class="col-md-9">
	<div class="card">
		<div class="card-header bg-transparent header-elements-inline">
			<h6 class="card-title">Pengeluaran Barang Setiap Bulan</h6>

			<div class="header-elements">

			</div>
		</div>


<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th>Keterangan</th>
								<th>Biaya</th>
								<th>Tanggal</th>
								<th>Bukti nota</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach ($pengeluaran_barang as $p){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $p->kategori ?></td>
							<td><?php echo $p->keterangan ?></td>
							<td><?php echo $p->biaya ?></td>
							<td><?php echo $p->tanggal ?></td>
								<td>
								<?php   
									$bukti = $p->bukti;
									if ($bukti == "Belum upload") {
									 	echo '<span class="badge badge-danger"><i class="icon-file-download">&nbsp</i>';
									 	echo $p->bukti;
									 	echo '</span>';
									} 

									else if($bukti == "Sudah upload"){
									 	echo '<span class="badge badge-success"><i class="icon-file-check">&nbsp</i>';
									 	echo $p->bukti;
									 	echo '</span>';
									}
								?>
							</td>
							<td>
								<?php echo anchor('admin/pengeluaran/edit/'.$p->pengeluaran_barang_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

								<?php echo anchor('admin/pengeluaran/hapus/'.$p->pengeluaran_barang_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
							</td>
						</tr>
						<?php } ?>
									
														
						</tbody>
					</table>
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
		<?php $this->load->view("admin/part/footer.php")?>
	<!-- /footer -->
		<!-- Theme JS files -->
		<?php $this->load->view("admin/part/js.php")?>
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
