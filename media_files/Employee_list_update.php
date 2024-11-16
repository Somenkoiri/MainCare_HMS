
<?php
include("conn.php");

if(isset($_POST['save']))
{
 $sno = $_POST['u_sno'];
$EmployeeName = $_POST['employeeName'];   
$Gender = $_POST['gender'];  
$Email = $_POST['employeeEmail'];   
$Contact = $_POST['employeeContact']; 
$JoinDate = $_POST['joinDate'];   
$Role = $_POST['Job_role']; 
$Salary = $_POST['Job_Salary'];

$sql = "UPDATE `employee_db` SET `id`='$sno',`Employee_Name`='$EmployeeName',`Gender_user`='$Gender',`Email_user`='$Email',`Contact_user`='$Contact',`Join_Date`='$JoinDate',`Role_user`='$Role',`Salary_user`='$Salary' WHERE `id`='$sno'";

$data = mysqli_query($conn,$sql);

if ($data) {

       echo "<script>alert('( Thank You! Change The Employees Data !! )')</script>";
       header("location:Employees_list.php");
       
    }
    else
    {
        echo "<script>alert('( Sorry! Not Change Data!! )')</script>"; 
    }

   

}

?>
