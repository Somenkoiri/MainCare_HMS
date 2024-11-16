<?php

$server = "localhost";
$username= "root";
$password = "";
$db_name = "hospital_manage_application" ;

$conn = mysqli_connect($server,$username,$password,$db_name);

if ($conn) {
	
	// echo "Ok conected to database ";
}
else
{
	echo "Not conected to database";
}



?>