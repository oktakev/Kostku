<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama_penghuni = $_POST['nama_lengkap'];
		$no_ktp = $_POST['no_ktp'];
		$alamat_penghuni = $_POST['alamat'];
		$hp_penghuni = $_POST['no_hp'];
		//$status_penghuni = $_POST['status'];
		$kamar_penghuni = $_POST['data_kamar_id'];
		$biaya_penghuni = $_POST['biaya_kost_id'];
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO data_penghuni (nama_lengkap,no_ktp,alamat,no_hp,data_kamar_id,biaya_kost_id) VALUES ('$nama_penghuni','$no_ktp','$alamat_penghuni','$hp_penghuni','$kamar_penghuni','$biaya_penghuni')";
		
		//Import File Koneksi database

		require_once('db/db_connect.php');
		
		//Eksekusi Query database
/*		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan';
		}else{
			echo 'Gagal Menambahkan';
		}
		
		mysqli_close($con);
*/	}
?>