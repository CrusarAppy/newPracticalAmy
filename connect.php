<?php
	
	$serverName = "localhost";
	$userName = "root";
	$databaseName = "paracticalamy"
	$password = "";
	
	//create connection
	$conn = mysqli_connect($serverName,$userName,$password);
	
	//check connection
	if($conn->connect_error){
		die("connection failed" . $conn->connect_error);
	}
	else{
		echo "Connected successfully"
	}
	
	
?>