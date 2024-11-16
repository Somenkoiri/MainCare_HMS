
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>left</title>
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
    margin-bottom: 30px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover {
    background-color: #003366;
    padding-left: 20px;
}

.icon {
    margin-right: 15px;
    font-size: 1.5rem;
}

/* Main Content */
.main-content {
    margin-left: 260px;
    padding: 40px;
    width: calc(100% - 260px);
    background-color: #fff;
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

.content-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s ease-in-out;
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

/* Responsive Design */
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

    .content-cards {
        grid-template-columns: 1fr;
    }
}

/*new code side*/

/* Dropdown Button */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #004080;
    color: white;
    padding: 15px 20px;
    font-size: 18px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.dropbtn i {
    margin-right: 10px;
}

/* Dropdown Content */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 200px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
    overflow: hidden;
}

.dropdown-content a {
    color: #004080;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
    color: #003366;
}

/* Show the dropdown on hover */
.dropdown:hover .dropdown-content {
    display: block;
    animation: dropdownAnimation 0.3s ease-in-out;
}

/* Hover Effect for Drop Button */
.dropdown:hover .dropbtn {
    background-color: #003366;
    transition: background-color 0.3s ease;
}

/* Dropdown Animation */
@keyframes dropdownAnimation {
    0% {
        opacity: 0;
        transform: translateY(-10px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .dropbtn {
        font-size: 16px;
        padding: 12px 18px;
    }

    .dropdown-content {
        min-width: 150px;
    }

    .dropdown-content a {
        padding: 10px 14px;
    }
}

	</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

     <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <h2><a href="admin_Content.php" target="right" style="text-decoration: none; color:white;">Dashboard</a></h2>
        <ul>
              <!-- Dropdown Button -->
  <!--   <div class="dropdown">
        <button class="dropbtn"><i class="fas fa-user-md"></i> Select Doctor <i class="fas fa-caret-down"></i></button>
        <div class="dropdown-content">
            <a href="#"><i class="fas fa-user-md"></i> Dr. John Doe</a>
            <a href="#"><i class="fas fa-user-md"></i> Dr. Jane Smith</a>
            <a href="#"><i class="fas fa-user-md"></i> Dr. Richard Roe</a>
        </div>
    </div> -->
 <li><a href="Employees_list.php" target="right"><i class="icon">&#128218;</i> Employees</a></li>
            <li><a href="Doctor_list.php" target="right"><i class="icon">&#128100;</i> Doctor</a></li>
             <li><a href="Departments_list.php" target="right"><i class="icon">&#128188;</i> Departments</a></li>
             <li><a href="Appointments_list.php" target="right"><i class="icon">&#128197;</i> Appointments</a></li>
            <li><a href="Patients_list.php" target="right"><i class="icon">&#128137;</i> Patients</a></li>
            <li><a href="Payroll_list.php" target="right"><i class="icon">&#128179;</i> Pay Roll Salary</a></li>
            <li><a href="Medical_store_list.php" target="right"><i class="icon">&#128722;</i> Medical Store</a></li>
        </ul>
    </nav>

    <!-- JavaScript -->
    <script>
   $(document).ready(function() {
    // Smooth scroll to sections
    $('a[href^="#"]').on('click', function(event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 600);
        }
    });
});

    </script>
</body>
</html>

</body>
</html>