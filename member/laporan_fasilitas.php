<?php
	require_once 'db/db_connect.php';

	$query = "SELECT lapor_fasilitas.lapor_fasilitas_id,lapor_fasilitas.keluhan,lapor_fasilitas.status,fasilitas.nama_fasilitas FROM lapor_fasilitas JOIN fasilitas ON lapor_fasilitas.fasilitas_id = fasilitas.fasilitas_id";

	$sql = mysqli_query($con, $query);

	$ray= array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			"lapor_id" => $row ['lapor_fasilitas_id'],
			"keterangan" => $row ['keluhan'],
			"status" => $row ['status'],
			"nama_fasilitas" => $row ['nama_fasilitas']
		));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>