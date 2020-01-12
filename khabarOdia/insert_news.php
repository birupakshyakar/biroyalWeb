<?php

  	include 'connection/database_connection.php';
	$conn = OpenCon();
  	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$filename = $_FILES["file"]["name"];
 	$checkImageType = getimagesize($_FILES["file"]["tmp_name"]);
    if($checkImageType !== false) {       
        $uploadOk = 1;
        move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $filename);        
        $category = $_REQUEST['section'];
		$image = $filename;
		$newsTitle = $_REQUEST['news_title'];
		$subCategory = $_REQUEST['catagory_name'];
		$newsDate =date('F j, Y',strtotime($_REQUEST['news_date']));
		$newsContent = $_REQUEST['news_content'];
		
		//echo json_encode(array("abc"=>'successfuly registered'));
		$sql = "insert into newslist(category,subcategory,heading,image,content,date) values('$category','$subCategory','$newsTitle','img/$image','$newsContent','$newsDate') ";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "News uploaded successfully.";

		}
		else
		{
			echo "News Upload failed";
		}
    } else {
        echo "Uploaded File is not an image.";
        $uploadOk = 0;
    }
?>