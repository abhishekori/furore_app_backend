<?php


require_once('db.php');

$page_no=$_GET['page_no'];
$connect= new DB;
$conn=$connect->db_connect();

if($conn!=false)
{
	
	$query="SELECT * FROM `selfie_photo` ORDER BY id DESC LIMIT $page_no,10 ";
	
	$myarray=array();
	
	foreach($conn->query($query) as $res)
	{
		$row_array['id']=$res['id'];
		$row_array['img_url']=$res['img_url'];
		$row_array['fb_id']=$res['fb_id'];
		$row_array['s_desc']=$res['s_desc'];
		$row_array['user_name']=$res['user_name'];
		$row_array['likes']=$res['likes'];
		
		array_push($myarray,$row_array);
	}
	
	echo json_encode($myarray,JSON_FORCE_OBJECT);
}
?>