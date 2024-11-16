<?php

include("conn.php");

$sno = $_GET['sn'];

$sqli = "DELETE FROM `appointment_db` WHERE `id`='$sno'";
$data = mysqli_query($conn,$sqli);

if ($data) {
	
	echo "<script>confirm('You Data Delete You Confirm')</script>";
	header('location:Appointments_list.php');
}
else{
	echo "<script>confirm('You Not Data Delete !')</script>";
}




?>