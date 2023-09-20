<?php
session_start();
include("connection.php");

$name =$_POST['name'];
$fName =$_POST['fname'];
$mName =$_POST['mname'];
$birth =$_POST['birth'];
$gender =$_POST['gender'];
$accNo =$_POST['acc-no'];
$pin =$_POST['pin'];

$query="INSERT INTO tblaccounts (`name`, `fName`, `mName`, `dBirth`, `gender`, `accountNo`, `pin`) 
          VALUES ('$name', '$fName', '$mName', '$birth', '$gender', '$accNo', '$pin')";

$data=mysqli_query($con,$query);
$_SESSION['dbirth'] = $row['dBirth']; 
if($data)
{
    $sql = "INSERT INTO tbldeposit (`ID`,`Amount`) VALUES ('$accNo','0')";
    mysqli_query($con,$sql);

    header("Location:admin-dashboard.php");
}         
?>