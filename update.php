<?php
require_once('db.php');
$connect = new DB;
$conn= $connect->db_connect();
if(isset($_POST['submit']))
{



$event_name=test_input($_POST['event_name']);
$co_ordinator_name=test_input($_POST['co_ordinator']);
$rules=test_input($_POST['rules']);
$contact=test_input($_POST['phone']);
$fee=test_input($_POST['fee']);
$cash=test_input($_POST['cash']);
$time=test_input($_POST['hr']).":".test_input($_POST['min'])." ".test_input($_POST['m'])." ".test_input($_POST['date']);
$cat=test_input($_POST['cat']);
$id=$_POST['e_id'];
if($conn!=false)
{
	
	$query="UPDATE `events` SET `event_name`='$event_name',`co_ordinator_name`='$co_ordinator_name',`rules`='$rules',`contact`='$contact',`fee`='$fee',`cash`='$cash',`time`='$time',`cat`='$cat' 	WHERE `id`='$id'";
	$conn->exec($query);
	echo 'updatet';
	//echo $conn->lastInsertId();
	$query_ver="UPDATE `version` SET version_number=version_number+1";
	$conn->exec($query_ver);
	echo " version updatted";
}else
{
	echo '0';
}

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}

if(isset($_POST['id_submit']))
{
	$id=$_POST['event_id'];
	echo 'enetered';
	$query_id="SELECT * FROM `events` WHERE `id`='$id'";
	$stmnt=$conn->prepare($query_id);
	$stmnt->execute();
	
	$result=$stmnt->fetch();
	
	 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">




  </head>
  <body>
  
  
   <div class="container">
   <br>
<form action="" method="post">
<input type="number" name="event_id" >

<input type="submit" name="id_submit" class="btn btn-primary" value="Submit">

</form>
<br>
<br>
   <center><h1>Update event</h1></center>
   <br>
   
   <br>
   <form action="" method="post">
   <input type="hidden" name="e_id" value="<?php echo $result['id'];?>">
   <br>
   <br>
   <input type="text" class="form-control" name="event_name" placeholder="Event name" required value="<?php echo $result['event_name'];?>"><br>
   
   <select name="cat" class="form-control">
   <option value="art">Art</option>
   <option value="dance">Dance</option>
   <option value="gaming">Gaming</option>
   <option value="kannada">Kannada</option>
   <option value="music">Music</option>
   <option value="theater">Theater</option>
   <option value="technical">Technical</option>
   <option value="other">Other</option>
   </select>
   <br>
   <textarea class="form-control" name="rules" placeholder="Rules" required ><?php echo $result['rules'];?></textarea><br>
   <input type="text" class="form-control" name="co_ordinator" placeholder="Co-ordinator name" required value="<?php echo $result['co_ordinator_name'];?>"><br>
   <input type="tel" class="form-control"  name="phone" placeholder="Phone number" required value="<?php echo $result['contact'];?>"><br>
   <input type="text" class="form-control" name="fee" placeholder="registration fee" required value="<?php echo $result['fee'];?>"><br>
   <input type="text" class="form-control" name="cash" placeholder="cash price" required value="<?php echo $result['cash'];?>"><br>
   <div class="row">
   <div class="col-md-6">
   <input type="date" class="form-control" name="date" required>
   </div>
   <div class="col-md-2"> 
   <input type="number" class="form-control" name="hr" placeholder="Hour" required>
   </div>
  <div class="col-md-2">
   <input type="number" class="form-control" name="min" placeholder="Minute" required>
   </div>
   <div class="col-md-2">
   <select name="m" class="form-control">
   <option value="AM">AM</option>
      <option value="PM">PM</option>
   </select>
   </div>
   </div>
  
   <br><br>
   <input type="submit" class="btn btn-primary" name="submit" value="Submit">
   </form>
   </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>