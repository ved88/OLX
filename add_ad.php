<?php  
 include('db.php'); 
 if(isset($_POST["submit"]))  
 {    
     
      $a_id=$_POST['a_id'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $category=$_POST['category'];
      $date=$_POST['date_of_init'];
      $owner=$_POST['owner'];
      $rate=$_POST['rate'];
      $desc=$_POST['title'];  
      $query = "INSERT INTO `advertisement`(`a_id`, `ad_name`, `ad_category`, `date_of_init`, `owner_of_ad`, `rate`, `title`) VALUES ('$a_id','$file','$category','$date','$owner','$rate','$desc')";
      
     
      if(mysqli_query($conn, $query))  
      {     
          
          header('Location: home.php');
      }
     
 }  
 ?>  