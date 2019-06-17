<?php
$response = array();
include 'db/db_connect.php';
include 'functions.php';

//Get the input request parameters
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array

//Check for Mandatory parameters
if(isset($input['username']) && isset($input['password'])){
	$username = $input['username'];
	$password = $input['password'];
	$query    = "SELECT password FROM member WHERE username = ?";

	if($stmt = $con->prepare($query)){
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->bind_result($username);
		if($stmt->fetch()){
			//Validate the password
			if(password_verify($password)){
				$response["status"] = 0;
				$response["message"] = "Login Berhasil";
				$response["full_name"] = $fullName;
			}
			else{
				$response["status"] = 1;
				$response["message"] = "Login Gagal";
			}
		}
		else{
			$response["status"] = 1;
			$response["message"] = "Login Gagal";
		}
		
		$stmt->close();
	}
}
else{
	$response["status"] = 2;
	$response["message"] = "404";
}
//Display the JSON response
echo json_encode($response);
?>