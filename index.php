
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home Page</title>
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
                    <span  style="float:right;margin-top:5px;"><a href="contact-us-form.php">Contact Us</a></span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container" style="height:500px;width:800px;margin-left:400px ; margin-top:100px">
            <h3 style="color:#299617;text-align:center;"> Welcome to <br> online banking system</h3>
            <br><br>
            <form class="row g-3 border shadow-lg py-4" style="height:200px">
                <div class="d-grid gap-2 col-md-6">      
                    <button type="submit" class="btn btn-success" name="balance" value="submit"><a href="admin-login.php">Admin Log in</a></button>
                </div> 
                <div class="d-grid gap-2 col-md-6">      
                    <button type="submit" class="btn btn-success" name="deposit" value="submit"><a href="user-login-form.php">User Log In</a></button>
                </div>
            </form>
        </div>
    </main>

    <footer style="background-color:grey;height:50px;text-align:center;margin-top:10px">
           <span>ABC Bank Management System</span>
         
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>