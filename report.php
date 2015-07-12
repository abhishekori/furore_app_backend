<?php
require_once('db.php');

$connect= new DB;
$conn=$connect->db_connect();

echo $pic_id=$_POST['pic_id'];//='66761temp_photo.jpg';
if($conn!=false)
{
	$query="INSERT INTO `report` (`img_url`) VALUES('$pic_id')";
	$stmnt=$conn->prepare($query);
	$stmnt->execute();
	echo 'reported';
	
	
}

?>

