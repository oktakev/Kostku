<?php
	require_once 'db/db_connect.php';
		$id_pesanan = $_GET["id_pesanan"];



	$query = "SELECT pesan_sarapan.pesan_sarapan_id,data_penghuni.nama_lengkap,kamar.no_kamar,menu_sarapan.nama_menu,pesan_sarapan.tanggal,pesan_sarapan.status FROM pesan_sarapan JOIN data_penghuni ON pesan_sarapan.data_penghuni_id = data_penghuni.data_penghuni_id JOIN kamar ON pesan_sarapan.data_kamar_id = kamar.data_kamar_id JOIN menu_sarapan ON pesan_sarapan.menu_sarapan_id = menu_sarapan.menu_sarapan_id where pesan_sarapan_id = '$id_pesanan'";

	$sql = mysqli_query($con, $query);

	$ray= array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($ray, array(
			"id_pesanan" => $row ['pesan_sarapan_id'],
			"nama_pemesan" => $row ['nama_lengkap'],
			"kamar_pemesan" => $row ['no_kamar'],
			"menu_pesanan" => $row ['nama_menu'],
			"tanggal_pesanan" => $row ['tanggal'],
			"status_pesanan" => $row ['status']
		));
	}

	echo json_encode($ray);

	mysqli_close($con);
?>