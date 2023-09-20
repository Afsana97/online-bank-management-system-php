<?php
session_start();
include("connection.php");

$email = $_POST['email'];
$password = $_POST['pass'];

$query = "SELECT * FROM tbladmin WHERE Email='$email' and Pass='$password' ";

$result = mysqli_query( $con,$query );
$present = mysqli_num_rows($result);
    
 if($present>0)
{
    $sql = "SELECT Email From tbladmin WHERE Email='$email' and Pass='$password' ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['Email'] = $row['Email'];
    header("Location:admin-dashboard.php");
   
}  else{
    echo" wrong email or password";
}

?>