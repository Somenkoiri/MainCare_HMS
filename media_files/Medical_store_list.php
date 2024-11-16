
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
    <title>Medicine Store List</title>
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

/* Search and Add Medicine Section */
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

.add-medicine-btn {
    background-color: #004080; /* Blue Button */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-medicine-btn:hover {
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

/* Action Buttons */
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

    .add-medicine-btn {
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Search and Add Medicine Section -->
    <div class="search-add">
        <input type="text" id="searchInput" placeholder="Search by Medicine ID or Name">
        <button class="add-medicine-btn"><a href="Medicine_list_add.php" target="right" style="text-decoration: none; color:white;">Add Medicine</a></button>
    </div>

    <!-- Medicine Store List Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Medicine Name</th>
                    <th>Purchase Date</th>
                    <th>Expiration Date</th>
                    <th>Expiration End</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th >Actions</th>
                </tr>
            </thead>
            <tbody id="medicineTable">
            
              <!-- Example Row -->

              <?php

                include("conn.php");

                $mysquery = "SELECT * FROM medicine_db";
                $data = mysqli_query($conn,$mysquery);
                $total = mysqli_num_rows($data); 
               

                if ($total !==0) {
                    $sno = 1;
                    while($result = mysqli_fetch_assoc($data))
                    {
                        echo "<tr>
                    <td>".$sno."</td>
                    <td>".$result['Medicine_Name']."</td>
                    <td>".$result['Purchase_Date']."</td>
                    <td>".$result['Expiration_Date']."</td>
                    <td>".$result['Expiration_End']."</td>
                    <td>₹".$result['Price_user']."</td>
                    <td>".$result['Quantity_user']."</td>
                    <td>
                        <button class='edit-btn'><a style='text-decoration: none; color:white;' href='Medicine_list_edit.php?sn=$result[id] && mn=$result[Medicine_Name] && pd=$result[Purchase_Date] && ed=$result[Expiration_Date] && ee=$result[Expiration_End] && pu=$result[Price_user] && qu=$result[Quantity_user]'>Edit</a></button>
                        <button class='delete-btn'><a style='text-decoration: none; color:white;' href='Medicine_list_delete.php?sn=$result[id]'>Delete</a></button>
                    </td>
                </tr>";

                 $sno++;   }
                }






              ?>
               
                <!-- More rows can be added dynamically -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
    // Search function to filter medicine list
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#medicineTable tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

    </script>

</body>
</html>
