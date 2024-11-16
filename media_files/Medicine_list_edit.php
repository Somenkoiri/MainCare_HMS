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

$sn = $_GET['sn'];
$mn = $_GET['mn'];
$pd = $_GET['pd'];
$ed = $_GET['ed'];
$ee = $_GET['ee'];
$pu = $_GET['pu'];
$qu = $_GET['qu'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Form</title>
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
form input[type="date"],
form input[type="number"] {
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
    form input[type="date"],
    form input[type="number"] {
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

    <!-- Medicine Form -->
    <div class="form-container">
        <h2>Add New Medicine</h2>
        <form id="medicineForm" action="Medicine_list_update.php" method="post">

            <!-- Medicine Name -->
            <label for="medicineName"><b>Medicine Name</b></label>
            <input type="text" id="medicineName" name="medicineName" value ="<?php echo $mn; ?>" placeholder="Enter medicine name" required>
            <input type="hidden" id="sno" value ="<?php echo $sn; ?>" name="u_sno" required>

            <!-- Purchase Date -->
            <label for="purchaseDate"><b>Purchase Date</b></label>
            <input type="date" id="purchaseDate" value ="<?php echo $pd; ?>" name="purchaseDate" required>

            <!-- Expiration Date -->
            <label for="expirationDate"><b>Expiration Date</b></label>
            <input type="date" id="expirationDate" value ="<?php echo $ed; ?>" name="expirationDate" required>

            <!-- Expiration End -->
            <label for="expirationEnd"><b>Expiration End</b></label>
            <input type="date" id="expirationEnd" value ="<?php echo $ee; ?>" name="expirationEnd" required>

            <!-- Price -->
            <label for="price"><b>Price</b></label>
            <input type="number" id="price" name="price" value ="<?php echo $pu; ?>" placeholder="Enter price" step="0.01" required>

            <!-- Quantity -->
            <label for="quantity"><b>Quantity</b></label>
            <input type="number" id="quantity" name="quantity" value ="<?php echo $qu; ?>" placeholder="Enter quantity" required>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button type="submit" class="submit-btn" name="save">Save</button>
               <button type="reset" class="reset-btn"><a href="Medical_store_list.php" target="right" style="text-decoration: none; color:white;">Cancel</a></button>
            </div>
        </form>
    </div>



</body>
</html>
