<?php  
 include('db.php'); 
 if(isset($_POST["submit"]))  
 {    
     
      $a_id=$_POST['Manufacturer'];
      $category=$_POST['model_name'];
      $date=$_POST['year_of_purchase'];
      
     $book_pid=$_POST['book_pid']; 


      $query = "INSERT INTO `mobile`(`manufacturer`, `model_name`, `year_of_purchase`,`aid`) VALUES ('$a_id','$category','$date','$book_pid')";
      
     
      if(mysqli_query($conn, $query))  
      {     
          
          header('Location: home.php');
      }
     
 }  
 ?>  