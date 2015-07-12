<?php
require_once('db.php');
if(isset($_POST['submit']))
{
$connect = new DB;

$conn= $connect->db_connect();
$event_name=test_input($_POST['event_name']);
$co_ordinator_name=test_input($_POST['co_ordinator']);
$rules=test_input($_POST['rules']);
$contact=test_input($_POST['phone']);
$fee=test_input($_POST['fee']);
$cash=test_input($_POST['cash']);
$time=test_input($_POST['hr']).":".test_input($_POST['min'])." ".test_input($_POST['m'])." ".test_input($_POST['date']);
$cat=test_input($_POST['cat']);
if($conn!=false)
{
	
	$query="INSERT INTO `events` (`event_name`,`co_ordinator_name`,`rules`,`contact`,`fee`,`cash`,`time`,`cat`) VALUES('$event_name','$co_ordinator_name','$rules','$contact','$fee','$cash','$time','$cat')";
	$conn->exec($query);
	echo 'inserted';
	echo $conn->lastInsertId();
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

   <center><h1>Event Create</h1></center>
   <br>
   
   <br>
   <form action="" method="post">
   <input type="text" class="form-control" name="event_name" placeholder="Event name" required><br>
   
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
   <textarea class="form-control" name="rules" placeholder="Rules" required></textarea><br>
   <input type="text" class="form-control" name="co_ordinator" placeholder="Co-ordinator name" required><br>
   <input type="tel" class="form-control"  name="phone" placeholder="Phone number" required><br>
   <input type="text" class="form-control" name="fee" placeholder="registration fee" required><br>
   <input type="text" class="form-control" name="cash" placeholder="cash price" required><br>
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