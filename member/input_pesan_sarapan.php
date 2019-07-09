<?php

 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['data_penghuni_id'];
		$kamar = $_POST['data_kamar_id'];
		$menu = $_POST['menu_sarapan_id'];
		$tanggal = $_POST['tanggal'];

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO pesan_sarapan (data_penghuni_id,data_kamar_id,menu_sarapan_id,tanggal) VALUES ('$nama','$kamar','$menu','$tanggal')";
		
		//Import File Koneksi database
		require_once('db/db_connect.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>