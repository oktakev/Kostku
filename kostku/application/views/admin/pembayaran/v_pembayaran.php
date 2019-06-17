
<!DOCTYPE html>
<html lang="en">
        <head>
            <?php $this->load->view("admin/part/head.php") ?>
		</head>

<body>
	<?php $this->load->view("admin/part/navbar.php") ?>
	<!-- /page header -->
	<!-- Page content -->
	<div class="page-content pt-0">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
				<!-- Basic card -->
				<div class="row">
	<div class="col-md-4">
		<br>
		<div class="card">
			
			<div class="card-body">
				
							<form action="#">
								<fieldset>
									<legend class="font-weight-semibold text-uppercase font-size-sm">
										<i class="icon-calendar2 mr-2"></i>
										Masukan Tanggal Monitoring
										<a href="#" class="float-right text-default" data-toggle="collapse" data-target="#demo1">
											<i class="icon-circle-down2"></i>
										</a>
									</legend>

									<div class="collapse show" id="demo1">
										<div class="row">
								<div class="col-md-6">
										<div class="form-group">
											<label class="font-weight-semibold">
												Bulan Monitoring
											</label>
											<select 
											class="form-control " 
											data-placeholder="Bulan Pembukuan..." 
											>
											<option>Bulang Pembayaran</option>
											<option value="01">Januari</option>
											<option value="02">Februari</option>
											<option value="03">Maret</option>
											<option value="04">April</option>
											<option value="05">Mei</option>
											<option value="06">Juni</option>
											<option value="07">Juli</option>
											<option value="08">Agustus</option>
											<option value="09">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">

									<div class="form-group">
										<label class="font-weight-semibold">Tahun Monitoring</label>

										<select 
										class="form-control " 
										data-placeholder="Tahun Pembukuan" 
										>
										<option>Tahun Pembayaran</option>
										<!-- <option value="2018">2018</option> -->
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
										<option value="2028">2028</option>
										<option value="2029">2029</option>
									</select>



								</div>	
							</div>

								
										<div class="col-md-12">
										<label>Tanggal Monitoring</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-calendar22"></i></span>
											</span>

											<input 
											type="text" 
											class="form-control daterange-single" 
											value="05/29/2019" 
											required="" 
											id="tgl_pembukuan"
											name="tgl_masuk"
											data-parsley-required-message="Tanggal Pembukuan tidak boleh kosong !" 
											>
											<div class="text-right">
												
											</div>

										
										</div>
									</div>
										<br>
										<br>
										
									</fieldset>

									<br>
									<div class="row">
											<div class="col-md-12">
												<button type="button" id="lihat-data" class="btn btn-info">Lihat Data <i class="icon-folder-search"></i></button>
												<button type="button" id="simpan" class="btn btn-success">Cetak Data <i class="icon-floppy-disk"></i></button>
											</div>
										</div>

								</form>
							
				</div>



			</div>

		</div>
<br>

					<div class="col-md-12">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Data Pembayaran</h6>
								<div class="header-elements">
								
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									
									
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="highlighted-justified-tab1">
										<div class="col-md-12" id="daftar-penghuni">
					<div class="card">
						<div class="card-header bg-transparent header-elements-inline">
							<h6 class="card-title font-weight-semibold">Daftar Penghuni Sampai Saat ini <span class="tgl_in_header"></span></h6>

							<div class="header-elements">
								<!-- <button>Simpan Data Pembukuan</button> -->
							</div>
						</div>


						<div class="card-body">
						<table id="user-lists" class="table datatable-basic">
						<thead>
							<tr>
									<th>No</th>
									<th>Nama Penghuni</th>
									<th>No Hp</th>
									<th>Alamat</th>
									<th>No Kamar</th>
									<th>Biaya kost</th>
									<th>Periode</th>
									<th>Tanggal Bayar</th>
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
							<td><?php echo $u->no_hp ?></td>
							<td><?php echo $u->alamat ?></td>
							<td><?php echo $u->no_kamar ?></td>
							<td><?php echo $this->lib->rupiah($u->biaya) ?></td>
							<td><?php echo $u->periode ?></td>
							<td><?php echo $this->libdate->convert($u->tanggal_bayar) ?></td>
								<?php //echo anchor('admin/penghuni/edit/'.$u->data_penghuni_id,'<button class="btn btn-primary"><i class="icon-pencil7"></i></button>'); ?>

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
