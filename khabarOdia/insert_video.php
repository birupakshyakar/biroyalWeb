<?php

  	include 'connection/database_connection.php';
	$conn = OpenCon();
  	
      //  echo  $other_image_names;       
        $title = $_REQUEST['title'];
		$link = $_REQUEST['link'];	
		$sql = "select * from videoList where video_link='$link'";
		$result=mysqli_query($conn, $sql);
		$row_num = mysqli_num_rows($result);
		if($row_num > 0){
			echo "duplicate";
		}
		else{
			$sql = "insert into videoList(video_title,video_link) values('$title','$link')";
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