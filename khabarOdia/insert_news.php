<?php

  	include 'connection/database_connection.php';
	$conn = OpenCon();
  	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$filename = $_FILES["file"]["name"];
	//echo $filename;
	$countfiles = count($_FILES['file_other_image']['name']);
	//echo $countfiles;
	$other_image_names='';
	//$total = count($_REQUEST['other_images']);
 	$checkImageType = getimagesize($_FILES["file"]["tmp_name"]);
    if($checkImageType !== false) {       
        $uploadOk = 1;
        move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $filename);
       //$otherImages = $_REQUEST['other_images']; 
        for($i=0; $i< $countfiles; $i++)
        {
        	$tmpFilePath = $_FILES['file_other_image']['tmp_name'][$i];
        	$newFilePath = "./img/" . $_FILES['file_other_image']['name'][$i];
        	move_uploaded_file($tmpFilePath, $newFilePath);
        	if($i == 0)
        	{
        		$other_image_names = $_FILES['file_other_image']['name'][$i];
        	}
        	else
        	{
        		$other_image_names = $other_image_names.','.$_FILES['file_other_image']['name'][$i];
        	}
        }
      //  echo  $other_image_names;       
        $category = $_REQUEST['section'];
		$image = $filename;
		$newsTitle = $_REQUEST['news_title'];
		$subCategory = $_REQUEST['catagory_name'];
		$newsDate =date('F j, Y',strtotime($_REQUEST['news_date']));
		$newsContent = $_REQUEST['news_content'];
		
		//echo json_encode(array("abc"=>'successfuly registered'));
		$sql = "insert into newslist(category,subcategory,heading,image,content,date, other_images) values('$category','$subCategory','$newsTitle','img/$image','$newsContent','$newsDate', '$other_image_names') ";
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