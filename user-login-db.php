<?php
session_start();
include("connection.php");

$accNo = $_POST['acc-no'];
$pinNum = $_POST['pin'];

$query = "SELECT * FROM tblaccounts WHERE accountNo='$accNo' and pin='$pinNum' ";

$result = mysqli_query( $con,$query );
$present = mysqli_num_rows($result);
    
 if($present>0)
{
    $sql = "SELECT accountNo From tblaccounts WHERE accountNo='$accNo' and pin='$pinNum' ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['accountNo'] = $row['accountNo'];
    header("Location:user-dashboard.php");
   
}  else{
    echo" wrong email or password";
}

?>