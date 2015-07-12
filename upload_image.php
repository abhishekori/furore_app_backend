<?php

require_once('db.php');
$connect= new DB;
$conn= $connect->db_connect();




if(isset($_FILES['selfie_img']['name']))
{
	//echo 'yea';
	$file_tmp=$_FILES['selfie_img']['tmp_name'];
	$file_name=$_FILES['selfie_img']['name'];
	$image_name=rand(0,99999).$file_name;
	$fb_id=test_input($_POST['fb_id']);
	
	echo $fb_id;
	echo $user_name=test_input($_POST['user_name']);
	$selfi_desc=test_input($_POST['s_desc']);
	echo $selfi_desc;
	if(move_uploaded_file($file_tmp,'uploads/'.$image_name))
	{
		echo 'uploaded';
		if($conn!=false)
		{
			$query="INSERT INTO `selfie_photo` (`img_url`,`fb_id`,`s_desc`,`user_name`) VALUES('$image_name','$fb_id','$selfi_desc','$user_name')";
			$stmnt=$conn->prepare($query);
			$stmnt->execute();
			echo $conn->lastInsertId();
			
		}else
		{
			echo 'db error';
		}
	}else
	{
		echo 'Sorry soemthing went wrong';
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="selfie_img" />

<input type="submit" value="upload" />

</form>