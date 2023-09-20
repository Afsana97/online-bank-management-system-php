<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Accounts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <header class="header bg-success">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/ABC-bank-logo.png" alt="" height="50px" width="80px">
                </div>
                <div class="col-md-6">
                <span  style="float:right;margin-top:5px;"><a href="admin-dashboard.php">Back</a></span>
                </div>
            </div>
        </div>
    </header>



    <?php
    include("connection.php");

    $query = "SELECT * FROM tblaccounts";
    $result = mysqli_query($con,$query);
    ?>
    <div class="contaier" style="height:500px">
        <table  class=" container bg-success" align="center" style="margin-top:100px;border:55px solid">
            <tr>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Account No</th>
                <th>Delete Account</th>
            </tr>

        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "
                <tr>
                <td>$row[name]</td>
                <td>$row[fName]</td>
                <td>$row[mName]</td>
                <td>$row[dBirth]</td>
                <td>$row[gender]</td>
                <td>$row[accountNo]</td>
                <td><a href=delete.php?accNo=$row[accountNo]>Delete</a></td>
                
                </tr>
            ";
        
        }
        ?>
        </table>
    </div>
    <footer style="background-color:grey;height:50px;text-align:center;margin-top:10px">
           <span>ABC Bank Management System</span>
         
    </footer> 
</body>
</html>