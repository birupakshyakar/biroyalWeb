<?php
	function OpenCon(){

		$dbhost= "localhost";
		$dbuser= "root";
		$dbpassword= "";
		$dbname= "khabaraodia";
		$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname) or die("connection Failed");
		return $conn;
	}
	function CloseCon($con){
		$con->close();
	}
	

	
?>

