<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGN UP FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container" >
    

<div class="container">
          <div class="container">
            <div class="col-sm-12">       
                <div class="col-sm-6" style="padding-left: 45px;">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>SignIn Form</h2>
                      <h6> Sign In to get instant access:</h6>                    
                    </div>
                     
                      <div class="panel-body">
                      <form  action="auth.php" method="POST">
                       
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" name="user_email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" name="user_pass" placeholder="Enter password">
                        </div>
          
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
        <div class="text-left" style="font-size: 14px;"><br>
            <span class="no__account"><i>Don't have an account.?</i><a href="userinfo.php" class="account__regiter"> Sign Up </a></span>
        </div><br>
         </form>
                  </div>
              </div>
          </div>
         
 
        </div>
      </div>
      </div>    
    </div>
</body>
</html>


