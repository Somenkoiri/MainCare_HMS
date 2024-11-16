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
    <title>Hospital Navbar</title>
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
    overflow: hidden;
}

/* Navbar Styling */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #004080; /* Dark Blue */
    padding: 10px 20px;
    color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;

}

.hospital-name {
    font-size: 1.5rem;
    color: white;
}

/* Icons Section */
.navbar-icons {
    display: flex;
    align-items: center;
}

.icon {
    font-size: 1.5rem;
    margin-left: 20px;
    color: white;
    position: relative;
}

.icon:hover {
    color: #ffcc00; /* Yellow on hover */
    transform: scale(1.2);
    transition: color 0.3s ease, transform 0.3s ease;
}

.badge {
    background-color: red;
    color: white;
    padding: 2px 6px;
    border-radius: 50%;
    position: absolute;
    top: -5px;
    right: -10px;
    font-size: 0.8rem;
}

/* Admin Dropdown */
.navbar-right {
    position: relative;
}

.dropdown {
    position: relative;
}

.dropdown-btn {
    background-color: #ffcc00; /* Yellow Button */
    color: black;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.dropdown-btn:hover {
    background-color: #ff9900; /* Darker Yellow on hover */
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: white;
    min-width: 150px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    z-index: 1000;
}

.dropdown-content a {
    color: #333;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #f0f0f0;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Responsive Navbar */
@media (max-width: 768px) {
    .hospital-name {
        font-size: 1.2rem;
    }

    .navbar-icons {
        display: none;
    }

    .dropdown-btn {
        font-size: 0.9rem;
    }
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <!-- Hospital Name and Logo -->
        <div class="navbar-left">
            <h1 class="hospital-name"><span style="color:red;">MainCare</span> Hospital</h1>
        </div>

        <!-- Icons: Notifications, Messages -->
        <div class="navbar-icons">
            <a href="#" class="icon notifications">
                <i class="icon">&#128276;</i> <!-- Notification Icon -->
                <span class="badge">3</span> <!-- Notification Count -->
            </a>
            <a href="#" class="icon messages">
                <i class="icon">&#128231;</i> <!-- Message Icon -->
                <span class="badge">5</span> <!-- Message Count -->
            </a>
        </div>

        <!-- Admin Dropdown -->
        <div class="navbar-right">
            <div class="dropdown">
                <button class="dropdown-btn">Admin &#9660;</button>
                <div class="dropdown-content">
                    <a href="#">My Profile</a>
                    <a href="logout_admin.php" target="_parent">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- JavaScript -->
    <script>
    	$(document).ready(function() {
    // Smooth hover animations are handled by CSS, no extra JavaScript needed
});

    </script>

</body>
</html>
