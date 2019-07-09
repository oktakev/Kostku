<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$keluhan = $_POST['keluhan'];
		$status = $_POST['status'];
		$nama_fasilitas = $_POST['fasilitas_id'];

		$sql = "INSERT INTO lapor_fasilitas (keluhan,status,fasilitas_id) VALUES ('$keluhan','$status','$nama_fasilitas')";
		
		//Import File Koneksi database

		require_once('db/db_connect.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan';
		}else{
			echo 'Gagal Menambahkan';
		}
		
		mysqli_close($con);
	}
?>