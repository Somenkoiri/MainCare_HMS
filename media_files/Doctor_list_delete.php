

<?php
include("conn.php");

$sn = $_GET['sn'];
$sqli = "DELETE FROM `doctor_db` WHERE doc_dob='$sn'";
$data = mysqli_query($conn,$sqli);

if($data)
{

    echo "<script>Confirm('( Yes or No! Your Data Delete !! )')</script>";
    header("location:Doctor_list.php");
  
}
else
{
    echo "<script>alert('( Sorry! No Data Delete !! )')</script>";
}






?>