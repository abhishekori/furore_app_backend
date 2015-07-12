<?php
require_once('db.php');


$connect= new DB;

$conn= $connect->db_connect();

if($conn!=false)
{
	$my_array=array();
	$query="SELECT * FROM `events`";
	$i=0;
	
	foreach($conn->query($query) as $res)
	{
		++$i;
		$row_array['id']=$res['id'];
		$row_array['event_name']=$res['event_name'];
		$row_array['co_ordinator_name']=str_replace("\\n","\n",$res['co_ordinator_name']);
		//$row_array['rules']=$res['rules'];
		//echo $res['rules'],"<br>";
		$row_array['rules']=str_replace("\\n","\n",$res['rules']);
		$row_array['rules']=str_replace('"',"'",$row_array['rules']);
		$row_array['rules']=str_replace('/'," ",$row_array['rules']);
		$row_array['contact']=$res['contact'];
		$row_array['fee']=$res['fee'];
		$row_array['cash1']=$res['cash1'];
		$row_array['cash2']=$res['cash2'];
		
		$row_array['cat']=$res['cat'];
		
		array_push($my_array,$row_array);
	}

	$s_arr=array('size'=>$i);
	//array_push($my_array,$s_arr);
	$query_ver="SELECT * FROM `version`";
	$stmnt=$conn->prepare($query_ver);
	$stmnt->execute();
	$result = $stmnt->fetch(PDO::FETCH_ASSOC);
	 $ver_arr=array('ver_no'=>$result['version_number']);
	
	array_unshift($my_array,$ver_arr);
	array_unshift($my_array,$s_arr);
	
	echo json_encode($my_array,JSON_FORCE_OBJECT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}else
{
	echo json_encode(array("db_error"=>"1"));
}

?>

