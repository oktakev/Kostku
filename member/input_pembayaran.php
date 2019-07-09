<?php

 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['data_penghuni_id'];
		$kamar = $_POST['data_kamar_id'];
		$biaya = $_POST['biaya_kost_id'];
		$periode = $_POST['periode'];
		$tanggal_bayar = $_POST['tanggal_bayar'];

		//Pembuatan Syntax SQL
		$sql = "INSERT INTO pembayaran (data_penghuni_id,data_kamar_id,biaya_kost_id,periode,tanggal_bayar) VALUES ('$nama','$kamar','$biaya','$periode','$tanggal_bayar')";
		
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