<?php  
 include('db.php'); 
 if(isset($_POST["submit"]))  
 {    
      $to=$_POST['to'];
      $from=$_POST['from'];
      $message=$_POST['message'];
      
      $query = "INSERT INTO message(`to`, `from`, `message`) VALUES ('$to','$from','$message')";
      
     
      if(mysqli_query($conn, $query))  
      {     
          
          header('Location:home.php');
      }
     
 }  
 ?>  