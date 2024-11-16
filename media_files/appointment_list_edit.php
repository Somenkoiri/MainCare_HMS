<?php
include("conn.php");
$sn = $_GET['sn'];
$pp = $_GET['pp'];
$pn = $_GET['pn'];
$pd = $_GET['pd'];
$dn = $_GET['dn'];
$ad = $_GET['ad'];
$at = $_GET['at'];
$pe = $_GET['pe'];
$pa = $_GET['pa'];

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
    <title>Appointment Form</title>
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
form input[type="time"],
form input[type="tel"],
form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

/* Input Hover & Focus */
form input:hover,
form select:hover {
    border-color: #007bff;
}

form input:focus,
form select:focus {
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
    form input[type="time"],
    form input[type="tel"],
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

    <!-- Appointment Form -->
    <div class="form-container">
        <h2>Book an Appointment</h2>
        <form id="appointmentForm" action="Appointment_list_update.php" method="post">
            <!-- Appointment Name -->
            <label for="appointmentName"><b>Appointment Name</b></label>
            <input type="text" id="appointmentName" name="appointmentName" value="<?php echo $pn; ?>" placeholder="Enter appointment name" required>
            <input type="hidden" id="sno" value ="<?php echo $sn; ?>" name="u_sno" required>

            <!-- Department Dropdown -->
            <label for="department"><b>Department</b></label>
            <select id="department" name="udepartment" value="<?php echo $pd; ?>" >
                <option value="" disabled selected><b>Select department</b></option>
                <option name="udepartment" value="cardiology">Cardiology</option>
                <option name="udepartment" value="neurology">Neurology</option>
                <option name="udepartment" value="pediatrics">Pediatrics</option>
                <option name="udepartment" value="orthopedics">Orthopedics</option>
            </select>

            <!-- Doctor Name -->
             <label for="department"><b>Doctor Name</b></label>
            <select id="department" name="doctor_name" value="<?php echo $dn; ?>" >
                <option value="" disabled selected>Select doctors</option>
                <option name="doctor_name" value="Somen">Somen</option>
                <option name="doctor_name" value="Ram">Ram</option>
                <option name="doctor_name" value="Nitai">Nitai</option>
                <option name="doctor_name" value="Bunny">Bunny</option>
            </select>
           
              <label for="appointmentName"><b>Patient Address</b></label>
            <input type="text" id="appointmentName" name="PatienAddress"  value ="<?php echo $pa; ?>"  placeholder="Enter appointment name" >

            <!-- Appointment Date -->
            <label for="appointmentDate"><b>Appointment Date</b></label>
            <input type="date" id="appointmentDate" value="<?php echo $ad; ?>" name="appointmentDate" required>

            <!-- Appointment Time -->
            <label for="appointmentTime"><b>Appointment Time</b></label>
            <input type="time" id="appointmentTime" value="<?php echo $at; ?>" name="appointmentTime" required>

            <!-- Patient Email -->
            <label for="patientEmail"><b>Patient Email</b></label>
            <input type="email" id="patientEmail" value="<?php echo $pe; ?>" name="patientEmail" placeholder="Enter patient email" required>

            <!-- Patient Phone -->
            <label for="patientPhone"><b>Patient Phone</b></label>
            <input type="tel" id="patientPhone" value="<?php echo $pp; ?>" name="patientPhone" placeholder="Enter patient phone" required>

            <!-- Gender Radio Buttons -->
            <label><b>Gender</b></label>
            <div class="gender-options">
               Male:  <input type="radio" id="male" name="ugender" value="Male" required>
               
               Female: <input type="radio" id="female" name="ugender" value="Female">
                  Other: <input type="radio" id="female" name="ugender" value="Other">
              
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn" name="book">Book Appointment</button>
        </form>

    </div>

    <!-- JavaScript -->
    <!-- <script> -->
<!-- //         $(document).ready(function() {
//     // Form submission event handler
//     $('#appointmentForm').on('submit', function(event) {
//         event.preventDefault(); // Prevent form from submitting

//         // Gather form data
//         const formData = {
//             appointmentName: $('#appointmentName').val(),
//             department: $('#department').val(),
//             doctorName: $('#doctorName').val(),
//             appointmentDate: $('#appointmentDate').val(),
//             appointmentTime: $('#appointmentTime').val(),
//             patientEmail: $('#patientEmail').val(),
//             patientPhone: $('#patientPhone').val(),
//             gender: $('input[name="gender"]:checked').val(),
//         };

//         console.log('Form Data Submitted:', formData);

//         // Display a success message or further process the data (AJAX call, etc.)
//         alert('Appointment booked successfully!');
//     });
// }); -->

    <!-- </script> -->

</body>
</html>
