
<?php

include("conn.php");

if (isset($_POST['book'])) 
{   $sno = $_POST['u_sno'];
    $PatientName = $_POST['appointmentName'];
    $Department = $_POST['udepartment'];  
    $DoctorName = $_POST['doctor_name']; 
    $addres = $_POST['PatienAddress'];
    $AppointmentDate = $_POST['appointmentDate'];    
    $AppointmentTime = $_POST['appointmentTime'];    
    $PatientEmail = $_POST['patientEmail'];   
    $PatientPhone = $_POST['patientPhone'];
    $gender = $_POST['ugender'];  

    $sqli = "UPDATE `appointment_db` SET `id`='$sno',`Patient_Name`='$PatientName',`Department`='$Department',`Doctor_Name`='$DoctorName',`Patient_Address`='$addres',`Appointment_Date`='$AppointmentDate',`Appointment_Time`='$AppointmentTime',`Patient_Email`='$PatientEmail',`Patient_Phone`='$PatientPhone',`u_gender`='$gender' WHERE `id`='$sno'";

$data = mysqli_query($conn,$sqli);

if ($data) {

echo "<script>alert('( Thank You! Change This Word !! )')</script>";
 header("location:Appointment_list.php");
       
    }
    else
    {
        echo "<script>alert('( Sorry! Not Change This Word !! )')</script>"; 
    }

  


}

?>




