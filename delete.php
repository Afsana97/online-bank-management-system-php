<?php
include("connection.php");
$accNo = $_GET['accNo'];
$query = "DELETE FROM tblaccounts WHERE `tblaccounts`.`accountNo` = $accNo";

mysqli_query($con ,$query);

header("Location:view-accounts.php");
?>