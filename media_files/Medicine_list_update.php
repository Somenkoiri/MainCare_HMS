<?php
include("conn.php");
if (isset($_POST['save'])) {

 $sno = $_POST['u_sno'];
$MedicineName = $_POST['medicineName'];   
$PurchaseDate = $_POST['purchaseDate'];   
$ExpirationDate = $_POST['expirationDate']; 
$ExpirationEnd = $_POST['expirationEnd'];  
$Price = $_POST['price'];   
$Quantity = $_POST['quantity'];

$sqli = "UPDATE `medicine_db` SET `id`='$sno',`Medicine_Name`='$MedicineName',`Purchase_Date`='$PurchaseDate',`Expiration_Date`='$ExpirationDate',`Expiration_End`='$ExpirationEnd',`Price_user`='$Price',`Quantity_user`='$Quantity'WHERE `id`='$sno'";

$data = mysqli_query($conn,$sqli);

if ($data) {
    
     echo "<script>alert('( Thank You! The Change Medicine Data !! )')</script>";
     header("location:Medical_store_list.php");
}
else
{
     echo "<script>alert('( Sorry! No Change Medicine Data !! )')</script>";
}



}

?>
