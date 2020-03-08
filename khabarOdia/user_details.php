<?php
include 'connection/database_connection.php';
	$conn = OpenCon();
	$name = $_POST["name"];	
 	$password = $_POST["password"];
 	$userid = $_POST["userid"];
 	$email = $_POST["email"];
 	$usertype = $_POST["usertype"];
 	$sql="select * from login_details where user_id='$userid' and email='$email'";
 	$result = mysqli_query($conn, $sql);
 	$row_count = $result->num_rows;
 	if($row_count > 0){
 		echo "User already exist";
 	}
 	else{
 		$sql="insert into login_details(name,user_id,password,email,user_type) values('$name','$userid','$password','$email','$usertype')";
	 	$result = mysqli_query($conn,$sql);
	 	if($result)
	 	{
	 		echo "New user created";
	 	}
	 	else
		{ 
			echo "error";
		}
 	}

 	
?>