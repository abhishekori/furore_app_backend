<?php
require_once('db.php');

$connect= new DB;
$conn=$connect->db_connect();
echo $fb_id=$_POST['fb_id'];//='54321';
echo $pic_id=$_POST['pic_id'];//='66761temp_photo.jpg';
if($conn!=false)
{
	$query="INSERT INTO `likes` (`fb_id`,`pic_id`) VALUES('$fb_id','$pic_id')";
	$stmnt=$conn->prepare($query);
	$stmnt->execute();
	echo 'inserted';
	
	$query_l="UPDATE `selfie_photo` SET likes=likes+1 WHERE `img_url`='$pic_id'";
	$stmnt_l=$conn->prepare($query_l);
	$stmnt_l->execute();
	
	echo 'inserted updated';
}

?>

