<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Message Chat</h2>
  <form action="message_store.php" method="POST">
    <div>
      <label>To:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="to">
    </div>
    <div>
      <label>from:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="from"  value="<?php echo $_SESSION['user_name'];?>">
    </div>
    <div>
        <label>Message:</label>
        <textarea class="form-control" rows="5" name="message"></textarea>
    
      </div><br>
    <button type="submit" name="submit" class="btn btn-info">Submit message</button>
    <a href="home.php" class="btn btn-info" role="button">Back</a>
  </form>
</div>

</body>
</html>

        
       
       
        
       
