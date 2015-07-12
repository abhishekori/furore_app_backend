<?php
require_once('db.php');

$connect= new DB;
$conn=$connect->db_connect();


if($conn!=false)
{
	echo $fb_id=$_POST['fb_id'];
    echo $pic_id=$_POST['pic_id'];
    $status=array();
	$query="SELECT * FROM `likes` WHERE `fb_id`='$fb_id' AND `pic_id`='$pic_id'";
	$stmnt=$conn->prepare($query);
	$stmnt->execute();
	$result=$stmnt->fetch();
	$status;
	if(empty($result))
    {
	$status['status']="0";
    }
	else
     {
	$status['status']="1";
     }
	$query_l="SELECT COUNT(`id`) as `count` FROM `likes` WHERE  `pic_id`='$pic_id'";
	$stmnt_l=$conn->prepare($query_l);
	$stmnt_l->execute();
	$result_l=$stmnt_l->fetch();
	
$status['likes']=$result_l['count'];
	echo json_encode($status,JSON_FORCE_OBJECT);
}
?>

<form action="" method="post">
<input type="text" name="fb_id" placeholder="fb id"/>
<input type="text" name="pic_id" placeholder="pc id"/>
<input type="submit" />
</form>