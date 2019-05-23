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
    
    
    <body bgcolor="#E6E6FA">  
   
 <div class="container">                                         
              <div class="col-sm-6" style="padding-left: 45px;">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2>Sign up now </h2>
                      <h6> Fill in the form below to get instant access:</h6>                    
                    </div>
                     
                      <div class="panel-body">
                      <form class="signup-form" action="register.php" method="post">
                       <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="name" class="form-control" name="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                          <label for="phno">Phone No:</label>
                          <input type="text" class="form-control" name="mnumber" placeholder="Enter Mobile No">
                        </div>

                        <div class="form-group">
                          <label for="cat">Catagory:</label><br>
                          <select name="type">
                            <option value="student">Student</option>
                            <option value="staff">Staff</option>
                            <option value="faculty">Faculty</option>
                            
                          </select>
</div>
                        <div class="form-group"> 
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" name="psw" placeholder="Enter password">
                        </div>
                          <button type="submit" class="btn btn-default" name="submit">Submit</button>  
                        <br><br>
                        <a href="index.php">Back To Log in</a>
                      </form>
                  </div>
              </div>
    
          </div>
        </div>
</body>

</html>

