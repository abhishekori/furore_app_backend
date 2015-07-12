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
		echo $row_array['id']=$res['id'];
		echo $row_array['event_name']=$res['event_name'];
		echo $row_array['co_ordinator_name']=str_replace("\\n","\n",$res['co_ordinator_name']);
		//$row_array['rules']=$res['rules'];
		//echo $res['rules'],"<br>";
		 $row_array['rules']=str_replace("\\n","\n",$res['rules']);
		 echo $row_array['rules'];
		// echo iconv("UTF-8", "UTF-8", $row_array['rules'] );
		echo $row_array['contact']=$res['contact'];
		echo $row_array['fee']=$res['fee'];
		echo $row_array['cash1']=$res['cash1'];
		echo $row_array['cash2']=$res['cash2'];
		
		echo $row_array['cat']=$res['cat'];
		
		array_push($my_array,$row_array);
	}

	$s_arr=array('size'=>$i);
	//array_push($my_array,$s_arr);
	
	array_unshift($my_array,$s_arr);
	$query_ver="SELECT * FROM `version`";
	$stmnt=$conn->prepare($query_ver);
	$stmnt->execute();
	$result = $stmnt->fetch(PDO::FETCH_ASSOC);
	echo $result['version_number'];
	
	//echo json_encode($my_array,JSON_FORCE_OBJECT);
}else
{
	echo json_encode(array("db_error"=>"1"));
}

?>

