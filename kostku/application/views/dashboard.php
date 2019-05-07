
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
				
	<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">
							Dashboard Sistem Informasi Kost
						</h6>

						<div class="header-elements">
						
	                	</div>
					</div>

					<!-- Action toolbar -->
					<div class="card-body">

						<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-man-woman icon-3x text-info-400" style="font-size: 40px"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="font-weight-semibold mb-0">23</h3>
									<span class="text-uppercase font-size-sm text-muted">Penghuni Aktif s/d Bulan Ini</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-people icon-3x text-danger-400" style="font-size: 40px"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="font-weight-semibold mb-0">2</h3>
									<span class="text-uppercase font-size-sm text-muted"> Penghuni Keluar s/d Bulan Ini</span>
								</div>
							</div>
						</div>
					</div>

					

					

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<h3 class="font-weight-semibold mb-0">43</h3>
									<span class="text-uppercase font-size-sm text-muted">Total Kamar Kosong</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bed2 icon-3x text-indigo-400" style="font-size: 40px"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="font-weight-semibold mb-0 ">
                                        <span class="number-angka">37400000</span>
                                    </h3>
                                    <span class="text-uppercase font-size-sm text-muted">Total Pendapatan S/d Bulan Ini</span>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <i class="icon-cash3 icon-3x text-info-400" style="font-size: 40px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="font-weight-semibold mb-0 ">
                                        <span class="number-angka">18146600</span>
                                    </h3>
                                    <span class="text-uppercase font-size-sm text-muted">Total Pengeluaran S/d Bulan Ini</span>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <i class="icon-cart5 icon-3x text-dark-400" fa-lg text-info-400" style="font-size: 40px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="font-weight-semibold mb-0 ">
                                        <span class="number-angka">19253400</span>
                                    </h3>
                                    <span class="text-uppercase font-size-sm text-muted">Total Laba Bersih S/d Bulan Ini</span>
                                </div>

                                <div class="ml-3 align-self-center">
                                    <i class="icon-wallet icon-3x text-success-400" style="font-size: 40px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<hr>
						<br>
				<div class="row">
					<div class="col-md-12">
								<div id="container2"></div>
							</div>
							
						</div>
                <div class="row">
                    <div class="col-md-6">
                                <div id="container"></div>
                            </div>
                            <div class="col-md-6">
                                <div id="container3"></div>
                            </div>
                </div>
						
					</div>
					<!-- /action toolbar -->


					
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
    <?php $this->load->view("admin/part/js.php") ?>
    <!--js-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.number-angka').number(true);
	})
</script>

<script>
     $('#container2').highcharts({
// 		Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Pendapatan Kost Secara Umum'
    },
    subtitle: {
        text: 'Sumber: semua data didalam aplikasi.'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Laporan'
        }
    },
   
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
    	series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: '<span class="number-angka">{point.y:,.0f}</span>'
            }
          },
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
             dataLabels: {
                enabled: true
            }

        }
    },
    series: [{"name":"Pendapatan","data":[37400000]},{"name":"Pengeluaran","data":[18146600]},{"name":"Laba Bersih","data":[19253400]}]
});

</script>
<script type="text/javascript">
	$(document).ready(function(){
	   


	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Penghuni Kost Secara Umum'
    },
    subtitle: {
        text: 'Sumber: semua data didalam aplikasi.'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Laporan'
        }
    },
   
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
             dataLabels: {
                enabled: true
            }

        }
    },
    series: [{"name":"Total Penghuni","data":[20]},{"name":"Total Penghuni Keluar","data":[0]},{"name":"Total Penghuni Baru","data":[18]}]
});


    Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Pengeluaran Kost'
    },
    subtitle: {
        text: 'Sumber: semua data didalam aplikasi.'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Laporan'
        }
    },
   
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
             dataLabels: {
                enabled: true
            }

        }
    },
    series: [{"name":"Fix Cost","data":[15050000]},{"name":"Variable Cost","data":[3096600]}]
});

	})
</script>
		 
	<script src="sweetalert.all.js"></script>
</body>
</html>
