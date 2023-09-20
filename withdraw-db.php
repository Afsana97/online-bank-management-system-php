<?php
session_start();
include("connection.php");
$money = $_POST['deposit'];
$ID=$_SESSION['accountNo'];

$sql = "SELECT Amount from tbldeposit Where ID = '$ID'";
$result = mysqli_query($con,$sql);
$present = mysqli_num_rows($result);
if ($present>0)
{
    $row = mysqli_fetch_array($result);
    $Amount = $row['Amount'];
    if($Amount>$money)
    {
        $sum = $Amount - $money;
        $sql = "UPDATE tbldeposit Set Amount='$sum' Where ID='$ID'";
        $result = mysqli_query($con,$sql);
        header("Location:user-dashboard.php");
    
    }else{
        $_SESSION['alert'] = "Not Enough Money";
        header("Location:withdraw.php");
    }

   
}
?>