

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

// Check if GET parameters exist and sanitize them
$dd = isset($_GET['dd']) ? htmlspecialchars($_GET['dd']) : '';
$dr = isset($_GET['dr']) ? htmlspecialchars($_GET['dr']) : '';
$dp = isset($_GET['dp']) ? htmlspecialchars($_GET['dp']) : '';
$de = isset($_GET['de']) ? htmlspecialchars($_GET['de']) : '';
$dob = isset($_GET['dob']) ? htmlspecialchars($_GET['dob']) : '';
$da = isset($_GET['da']) ? htmlspecialchars($_GET['da']) : '';
$dn = isset($_GET['dn']) ? htmlspecialchars($_GET['dn']) : '';
$dg = isset($_GET['dg']) ? htmlspecialchars($_GET['dg']) : '';
$ig = isset($_GET['ig']) ? htmlspecialchars($_GET['ig']) : '';

?>

<?php 
$html ='
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Invoice</title>
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
        }
        .invoice-header h2 {
            margin: 0;
        }
        .doctor-img {
            max-width: 80px;
            height: auto;
        
        }
        .doctor-info {
            padding: 10px 0;
        }
        .invoice-details {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="invoice-box">
    <div class="invoice-header text-center">
        <h2>Doctor Invoice</h2>
    </div>

    <div class="row mt-4">
        <!-- Doctor Image -->
        <div class="col-md-4 text-center">
            <img src="https://srv788-files.hstgr.io/0bf8191394d496ea/files/public_html/sgblranchi/admin_page/imge/'.$ig.'" alt="Doctor Image" width="90px" height="90px" style="border-radius: 50%;" class="doctor-img img-thumbnail">
        </div>
        <!-- Doctor Information -->
        <div class="col-md-8">
            <div class="doctor-info">
                <h4>Dr. '.$dn.'</h4>
                <p><strong>Email:</strong>'.$de.'</p>
                <p><strong>Date of Birth:</strong> '.$dob.'</p>
                <p><strong>Gender:</strong> '.$dg.'</p>
                <p><strong>Address:</strong> '.$da.'</p>
                <p><strong>Room No:</strong> '.$dr.'</p>
                <p><strong>Phone:</strong> '.$dp.'</p>
                <p><strong>Department:</strong> '.$dd.'</p>
            </div>
        </div>
    </div>

    <!-- Invoice Details can go here if needed -->

    <!-- Footer -->
 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>