<?php
	require_once 'db/db_connect.php';

	$query = "SELECT pembayaran.bayar_id,data_penghuni.nama_lengkap,kamar.no_kamar,pengaturan_biaya.biaya,pembayaran.periode,pembayaran.tanggal_bayar FROM pembayaran JOIN data_penghuni on pembayaran.data_penghuni_id = data_penghuni.data_penghuni_id JOIN kamar ON pembayaran.data_kamar_id = kamar.data_kamar_id JOIN pengaturan_biaya ON pembayaran.biaya_kost_id = pengaturan_biaya.biaya_kost_id";
	

	$sql = mysqli_query($con, $query);

	$ray= array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			"id_pembayaran" => $row ['bayar_id'],
			"nama_pembayar" => $row ['nama_lengkap'],
			"kamar_pembayar" => $row ['no_kamar'],
			"biaya_pembayaran" => $row ['biaya'],
			"periode_pembayaran" => $row ['periode'],
			"tanggal_pembayaran" => $row ['tanggal_bayar']
		));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>