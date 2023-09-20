<?php
include("connection.php");
$dBirth = $_GET['dBirth'];
$query = "DELETE FROM `tblrequest` WHERE dBirth='$dBirth'";

mysqli_query($con ,$query);

header("Location:admin-dashboard.php");
?>