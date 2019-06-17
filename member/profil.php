<?php 

 /*
 
 penulis: Muhammad yusuf
 website: https://www.kodingindonesia.com/
 
 */

	//Import File Koneksi Database
	include 'db/db_connect.php';
	
	//Membuat SQL Query
	$sql ="SELECT data_penghuni.data_penghuni_id,data_penghuni.nama_lengkap,data_penghuni.no_ktp,data_penghuni.alamat,data_penghuni.no_hp,data_penghuni.status,kamar.no_kamar,pengaturan_biaya.biaya FROM data_penghuni JOIN kamar ON data_penghuni.data_kamar_id = kamar.data_kamar_id JOIN pengaturan_biaya ON data_penghuni.biaya_kost_id = pengaturan_biaya.biaya_kost_id"; 
    	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"data_penghuni_id"=>$row['data_penghuni_id'],
			"nama_lengkap"=>$row['nama_lengkap'],
			"no_ktp"=>$row['no_ktp'],
			"alamat"=>$row['alamat'],
			"no_hp"=>$row['no_hp'],
			"no_kamar"=>$row['no_kamar'],
			"biaya_bulanan"=>$row['biaya']

		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>