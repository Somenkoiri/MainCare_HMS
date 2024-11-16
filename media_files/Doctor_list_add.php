
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
        <form id="doctorForm" action="" method="post" enctype="multipart/form-data" >
            <!-- Image Upload -->
            <label for="image"><b>Profile Image:</b></label>
            <input type="file" id="image" name="mu_file" accept="image/*">

            <!-- First Name -->
            <label for="firstName"><b>Doctor Name:</b></label>
            <input type="text" id="firstName" name="doctor_name" placeholder="Enter first name" required>

            <!-- Email -->
            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="u_email" placeholder="Enter email address" required>

            <!-- Date of Birth -->
            <label for="dob"><b>Date of Birth:</b></label>
            <input type="date" id="dob" name="u_dob" required>

            <!-- Gender Radio Buttons -->
            <label><b>Gender:</b></label>
            <div class="gender-options">
               Male: <input type="radio" id="male" name="u_gender" value="Male" required>
               
                Female: <input type="radio" id="female" name="u_gender" value="Female">
                Other: <input type="radio" id="female" name="u_gender" value="Other">
               
            </div>

            <!-- Address -->
            <label for="address"><b>Address:</b></label>
            <textarea id="address" name="u_address" placeholder="Enter address" required></textarea>

            <!-- Phone -->
            <label for="phone"><b>Phone:</b></label>
            <input type="tel" id="phone" name="u_phone" placeholder="Enter phone number" required>

            <!-- Department Dropdown -->
            <label for="department"><b>Department:</b></label>
            <select id="department" name="u_department" required>
                <option value="" disabled selected>Select department</option>
                <option name="u_department" value="Cardiology">Cardiology</option>
                <option name="u_department" value="Neurology">Neurology</option>
                <option name="u_department" value="Pediatrics">Pediatrics</option>
                <option name="u_department" value="Orthopedics">Orthopedics</option>
            </select>
            <label for="department"><b>Doctor Room:</b></label>
            <select id="department" name="d_rooms" required>
                <option value="" disabled selected>Select department</option>
                <option name="d_rooms" value="C-1">C-1</option>
                <option name="d_rooms" value="C-2">C-2</option>
                <option name="d_rooms" value="C-3">C-3</option>
                <option name="d_rooms" value="C-4">C-4</option>
            </select>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn" name="submit">Submit</button>
        </form>
    </div>

<?php
include("conn.php");

if (isset($_POST['submit'])) {
    // Handling the image file upload
    $img_item = $_FILES['mu_file']['name'];
    $img_tmp_name = $_FILES['mu_file']['tmp_name'];
    $img_folder = 'imge/' . $img_item;

    // Moving the uploaded file to the designated folder
    if (move_uploaded_file($img_tmp_name, $img_folder)) {
        // Gather form inputs
        $doct_name = $_POST['doctor_name'];
        $doct_email = $_POST['u_email'];
        $doct_dob = $_POST['u_dob'];
        $doct_gender = $_POST['u_gender'];
        $doct_address = $_POST['u_address'];
        $doct_phone = $_POST['u_phone'];
        $doct_department = $_POST['u_department'];
        $doct_room = $_POST['d_rooms'];

        // SQL Query to insert data
        $sql = "INSERT INTO `doctor_db` (`pic_user`, `doc_name`, `doc_email`, `doc_dob`, `doc_gender`, `doc_address`, `doc_phone`, `department`, `D_room`) 
                VALUES ('$img_folder', '$doct_name', '$doct_email', '$doct_dob', '$doct_gender', '$doct_address', '$doct_phone', '$doct_department','$doct_room')";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Doctor added successfully!');</script>";
            header("location: Doctor_list.php");
        } else {
            echo "<script>alert('Error: Could not insert data!');</script>";
        }
    } else {
        echo "<script>alert('Failed to upload image!');</script>";
    }

    // Close the database connection
    $conn->close();
}
?>

    <!-- JavaScript -->
  <!--   <script>
//         $(document).ready(function() {
//     // Form submission event handler
//     $('#doctorForm').on('submit', function(event) {
//         event.preventDefault(); // Prevent form from submitting

//         // Gather form data
//         const formData = {
//             image: $('#image').val(),
//             firstName: $('#firstName').val(),
//             lastName: $('#lastName').val(),
//             email: $('#email').val(),
//             dob: $('#dob').val(),
//             gender: $('input[name="gender"]:checked').val(),
//             address: $('#address').val(),
//             phone: $('#phone').val(),
//             department: $('#department').val(),
//         };

//         console.log('Form Data Submitted:', formData);
        
//         // Display a success message or further process the data (AJAX call, etc.)
//         alert('Doctor registered successfully!');
//     });
// });

    </script> -->

</body>
</html>
