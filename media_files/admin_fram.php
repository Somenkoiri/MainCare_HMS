
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor.panel.com</title>
</head>
<?php
 $us = $_SESSION['uansme'];

 if($us == true)
 {

 }
 else{
    header('location:admin_login_panel.php');
 }

?>


<frameset cols="17%,*" border="0" noresize>
    <frame src="admin_Dashboard.php" name="left">
    <frameset rows="18%,*" border="0" noresize>
    	 <frame src="admin_top.php" name="top">
    <frame src="admin_Content.php" name="right">
   

    </frameset>
</frameset>

</html>