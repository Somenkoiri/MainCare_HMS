
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

$pn = $_GET['pn'];
$ug = $_GET['ug'];
$pa = $_GET['pa'];
$dp = $_GET['dp'];
$dn = $_GET['dn'];
$pe = $_GET['pe'];
$pp = $_GET['pp'];
$ad = $_GET['ad'];
$at = $_GET['at'];




?>

<?php 
$htmls = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Invoice</title>
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
        .appointment-details {
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
        <h2>Appointment Invoice</h2>
    </div>

    <!-- Patient and Appointment Information -->
    <div class="appointment-details">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Patient Name:</th>
                    <td>'.$pn.'</td>
                </tr>
                <tr>
                    <th scope="row">Department:</th>
                    <td>'.$dp.'</td>
                </tr>
                <tr>
                    <th scope="row">Gender:</th>
                    <td>'.$ug.'</td>
                </tr>
                <tr>
                    <th scope="row">Doctor Name:</th>
                    <td>Dr.'.$dn.'</td>
                </tr>
                <tr>
                    <th scope="row">Appointment Date:</th>
                    <td>'.$ad.'</td>
                </tr>
                <tr>
                    <th scope="row">Appointment Time:</th>
                    <td>'.$at.'</td>
                </tr>
                <tr>
                    <th scope="row">Patient Email:</th>
                    <td>'.$pe.'</td>
                </tr>
                <tr>
                    <th scope="row">Patient Phone:</th>
                    <td>'.$pp.'</td>
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
$mpdf->WriteHTML($htmls);
$mpdf->Output();




?>
