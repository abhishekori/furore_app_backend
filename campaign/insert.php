<?php

require_once('db.php');
$connect = new DB;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$name=test_input($_GET['name']);
$email=test_input($_GET['email']);
$number=test_input($_GET['number']);
$college=test_input($_GET['college']);
$sem=test_input($_GET['sem']);
$event=test_input($_GET['event']);
$volunteer_id=test_input($_GET['volunteer_id']);
$conn=$connect->db_connect();
echo $name," ",$email," ",$number," ",$college," ",$sem," ",$event," ",$volunteer_id;
if($conn!=false)
{
	
	$query="INSERT INTO `register` (`name`,`number`,`college`,`email`,`sem`,`event`,`volunteer_id`) VALUES(:name,:number,:college,:email,:sem,:event,:volunteer_id)";
	$stmnt=$conn->prepare($query);
	$stmnt->bindParam(':name',$name);
	$stmnt->bindParam(':number',$number);
	$stmnt->bindParam(':college',$college);
	$stmnt->bindParam(':email',$email);
	$stmnt->bindParam(':sem',$sem);
	$stmnt->bindParam(':event',$event);
	$stmnt->bindParam(':volunteer_id',$volunteer_id);
	$stmnt->execute();
	echo 'inserted';
	echo '    ',$conn->lastInsertId();
}else
{
	echo '0';
}

