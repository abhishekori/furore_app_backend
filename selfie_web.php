<?php
require_once('db.php');

$conntect=new DB;
$conn=$conntect->db_connect();

$query="SELECT * FROM `selfie_photo` ORDER BY `id` DESC";
foreach($conn->query($query) as $res)
{
	?>

<img src="http://bitsmate.in/furore/uploads/<?php echo $res['img_url'];?>" width="300" height="300">
<br>
<h3><?php echo $res['user_name']?></h3>
<h4><?php echo $res['s_desc'];?></h4> &nbsp; <?php echo $res['likes']?>
	<?php
}
?>