<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>confirmation page</title>
</head>

<body>
<?php
	$target_dir='C:\xampp\htdocs\recon\admin\photos/';
	$target_file = $target_dir.basename($_FILES['image']['name']);
	//$uploadOk =1;
	//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_POST['sub']))
	{
		require('mysqli_conn.php');
		echo"everything is fine";
		$Artist_ID = $_POST['Artist_ID'];
		$Artist_name = $_POST['Artist_name'];
		//$image_name = $_POST['image_name'];
		$image_category = $_POST['image_category'];
		$image_price = $_POST['image_price'];
		$image_desc=  $_POST['image_desc'];
		$pic=($_FILES['image']['name']);
		$tmp_name=($_FILES['image']['tmp_name']);
		if($image_category == 'oil')
		{
	$q = "INSERT INTO oil(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else if($image_category == 'mural')
		{
		$q = "INSERT INTO mural(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else if($image_category == 'acrylic')
		{
		$q = "INSERT INTO acrylic(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else if($image_category == 'wash')
		{
		$q = "INSERT INTO wash(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else if($image_category == 'water')
		{
		$q = "INSERT INTO water(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else if($image_category == 'pencil')
		{
		$q = "INSERT INTO pencil(Artist_ID , Artist_name , image_name, image_category, image_price, image_desc) VALUES ('$Artist_ID','$Artist_name','$pic', '$image_category', '$image_price', '$image_desc')"; 
		}
		else
		{
			echo 'no result';
			exit();		
		}
	
		$result = mysqli_query($dbcon,$q); // Make the query   
		if($result) 
		{ // If the query ran OK   
		echo"file uploaded";
		}
		else
		{
			echo'file is not uploaded';
			}
	}
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
		/*// Writes the photo to the server
	if(copy($tmp_name, $targetfile))
	{
	// Tells you if its all ok
		echo" file is uploaded";
		//echo "The file ".basename($_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
		}
	else {
		// Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
		}*/
?>
</body>
</html>