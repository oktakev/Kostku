	
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

					<div class="card-body">
						<form 
						action="#" 
						data-parsley-validate=""
						method="post"
						enctype="multipart/form-data"
						>
						<fieldset>
							<legend class="font-weight-semibold text-uppercase font-size-sm">
								<i class="icon-paste4 mr-2"></i>
								Pengeluaran Biaya Form
								<a class="float-right text-default" data-toggle="collapse" data-target="#demo2">
									<i class="icon-circle-down2"></i>
								</a>
							</legend>

							<div class="collapse show" id="demo1">
								<div class="form-group">
									<label>Kategori:</label>
									<select name="id_kategori_p_v" class="form-control">
										<option value="1" >Pembayaran Listrik</option>
										<option value="2">Pembelanjaan Barang</option>
																				
									</select>
								</div>
								
								<div class="form-group">
									<label>Keterangan Pengeluaran :</label>
									<textarea class="form-control" name="keterangan" placeholder="Keterangan Pengeluaran" required=""></textarea>
									
								</div>
								<div class="form-group">
									<label>Biaya:</label>
									<input 
									type="number" 
									name="biaya" 
									class="form-control" 
									placeholder="Biaya"
									required="" 
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
										name="tgl_pengeluaran"
										data-parsley-required-message="Tanggal Masuk Penghuni tidak boleh kosong !" 
										>
									</div>
								</div>
								<div class="form-group">
									<label>Bukti nota :</label>
								<div class="file-caption form-control kv-fileinput-caption icon-visible" tabindex="500">
  									<span class="file-caption-icon"><i class="glyphicon glyphicon-file"></i></span>
  									<input class="file-caption-name" onkeydown="return false;" onpaste="return false;" placeholder="Select file..." title="No file selected">
								</div>
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
						foreach ($pengeluaran as $p){
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

								<?php //echo anchor('admin/kamar/hapus/'.$row->data_lantai_id,'<button class="btn btn-danger"><i class="icon-trash"></i></button>'); ?>
								
								
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
