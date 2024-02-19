<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "Student_management_system";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>