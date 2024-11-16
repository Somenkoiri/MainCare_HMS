<?php
include("conn.php");
$sn = $_GET['sn'];
$en = $_GET['en'];
$eg = $_GET['eg'];
$em = $_GET['em'];
$ec = $_GET['ec'];
$jd = $_GET['jd'];
$er = $_GET['er'];

?>


<?php
session_start();
 $us = $_SESSION['uansme'];

 if($us == true)
 {

 }
 else{
    header('location:admin_login_panel.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
   <style>
       /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f0f0f0;
    padding: 20px;
}

/* Form Container */
.form-container {
    background-color: white;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #004080;
}

/* Form Elements */
form label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

form input[type="text"],
form input[type="email"],
form input[type="date"],
form input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

/* Input Hover & Focus */
form input:hover {
    border-color: #007bff;
}

form input:focus {
    border-color: #004080;
    outline: none;
}

/* Gender Radio Buttons */
.gender-options {
    margin-bottom: 15px;
}

.gender-options input[type="radio"] {
    margin-right: 10px;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    justify-content: space-between;
}

.submit-btn,
.reset-btn {
    background-color: #004080;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 48%;
}

.submit-btn:hover {
    background-color: #003366;
}

.reset-btn:hover {
    background-color: #555555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-container {
        padding: 15px;
    }

    h2 {
        font-size: 1.5rem;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="date"],
    form input[type="tel"] {
        font-size: 0.9rem;
        padding: 8px;
    }

    .submit-btn,
    .reset-btn {
        font-size: 0.9rem;
        padding: 10px;
    }
}
/* Keyframe for Form Appear Animation */
@keyframes formAppear {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-container {
    animation: formAppear 0.6s ease;
}

   </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Employee Form -->
    <div class="form-container">
        <h2>Add New Employee</h2>
        <form id="employeeForm" action="Employee_list_update.php" method="post" >
            <!-- Employee Name -->
            <label for="employeeName"><b>Employee Name</b></label>
            <input type="text" id="employeeName" name="employeeName" placeholder="Enter employee name" required>
            <input type="hidden" id="sno" value ="<?php echo $sn; ?>" name="u_sno" required>

            <!-- Gender Radio Buttons -->
            <label><b>Gender</b></label>
            <div class="gender-options">
               Male: <input type="radio" id="male" name="gender" value ="<?php echo $eg; ?>" required>
               
               Female: <input type="radio" id="female" name="gender" value ="<?php echo $eg; ?>">
                Other: <input type="radio" id="female" name="gender" value ="<?php echo $eg; ?>">
                
            </div>

            <!-- Email -->
            <label for="employeeEmail"><b>Email</b></label>
            <input type="email" id="employeeEmail" value ="<?php echo $em; ?>" name="employeeEmail" placeholder="Enter employee email" required>

            <!-- Contact -->
            <label for="employeeContact"><b>Contact</b></label>
            <input type="tel" id="employeeContact" value ="<?php echo $ec; ?>" name="employeeContact" placeholder="Enter employee contact" required>

            <!-- Join Date -->
            <label for="joinDate"><b>Join Date</b></label>
            <input type="date" id="joinDate" value ="<?php echo $jd; ?>" name="joinDate" required>
            <!-- Role -->
              <label for="department"><b>Job Role</b></label>
            <select id="department" value ="<?php echo $er; ?>" style="width:100%; height: 30px; font-size:20px;" name="Job_role" required>
                <option value="" disabled selected>Select Roles</option>
                <option name="Job_role" value="Doctor">Doctor</option>
                <option name="Job_role" value="Worker">Worker</option>
                <option name="Job_role" value="Piun">Piun</option>
                <option name="Job_role" value="Sister">Sister</option>
            </select>
                  <!-- Salary -->
             <label for="department"><b>Salary</b></label>
            <select id="department" style="width:100%; height: 30px; font-size:20px;" name="Job_Salary" required>
                <option value="" disabled selected>Select Salary</option>
                <option name="Job_Salary" value="16000">Doctor (15000,16000)</option>
                <option name="Job_Salary" value="4000">Worker (3000,4000)</option>
                <option name="Job_Salary" value="6000">Piun (2000,6000)</option>
                <option name="Job_Salary" value="12000">Sister (7000,6000)</option>
            </select>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button type="submit" class="submit-btn" name="save">Save</button>
                <button type="reset" class="reset-btn"><a href="Employees_list.php" target="right" style="text-decoration: none; color:white;">Cancel</a></button>
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <!-- <script> -->
<!-- //         $(document).ready(function() {
//     // Form submission event handler
//     $('#employeeForm').on('submit', function(event) {
//         event.preventDefault(); // Prevent form from submitting

//         // Gather form data
//         const formData = {
//             employeeName: $('#employeeName').val(),
//             gender: $('input[name="gender"]:checked').val(),
//             employeeEmail: $('#employeeEmail').val(),
//             employeeContact: $('#employeeContact').val(),
//             joinDate: $('#joinDate').val(),
//             employeeRole: $('#employeeRole').val(),
//         };

//         console.log('Form Data Submitted:', formData);

//         // Display a success message or further process the data (AJAX call, etc.)
//         alert('Employee details saved successfully!');
//     });
// }); -->

    <!-- </script> -->

</body>
</html>
