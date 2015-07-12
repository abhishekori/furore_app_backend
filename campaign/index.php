<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  </head>
  <body>
<table>
  <tr>
    <td>
    <a href="download.php?e=Battle_of_bands">battle of bandst</a> <a href="download_excel.php?e=Battle_of_bands">DOwnload</a><br>
    <a href="download.php?e=Western_Vocal_Solo">Western vocal solo</a> <a href="download_excel.php?e=Western_Vocal_Solo">DOwnloado</a><br>
    <a href="download.php?e=Collage">Collage</a> <a href="download_excel.php?e=Collage">DOwnload</a><br>
    <a href="download.php?e=Sketching">Sketching</a> <a href="download_excel.php?e=Sketching">DOwnload</a><br>
    <a href="download.php?e=Face_Painting">Face_Painting</a> <a href="download_excel.php?e=Face_Painting">DOwnload</a><br>
    </td>
    <td>
    <a href="download.php?e=Street_play">Street_play</a> <a href="download_excel.php?e=Street_play">DOwnload</a><br>
    <a href="download.php?e=Mad_Ads">Mad_Ads</a> <a href="download_excel.php?e=Mad_Ads">DOwnload</a><br>
    <a href="download.php?e=Antakshari">Antakshari</a> <a href="download_excel.php?e=Antakshari">DOwnload</a><br>
    <a href="download.php?e=Charchaspardhe">Charchaspardhe</a> <a href="download_excel.php?e=Charchaspardhe">DOwnload</a><br>
    <a href="download.php?e=Re_ENGINE_ering">Re-ENGINE-ering</a> <a href="download_excel.php?e=Re_ENGINE_ering">DOwnload</a><br>
    </td>
  </tr>
  <tr>
    <td>
    <a href="download.php?e=Robotics">Robotics</a> <a href="download_excel.php?e=Robotics">DOwnload</a><br>
    <a href="download.php?e=Chuck_Glider">Chuck_Glider</a> <a href="download_excel.php?e=Chuck_Glider">DOwnload</a><br>
    <a href="download.php?e=Basketball">Basketball</a> <a href="download_excel.php?e=Basketball">DOwnload</a><br>
    <a href="download.php?e=Futsal">Futsal</a> <a href="download_excel.php?e=Futsal">DOwnload</a><br>
    <a href="download.php?e=Furore_Extempore">Furore_Extempore</a> <a href="download_excel.php?e=Furore_Extempore">DOwnload</a><br>
    </td>
  <td>
    <a href="download.php?e=Furore_Debate">Furore_Debate</a> <a href="download_excel.php?e=Furore_Debate">DOwnload</a><br>
    <a href="download.php?e=Solo_Breaking">Solo_Breaking</a> <a href="download_excel.php?e=Solo_Breaking">DOwnload</a><br>
    <a href="download.php?e=Crew_on_Crew">Crew_on_Crew</a> <a href="download_excel.php?e=Crew_on_Crew">DOwnload</a><br>
    <a href="download.php?e=Beat_Boxing">Beat_Boxing</a> <a href="download_excel.php?e=Beat_Boxing">DOwnload</a><br>
    <a href="download.php?e=Photography_Competition">Photography_Competition</a> <a href="download_excel.php?e=Photography_Competition">DOwnload</a><br>
    </td>
  </tr>
  <tr>
    <td>
    <a href="download.php?e=Short_Film_Making_Competition">Short_Film_Making_Competition</a> <a href="download_excel.php?e=Short_Film_Making_Competition">DOwnload</a><br>
    <a href="download.php?e=FIFA_Auction">FIFA_Auction</a> <a href="download_excel.php?e=FIFA_Auction">DOwnload</a><br>
    <a href="download.php?e=DSI_Minute">DSI_Minute</a> <a href="download_excel.php?e=DSI_Minute">DOwnload</a><br>
    <a href="download.php?e=Treasure_Hunt">Treasure_Hunt</a> <a href="download_excel.php?e=Treasure_Hunt">DOwnload</a><br>
    <a href="download.php?e=War_of_DJs">War_of_DJs</a> <a href="download_excel.php?e=War_of_DJs">DOwnload</a><br>
    </td>
    <td>
    <a href="download.php?e=Slow_Drag">Slow_Drag</a> <a href="download_excel.php?e=Slow_Drag">DOwnload</a><br>
    <a href="download.php?e=Fashion_Show">Fashion_Show</a> <a href="download_excel.php?e=Fashion_Show">DOwnload</a><br>
    <a href="download.php?e=DJ_Night">DJ_Night</a> <a href="download_excel.php?e=DJ_Night">DOwnload</a><br>
    <a href="download.php?e=Break_a_sweat_on_the_floor">Break_a_sweat_on_the_floor</a> <a href="download_excel.php?e=Break_a_sweat_on_the_floor">DOwnload</a><br>
    <a href="download.php?e=Western_Dance">Western_Dance</a> <a href="download_excel.php?e=Western_Dance">DOwnload</a><br>
    <a href="download.php?e=Indian_Group_Dance">Indian_Group_Dance</a> <a href="download_excel.php?e=Indian_Group_Dance">Download</a><br>
    </td>
  </tr>
   </table>
   <?php
require_once('db.php');

$conect= new DB;
$conn=$conect->db_connect();

if($conn!=false)
{
	$query="SELECT * FROM `register` ORDER BY `id` DESC";
	//$stmnt=$conn->prepare($query);
	//$stmnt->execute();
	//$results=$stmnt->fetchAll();
	?>

    <table class="table table-bordered">
    <tr>
    <th>id</th><th>name</th><th>number</th><th>college</th><th>email</th><th>sem</th><th>event</th><th>volunteer number</th>
    </tr>
    <?php
	//print_r($results);
	
	foreach($conn->query($query) as $result)
	{
		?>
        
        <tr>
        <td><?php echo $result['id'];?></td>
        <td><?php echo $result['name'];?></td>
        <td><?php echo $result['number'];?></td>
        <td><?php echo $result['college'];?></td>
        <td><?php echo $result['email'];?></td>
        <td><?php echo $result['sem'];?></td>
        <td><?php echo $result['event'];?></td>
        <td><?php echo $result['volunteer_id'];?></td>
        </tr>
        <?php
	
	}
	
	?>
    </table>
   
    <?php
}
?>

   
  </body>
</html>
