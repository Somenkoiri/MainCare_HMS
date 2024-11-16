
<?php
// Database connection
$server = "localhost";
$username= "root";
$password = "";
$db_name = "hospital_manage_application";

$conn = mysqli_connect($server, $username, $password, $db_name);

if (!$conn) {
    die("Not connected to database");
}

$en = $_GET['en'];
$eg = $_GET['eg'];
$em = $_GET['em'];
$ec = $_GET['ec'];
$jd = $_GET['jd'];
$rl = $_GET['rl'];
$sl = $_GET['sl'];



?>

<?php

$dou = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }
        .invoice-header {
            background-color: #f7f7f7;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        .invoice-header h2 {
            margin: 0;
        }
        .employee-details {
            margin-top: 20px;
        }
        .footer-note {
            margin-top: 30px;
            text-align: center;
        }
        .table td, .table th {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="invoice-box">
    <!-- Invoice Header -->
    <div class="invoice-header">
        <h2>Employee Invoice</h2>
    </div>

    <!-- Employee Information -->
    <div class="employee-details">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Employee Name:</th>
                    <td>'.$en.'</td>
                </tr>
                <tr>
                    <th scope="row">Gender:</th>
                    <td>'.$eg.'</td>
                </tr>
                <tr>
                    <th scope="row">Email:</th>
                    <td>'.$em.'</td>
                </tr>
                <tr>
                    <th scope="row">Contact:</th>
                    <td>'.$ec.'</td>
                </tr>
                <tr>
                    <th scope="row">Join Date:</th>
                    <td>'.$jd.'</td>
                </tr>
                <tr>
                    <th scope="row">Role:</th>
                    <td>'.$rl.'</td>
                </tr>
                <tr>
                    <th scope="row">Salary:</th>
                    <td>Rs:₹'.$sl.'</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';



require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($dou);
$mpdf->Output();





?>
