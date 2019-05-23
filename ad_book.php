<?php  
 include('db.php'); 
 if(isset($_POST["submit"]))  
 {    
     
      $a_id=$_POST['book_id'];
      $category=$_POST['book_name'];
      $date=$_POST['book_condition'];
      
           $book_author=$_POST['book_author'];
     $book_pid=$_POST['book_pid'];


      $query = "INSERT INTO `books`(`book_id`, `book_name`, `book_condition`, `author`, `aid`) VALUES  ('$a_id','$category','$date','$book_author','$book_pid')";
      
     
      if(mysqli_query($conn, $query))  
      {     
          
          header('Location: home.php');
      }
     
 }  
 ?>  