<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
   <style>
   	/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    background-color: #f0f0f0;
    height: 100vh;
    color: #333;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: #004080;
    color: white;
    height: 100vh;
    padding: 20px;
    position: fixed;
    display: flex;
    flex-direction: column;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin: 15px 0;
    position: relative;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover {
    background-color: #003366;
    padding-left: 10px;
    border-radius: 5px;
}

.icon {
    margin-right: 10px;
    font-size: 1.2rem;
}

/* Dropdown */
.dropdown-content {
    display: none;
    flex-direction: column;
    background-color: #003366;
    padding: 10px;
    border-radius: 5px;
}

.dropdown:hover .dropdown-content {
    display: block;
    position: absolute;
    left: 0;
    top: 100%;
}

.dropdown-content li a {
    padding: 5px 0;
}

.dropdown-content li a:hover {
    padding-left: 10px;
}

/* Main Content */
.main-content {
  
    padding: 40px;
    width: 100%;
}

header {
    background-color: #004080;
    padding: 20px;
    border-radius: 10px;
    color: white;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
}

.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card .icon {
    font-size: 3rem;
    color: #004080;
}

.card h3 {
    margin-top: 15px;
    color: #333;
}

/* Animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Media Queries for Responsive Design */
@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
        padding: 20px;
    }

    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .card-container {
        grid-template-columns: 1fr;
    }
}

   </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php

 $us = $_SESSION['uansme'];

 if($us == true)
 {

 }
 else{
    header('location:admin_login_panel.php');
 }

?>

<body>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Welcome to the Doctor Dashboard</h1>
        </header>

        <div class="card-container">
            <div class="card">
                <i class="icon">🩺</i>
               <h3>Total Doctor</h3>
                 
                 <?php
                  error_reporting(0);
                 include("conn.php");
                 $sqli = "SELECT * FROM  doctor_db";
                 $data = mysqli_query($conn,$sqli);
                 $total = mysqli_num_rows($data);

                 if ($data !=0) {
                     echo "<h2 style='color: blue;'>$total</h2>";
                 }



                 ?>


            </div>
            <div class="card">
                <i class="icon">&#128137;</i>
                <h3>Total Appointments</h3>
                  <?php
                  error_reporting(0);
                 include("conn.php");
                 $sqli = "SELECT * FROM  appointment_db";
                 $data = mysqli_query($conn,$sqli);
                 $total = mysqli_num_rows($data);

                 if ($data !=0) {
                     echo "<h2 style='color: blue;'>$total</h2>";
                 }



                 ?>
            </div>
             <div class="card">
                <i class="icon">&#128137;</i>
                <h3> Total Employees</h3>
                  <?php
                  error_reporting(0);
                 include("conn.php");
                 $sqli = "SELECT * FROM  employee_db";
                 $data = mysqli_query($conn,$sqli);
                 $total = mysqli_num_rows($data);

                 if ($data !=0) {
                     echo "<h2 style='color: blue;'>$total</h2>";
                 }



                 ?>
            </div>
            <div class="card">
                <i class="icon">&#128722;</i>
                <h3>Medical Store</h3>
                   <?php
                  error_reporting(0);
                 include("conn.php");
                 $sqli = "SELECT * FROM  medicine_db";
                 $data = mysqli_query($conn,$sqli);
                 $total = mysqli_num_rows($data);

                 if ($data !=0) {
                     echo "<h2 style='color: blue;'>$total</h2>";
                 }



                 ?>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
