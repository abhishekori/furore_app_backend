<?php

class DB
{
private $servername = "localhost";
private $user="root";
private $password="linuxshark";
private $conn;
  public function db_connect()
{
try
{
	$conn=new PDO("mysql:host=$servername;dbname=furore_register",$this->user,$this->password);
	//$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo 'Connected';
	//var_dump($conn);
	return $conn;
	
}catch(PDOExecption $e)
{
	//echo 'Connected';
	echo $e->getMessage();
	return false;
	}
}

public function return_conn()
{
	return $this->conn;
}
}

