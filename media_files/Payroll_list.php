
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
    <title>Payroll List</title>
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

/* Search and Add Payroll Section */
.search-add {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

#searchInput {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.add-payroll-btn {
    background-color: #004080; /* Blue Button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-payroll-btn:hover {
    background-color: #003366; /* Darker Blue on Hover */
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

/* Hover Effects */
table tr:hover {
    background-color: #f1f1f1;
    transition: background-color 0.3s ease;
}

/* Action and Payslip Buttons */
.payslip-btn, .edit-btn, .delete-btn {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: background-color 0.3s ease;
}

.payslip-btn {
    background-color: #28a745; /* Green for Payslip */
    color: white;
}

.edit-btn {
    background-color: #007bff; /* Blue for Edit */
    color: white;
}

.delete-btn {
    background-color: #dc3545; /* Red for Delete */
    color: white;
}

.payslip-btn:hover {
    background-color: #218838; /* Darker Green on Hover */
}

.edit-btn:hover {
    background-color: #0056b3; /* Darker Blue on Hover */
}

.delete-btn:hover {
    background-color: #c82333; /* Darker Red on Hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    table th, table td {
        padding: 10px;
        font-size: 0.8rem;
    }

    .add-payroll-btn {
        font-size: 0.9rem;
    }
}
/* Keyframe for Button Hover Animation */
@keyframes buttonHover {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.05);
    }
}

.payslip-btn:hover, .edit-btn:hover, .delete-btn:hover {
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

    <!-- Search and Add Payroll Section -->
    <div class="search-add">
        <input type="text" id="searchInput" placeholder="Search by Employee ID or Name">
        <!-- <button class="add-payroll-btn">Add Payroll</button> -->
    </div>
<h1 style="text-align: center; color:#848887;">Pay Roll</h1>
    <!-- Payroll List Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Join Date</th>
                    <th>Role</th>
                    <th>Salary</th>
                    <th>Pay Slip</th>
                    
                </tr>
            </thead>
            <tbody id="payrollTable">
                <!-- Example Row -->
               <?php
                  include("conn.php");

                  $sqli = "SELECT * FROM employee_db";
                  $data = mysqli_query($conn, $sqli);
                  $total = mysqli_num_rows($data);        

                  if ($total !== 0) {    
                      $serialNo = 1;
                      while ($result = mysqli_fetch_assoc($data)) {
                          // Sanitize output to prevent XSS
                          $employeeName = htmlspecialchars($result['Employee_Name']);
                          $gender = htmlspecialchars($result['Gender_user']);
                          $email = htmlspecialchars($result['Email_user']);
                          $contact = htmlspecialchars($result['Contact_user']);
                          $joinDate = htmlspecialchars($result['Join_Date']);
                          $role = htmlspecialchars($result['Role_user']);
                           $Salary = htmlspecialchars($result['Salary_user']);
                          
                          echo "<tr>
                                  <td>".$serialNo.".</td>
                                  <td>".$employeeName."</td>
                                  <td>(".$gender.")</td>
                                  <td>".$email."</td>
                                  <td><i class='fa-solid fa-phone-volume'></i>&nbsp; ".$contact."</td>
                                  <td><i class='fa-solid fa-calendar-days'></i>&nbsp;".$joinDate."</td>
                                  <td><i class='fa-solid fa-user-nurse'></i>&nbsp;".$role."</td>
                                   <td>₹".$Salary."</td>
                                  <td><a href='pdf_file/View_Payslip.php?en=$result[Employee_Name]&& eg=$result[Gender_user]&& em=$result[Email_user]&& ec=$result[Contact_user]&& jd=$result[Join_Date]&& rl=$result[Role_user]&& sl=$result[Salary_user]'><button class='payslip-btn'><i class='fa-solid fa-clipboard-list'></i>&nbsp; View Payslip</button></a></td>
                                </tr>";
                          $serialNo++;
                      }
                  } 
                ?>
                <!-- More rows can be added dynamically -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
    // Search function to filter payroll list
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#payrollTable tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

    </script>

</body>
</html>
