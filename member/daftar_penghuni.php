<?php
	require_once 'db/db_connect.php';

	$query = "SELECT data_penghuni.data_penghuni_id,data_penghuni.nama_lengkap,kamar.no_kamar FROM data_penghuni JOIN kamar ON data_penghuni.data_kamar_id = kamar.data_kamar_id";

	$sql = mysqli_query($con, $query);

	$ray= array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			"id_penghuni" => $row ['data_penghuni_id'],
			"nama_penghuni" => $row ['nama_lengkap'],
			"kamar_penghuni" => $row ['no_kamar']
			//"kelas_mhs" => $row ['kelas']
		));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>