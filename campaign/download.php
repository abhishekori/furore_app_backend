<?php
/*
// Connect to database server and select database
$con = mysql_connect('localhost','root','linuxshark');
mysql_select_db('furore_register',$con);
 
// retrive data which you want to export
$query = "SELECT * FROM `register` ";
$header = '';
$data ='';
$export = mysql_query ($query ) or die ( "Sql error : " . mysql_error( ) );
 
// extract the field names for header 
$fields = mysql_num_fields ( $export );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}
 
// export data 
while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
 
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}
 
// allow exported file to download forcefully
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=aura_interviews_2014.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
*/


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <?php
require_once('db.php');

$conect= new DB;
$conn=$conect->db_connect();

if($conn!=false)
{
    $event=$_GET['e'];
    $query="SELECT * FROM `register` WHERE `event`='$event'";
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