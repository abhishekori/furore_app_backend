<?php
require_once('db.php');

$connect = new DB;
$conn=$connect->db_connect();


if($conn!=false)
{
	
	$query="SELECT `version_number` FROM `version`";
	$stmnt=$conn->prepare($query);
	$stmnt->execute();
	
	$result=$stmnt->fetch();
	
	$myarray=array("version"=>$result[0]);
	
	echo json_encode($myarray,JSON_FORCE_OBJECT);
}
?>