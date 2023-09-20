<?php
include("connection.php");

$name =$_POST['name'];
$fName =$_POST['fname'];
$mName =$_POST['mname'];
$birth =$_POST['birth'];
$gender =$_POST['gender'];
$pin =$_POST['pin'];

$query="INSERT INTO tblrequest (`name`, `fName`, `mName`, `dBirth`, `gender`, `pin`) 
          VALUES ('$name', '$fName', '$mName', '$birth', '$gender','$pin')";

$data=mysqli_query($con,$query); 
if($data)
{

    header("Location:index.php");
}         
?>