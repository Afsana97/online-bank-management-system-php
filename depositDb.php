<?php
session_start();
include("connection.php");
$money = $_POST['deposit'];
$ID=$_SESSION['accountNo'];

$query = "SELECT Amount from tbldeposit where ID = '$ID'";
$result = mysqli_query($con,$query);
$present = mysqli_num_rows($result);
if($present>0)
{
    $row = mysqli_fetch_array($result);
    $deposit = $row['Amount'];
    $total = $deposit + $money;
    $sql = "UPDATE tbldeposit Set Amount='$total' Where ID='$ID'";
    $result = mysqli_query($con,$sql);
    header("Location:user-dashboard.php");
}else{
    $query = "INSERT INTO tbldeposit (ID,Amount) VALUES($ID,$money)";
    $result = mysqli_query($con,$query);

}
?>