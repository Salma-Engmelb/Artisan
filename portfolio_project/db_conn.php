<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "ali";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

//if (!$conn) {
//	echo "Connection failed!";
//}//

if($conn)
{
	echo "connexion etablie";
}else
{
	die(mysqli_connect_error());
	
}

