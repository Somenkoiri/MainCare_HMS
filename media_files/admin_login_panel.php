<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Admin Login</title>
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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    color: #333;
}

/* Back Button */
.back-btn {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px 20px;
    background-color: #004080;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease-in-out;
}

.back-btn:hover {
    background-color: #003366;
}

.icon {
    margin-right: 8px;
}

/* Login Form */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.login-box {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.login-box h2 {
    margin-bottom: 20px;
    font-size: 2rem;
    color: #004080;
}

.input-box {
    position: relative;
    margin-bottom: 20px;
}

.input-box i.icon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #004080;
}

.input-box input {
    width: 100%;
    padding: 10px 40px;
    background-color: #f0f0f0;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    color: #333;
    transition: box-shadow 0.3s ease;
}

.input-box input:focus {
    box-shadow: 0 0 10px rgba(0, 64, 128, 0.5);
    outline: none;
}

.login-btn {
    padding: 10px 20px;
    background-color: #004080;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-btn:hover {
    background-color: #003366;
}

/* Footer */
footer {
    position: absolute;
    bottom: 10px;
    text-align: center;
    width: 100%;
    color: #333;
}

/* Keyframe Animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .login-box {
        width: 90%;
        padding: 20px;
    }

    .back-btn {
        font-size: 0.9rem;
        
    }
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Back Button -->
    <button class="back-btn" >
        <i class="icon">&#8592;</i><a href="\HMS/index.php" style="text-decoration: none; color:white;">Back</a>
    </button>

    <!-- Login Form -->
    <div class="login-container">
        <div class="login-box">
            <h2>Doctor Admin Login</h2>
            <form action="" method="POST">
                <div class="input-box">
                    <i class="icon">&#128100;</i> <!-- User Icon -->
                    <input type="email" id="username" name="u_eml" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <i class="icon">&#128274;</i> <!-- Lock Icon -->
                    <input type="password" id="password" name="u_pass" placeholder="Password" required>
                </div>
                <button type="submit" name="sb" class="login-btn">Login</button>
            </form>
        </div>
    </div>

<?php

include("conn.php");

if(isset($_POST['sb']))
{
    $u_eml = $_POST['u_eml'];
    $u_pass = $_POST['u_pass'];

    $sql = "SELECT * FROM `admin_login_pass` WHERE  user_email='$u_eml' && user_password='$u_pass'";
    $data = mysqli_query($conn, $sql);
    $total =mysqli_num_rows($data);
    if ($total == 1) {

         $_SESSION['uansme'] = $u_eml;
        header('location:admin_fram.php');
    }
    else
    {
        echo "<script>alert('( Sorry! Wrrong Both Values!! )')</script>"; 
    }


}






?>








    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Hospital Admin Panel</p>
    </footer>

    <!-- JavaScript -->
  <script>
        // Back button function
        function goBack() {
            window.history.back();
        }

    </script> 
</body>
</html>
