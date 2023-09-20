<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opening Account Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                    <span  style="float:right;margin-top:5px;"><a href="index.php">Back</a></span>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container" style="height:600px">
            <h1 align="center">Request for opening Account</h1>
            <br><br>
            <form class="row g-3 border shadow-lg py-4" action="contact-us-db.php" method="POST">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="fname" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Father's Name" required>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="mname" class="form-label">Mother's Name</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Mother's Name" required>
                    <br>
                </div>
    
                <div class="col-md-6">
                    <label for="birth" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="birth" name="birth" placeholder="Date of Birth" required>
                    <br>
                </div>

                <div class="col-md-6">
                    <br>
                    <label type="radio" > Select Gender:</label><br>
        
                    <input type="radio"  class="form-check-input" name="gender" value="male">Male
                    <input type="radio"   class="form-check-input" name="gender" value="female">Female
                    <input type="radio"  class="form-check-input" name="gender" value="not say">Not Say
        
                    <br>
                </div>
       
                <div class="col-md-6">
                    <label for="pin" class="form-label">Pin</label>
                    <input type="password" class="form-control" id="pin" name="pin" placeholder="Pin" required>
                    <br>
                </div>    
                <div class="d-grid gap-2">      
                    <button type="submit" class="btn btn-success">Add Request</button>
                </div>     
                <br><br><br> 
          </form>
      </div>
  </main>
  <footer style="background-color:grey;height:50px;text-align:center;margin-top:10px">
           <span>ABC Bank Management System</span>
         
    </footer>  
</body>
</html>