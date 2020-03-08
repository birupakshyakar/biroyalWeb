<?php
  	include 'connection/database_connection.php';
	$conn = OpenCon();
//echo "success";
	session_start();
$user_id = $_POST["username"];
$password = $_POST["password"];
//echo "user_id: ".$user_id.",password: ".$password;
$sql = "select password, name, user_type from login_details where user_id = '$user_id'";
//echo $sql;
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
//echo $row['password'] ;
if($row)
{
		if($password == $row['password']){
	/*echo 'success';*/
			$output = array(
					"name" => $row['name'],
					"user_type" => $row['user_type'],
					"message" => "success"
			);
			
			$_SESSION['user_type'] = $row["user_type"];
			$_SESSION['name'] = $row["name"];
			echo json_encode($output);
		}
		else{
			$output = array(
					
					"message" => "error"
			);
			echo json_encode($output);
		}
}
else{
	$output = array(
			
			"message" => "error"
	);
	echo json_encode($output);
}

?>