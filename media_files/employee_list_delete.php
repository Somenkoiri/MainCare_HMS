

<?php
include("conn.php");

$sn = $_GET['sn'];
$sqli = "DELETE FROM `employee_db` WHERE `id`='$sn'";
$data = mysqli_query($conn,$sqli);

if($data)
{

    echo "<script>Confirm('( Yes or No! Your Data Delete !! )')</script>";
    header("location:Employees_list.php");
  
}
else
{
    echo "<script>alert('( Sorry! No Data Delete !! )')</script>";
}






?>