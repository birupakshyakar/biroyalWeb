<?php

  	include 'connection/database_connection.php';
	$conn = OpenCon();
  	
            
       
		$post_name = $_REQUEST['post_name'];
		$vacancy_no = $_REQUEST['vacancy_no'];
		$job_location = $_REQUEST['job_location'];
		$job_description = $_REQUEST['job_description'];
		$sql = "select * from jobList where post_name='$post_name' and location='$job_location'";
		$result=mysqli_query($conn, $sql);
		$row_num = mysqli_num_rows($result);
		if($row_num > 0){
			echo "duplicate";
		}
		else{
			$sql = "insert into jobList(post_name,vacancy_no,location,description) values('$post_name','$vacancy_no','$job_location','$job_description')";
			$result = mysqli_query($conn, $sql);
			if($result)
			{
				echo "success";

			}
			else
			{
				echo "error";
			}
		}
		
		
    
?>