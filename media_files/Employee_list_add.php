
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

<?php
include("conn.php");

if(isset($_POST['save'])) {

    $EmployeeName = $_POST['employeeName'];   
    $Gender = $_POST['gender'];  
    $Email = $_POST['employeeEmail'];   
    $Contact = $_POST['employeeContact']; 
    $JoinDate = $_POST['joinDate'];   
    $Role = $_POST['Job_role']; 
    $Salary = $_POST['Job_Salary'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO employee_db (Employee_Name, Gender_user, Email_user, Contact_user, Join_Date, Role_user, Salary_user) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $EmployeeName, $Gender, $Email, $Contact, $JoinDate, $Role, $Salary);

    if ($stmt->execute()) {
        echo "<script>alert('( Thank You! Employee Added !! )')</script>";
    } else {
        echo "<script>alert('( Sorry! Data Insertion Failed: " . $conn->error . " )')</script>";
    }

    $stmt->close();
    $conn->close();
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

        .form-container {
            background-color: white;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: formAppear 0.6s ease;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #004080;
        }

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

        form input:hover {
            border-color: #007bff;
        }

        form input:focus {
            border-color: #004080;
            outline: none;
        }

        .gender-options {
            margin-bottom: 15px;
        }

        .gender-options input[type="radio"] {
            margin-right: 10px;
        }

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

        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            h2 {
                font-size: 1.5rem;
            }

            form input {
                font-size: 0.9rem;
                padding: 8px;
            }

            .submit-btn,
            .reset-btn {
                font-size: 0.9rem;
                padding: 10px;
            }
        }

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
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Employee</h2>
        <form id="employeeForm" method="post">

            <label for="employeeName"><b>Employee Name</b></label>
            <input type="text" id="employeeName" name="employeeName" placeholder="Enter employee name" required>

            <label><b>Gender</b></label>
            <div class="gender-options">
                Male: <input type="radio" id="male" name="gender" value="Male" required>
                Female: <input type="radio" id="female" name="gender" value="Female">
                Other: <input type="radio" id="other" name="gender" value="Other">
            </div>

            <label for="employeeEmail"><b>Email</b></label>
            <input type="email" id="employeeEmail" name="employeeEmail" placeholder="Enter employee email" required>

            <label for="employeeContact"><b>Contact</b></label>
            <input type="tel" id="employeeContact" name="employeeContact" placeholder="Enter employee contact" required>

            <label for="joinDate"><b>Join Date</b></label>
            <input type="date" id="joinDate" name="joinDate" required>

            <label for="department"><b>Job Role</b></label>
            <select id="department" style="width:100%; height: 30px; font-size:20px;" name="Job_role" required>
                <option value="" disabled selected>Select Roles</option>
                <option value="Doctor">Doctor</option>
                <option value="Worker">Worker</option>
                <option value="Piun">Piun</option>
                <option value="Sister">Sister</option>
            </select>

            <label for="department"><b>Salary</b></label>
            <select id="department" style="width:100%; height: 30px; font-size:20px;" name="Job_Salary" required>
                <option value="" disabled selected>Select Salary</option>
                <option value="Rs-16000">Doctor (15000,16000)</option>
                <option value="Rs-4000">Worker (3000,4000)</option>
                <option value="Rs-6000">Piun (2000,6000)</option>
                <option value="Rs-12000">Sister (7000,6000)</option>
            </select>

            <div class="action-buttons">
                <button type="submit" class="submit-btn" name="save">Save</button>
                <a href="Employees_list.php" target="right" class="reset-btn" style="text-decoration: none; color:white;">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
