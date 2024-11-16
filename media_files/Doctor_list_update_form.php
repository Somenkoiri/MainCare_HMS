
<?php
include("conn.php");

      $sno = $_POST['u_sno'];
     $doct_name  = $_POST['doctor_name'];
     $doct_email = $_POST['u_email'];
     $doct_dob = $_POST['u_dob'];
     $doct_address = $_POST['u_address'];
     $doct_phone = $_POST['u_phone'];
     $doct_deparment = $_POST['u_department'];


?>

<?php

if(isset($_POST['sub']))
{

    $mysq = "UPDATE `doctor_db` SET `id`='$sno',`doc_name`='$doct_name',`doc_email`='$doct_email',`doc_dob`='$doct_dob',`doc_address`='$doct_address',`doc_phone`='$doct_phone',`department`='$doct_deparment' WHERE `doc_dob`='$sno'";

    $datas = mysqli_query($conn,$mysq);

if($datas)
{
     header("location:Doctor_list.php");
}
else
{
    echo "not updated";
}


   

}

?>