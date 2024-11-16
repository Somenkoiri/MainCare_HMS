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

$dn = $_GET['dn']; 
$de = $_GET['de']; 
$dd = $_GET['dd'];  
$da = $_GET['da']; 
$dp = $_GET['dp']; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Form</title>
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
form input[type="tel"],
form textarea,
form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

form textarea {
    resize: vertical;
}

/* Input Hover & Focus */
form input:hover,
form select:hover,
form textarea:hover {
    border-color: #007bff;
}

form input:focus,
form select:focus,
form textarea:focus {
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

/* Department Dropdown */
select {
    appearance: none;
    background-color: white;
    border: 1px solid #ccc;
    padding: 10px;
}

select:focus {
    border-color: #004080;
}

/* Submit Button */
.submit-btn {
    background-color: #004080;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    background-color: #003366;
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
    form input[type="tel"],
    form textarea,
    form select {
        font-size: 0.9rem;
        padding: 8px;
    }

    .submit-btn {
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

    <!-- Doctor Registration Form -->
    <div class="form-container">
        <h2>Doctor Registration Form</h2>
        <form id="doctorForm" action="Doctor_list_update_form.php" method="post">

            <!-- First Name -->
            <label for="firstName"><b>Doctor Name:</b></label>
            <input type="text" id="firstName" name="doctor_name" value="<?php echo $dn; ?>" 
            placeholder="Enter first name" required>
            <input type="hidden" id="sno" value ="<?php echo $dd; ?>" name="u_sno" required>

            <!-- Email -->
            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="u_email" value="<?php echo $de; ?>" placeholder="Enter email address" required>

            <!-- Date of Birth -->
            <label for="dob"><b>Date of Birth:</b></label>
            <input type="date" id="dob" name="u_dob" value="<?php echo $dd; ?>" required>

            <!-- Address -->
            <label for="address"><b>Address:</b></label>
            <textarea id="address" name="u_address" value="<?php echo $da; ?>" placeholder="Enter address" required></textarea>

            <!-- Phone -->
            <label for="phone"><b>Phone:</b></label>
            <input type="tel" id="phone" name="u_phone" value="<?php echo $dp; ?>" placeholder="Enter phone number" required>

            <!-- Department Dropdown -->

            <!-- Submit Button -->
            <button type="submit" class="submit-btn" name="sub">Change</button>
        </form>




    </div>
</body>
</html>
