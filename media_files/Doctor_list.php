
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
    <title>Doctor List</title>
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

/* Search and Add Doctor Section */
.search-add {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

#searchInput {
    width: 70%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.add-doctor-btn {
    background-color: #004080; /* Blue Button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-doctor-btn:hover {
    background-color: #003366; /* Darker Blue */
}

/* Table Styles */
.table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

table th, table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #004080;
    color: white;
    text-transform: uppercase;
    font-size: 0.9rem;
}

table td img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

/* Hover Effects */
table tr:hover {
    background-color: #f1f1f1;
    transition: background-color 0.3s ease;
}

/* Buttons in Actions Column */
.edit-btn, .delete-btn {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: background-color 0.3s ease;
}

.edit-btn {
    background-color: #007bff; /* Blue */
    color: white;
}

.delete-btn {
    background-color: #dc3545; /* Red */
    color: white;
}

.edit-btn:hover {
    background-color: #0056b3; /* Darker Blue */
}

.delete-btn:hover {
    background-color: #c82333; /* Darker Red */
}

/* Responsive Design */
@media (max-width: 768px) {
    table th, table td {
        padding: 10px;
        font-size: 0.8rem;
    }

    .add-doctor-btn {
        font-size: 0.9rem;
    }
}
/*new css style*/
/* Keyframe for Button Hover */
@keyframes buttonHover {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.05);
    }
}

.edit-btn:hover, .delete-btn:hover {
    animation: buttonHover 0.3s forwards;
}

/* Keyframe for Row Appear Animation */
@keyframes rowAppear {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

table tbody tr {
    animation: rowAppear 0.5s ease;
    
}


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Search and Add Doctor Section -->
    <div class="search-add">
        <input type="text" id="searchInput" placeholder="Search Doctor by ID or Name">
        <button class="add-doctor-btn"><a href="Doctor_list_add.php" target="right" style="text-decoration: none; color:white;">Add Doctor </a></button>
    </div>
<h1 style="text-align: center; color:#848887;">Doctor</h1>
    <!-- Doctor List Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Doctor Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th colspan="2" align="center">Actions</th>
                </tr>
            </thead>
            <tbody id="doctorTable">

                <?php
                  
                  include("conn.php");

                    
                  $sqli = "SELECT * FROM doctor_db";
                  $data = mysqli_query($conn,$sqli);
                  $total = mysqli_num_rows($data);        

         if($total !==0 )
         {    
            $serialNo = 1;
           while ($result = mysqli_fetch_assoc($data)) {
           
            echo "<tr>
               <td>".$serialNo.".</td>
               <td><img src='".$result['pic_user']. "' alt='Doctor Image'></td>
               <td >".$result['doc_name']."</td>
               <td>".$result['doc_email']."</td>
               <td>".$result['doc_dob']."</td>
               <td>(".$result['doc_gender'].")</td>
               <td>".$result['doc_address']."</td>
               <td>".$result['doc_phone']."</td>
               <td>".$result['department']."</td>
               <td>
                   <a href='Doctor_list_update.php?im=$result[pic_user] && dn=$result[doc_name] && de=$result[doc_email] && dd=$result[doc_dob] && da=$result[doc_address] && dp=$result[doc_phone]'>
                         <button class='edit-btn'><i class='fa-solid fa-pen-to-square'></i>Edit</button></a>
                           
               </td>
               <td> <a href='Doctor_list_delete.php?sn=$result[doc_dob] '><button class='delete-btn'><i class='fa-solid fa-trash'></i>Delete</button></td></a>
            </tr>";
            $serialNo++;
           }

       } 


?>
              
                <!-- Example row -->
                
                <!-- More rows here -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script>
    	$(document).ready(function() {
    // Search function to filter doctor list
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#doctorTable tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

 </script>

</body>
</html>
