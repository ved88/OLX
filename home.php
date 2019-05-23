<?php
include('db.php');
session_start();

if(!$_SESSION['user_name'])
{
    header('Location:index.php');
}

?>
<?php


$sql = "DELETE FROM advertisement WHERE date_of_init<(NOW()-INTERVAL 10 DAY)";

if (mysqli_query($conn, $sql)) {

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
  <h2>OLX</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Add Advertisement</a></li>
    
    <li><a data-toggle="tab" href="#menu3">Book</a></li>
    <li><a data-toggle="tab" href="#menu4">Laptop</a></li>
    <li><a data-toggle="tab" href="#menu5">Mobile</a></li>
     
    <li style="float:right"><a  href="logout.php">log out</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
          <div>
                   <br /><br /> 
                  <br /><br /> 
                <table class="table table-bordered">  
                     <tr>  
                         <th>Image</th>  
                     </tr>  
                <?php  
                    include('db.php');
                    $x=$_SESSION['user_name'];
                $query = "SELECT * FROM `advertisement` where owner_of_ad <> '$x'";  
                $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                          <tr>  
                               <td>  
                                   <img src="data:image/jpeg;base64,'.base64_encode($row['ad_name'] ).'" height="200" width="200" class="img-thumnail" /> 
                                   
                               </td>
                               <td>  
                                   A_id:
                                   '.$row['a_id'].'<br>Ad_category:'." ".''." ".''.$row['ad_category'].'<br>Date_of_init:'." ".''.$row['date_of_init'].'<br>owner email id:'." ".''.$row['owner_of_ad'].'<br>Rate:'."  ".''.$row['rate'].'<br>Description:'." ".''.$row['title'].'
                                        <form action="delete.php" method="GET">
                                          <button type="submit" name="submit" value="'.$row['a_id'].'">Buy</button>
                                          
                                        </form>
                                           
                                   <a href="message.php" class="btn btn-info" role="button">Message</a>

                               </td>
                          </tr>  
                     '; 
               }  
                ?> 
        
                </table> 
    </div>
      
    </div>
     

    <div id="menu3" class="tab-pane fade">
           <div class="container">
                <h2> ADD BOOK</h2>
                    <form class="form-inline" action="ad_book.php" method="post">
                    <div class="form-group">
                    <label class="sr-only" for="book_id">Book id:</label>
                    <input type="text" class="form-control" id="book_id" placeholder="Enter book d"  name="book_id">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="book_name">Book Name:</label>
                    <input type="text" class="form-control" id="book_name" placeholder="Enter Book name" name="book_name">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="book_condition">Book Conditon:</label>
                    <input type="text" class="form-control" id="book_condition" placeholder="Enter Book condition" name="book_condition">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="book_author">Book Author:</label>
                    <input type="text" class="form-control" id="book_author" placeholder="Enter Book Author" name="book_author">
                    </div>
                     <div class="form-group">
                    <label class="sr-only" for="product_pid">pid:</label>
                    <input type="text" class="form-control" id="book_pid" placeholder="Enter product pid" name="book_pid">
                        </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </form>
            </div>
                <br><br>
                <br><br>
        <br><br>
        <br><br>
        
        
        
    
            <table class="table table-bordered" size="50%">  
                     <tr>  
                         <th>DETAILS</th>  
                     </tr>  
                <?php  
                include('db.php');
                $x=$_SESSION['user_name'];
                $query = "SELECT * from books where aid in (SELECT a_id from advertisement where owner_of_ad ='$x')";  
               
                $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                            <tr>
                            <td>
                                book number:
                                   '.$row['book_id'].'<br>Book Name:'." ".''." ".''.$row['book_name'].'<br>condition:'." ".''.$row['book_condition'].'<br>Author:'." ".''.$row['author'].'<br>Product id:'."  ".''.$row['aid'].' </td>
                           </tr>
                                  
                     '; 
                            
                        }
                
                ?> 
        
                </table> 



      </div>

          
          <div id="menu4" class="tab-pane fade">
           <div class="container">
                <h2> ADD Laptop</h2>
                    <form class="form-inline" action="ad_laptop.php" method="post">
                    <div class="form-group">
                    <label class="sr-only" for="Manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control" id="Manufacturer" placeholder="Enter Manufacturer"  name="Manufacturer">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="model_name">model_name:</label>
                    <input type="text" class="form-control" id="model_name" placeholder="Enter model_name" name="model_name">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="year_of_purchase">year_of_purchase:</label>
                    <input type="date" class="form-control" id="year_of_purchase" placeholder="Enter year_of_purchase" name="year_of_purchase">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="Battery_status">Battery_status:</label>
                    <input type="text" class="form-control" id="Battery_status" placeholder="Enter Battery_status" name="Battery_status">
                    </div>
                     <div class="form-group">
                    <label class="sr-only" for="product_pid">pid:</label>
                    <input type="text" class="form-control" id="book_pid" placeholder="Enter product pid" name="book_pid">
                        </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </form>
            </div>
            
                <br><br><br><br>
            <table class="table table-bordered" size="50%">  
                     <tr>  
                         <th>DETAILS</th>  
                     </tr>  
                <?php  
                include('db.php');
                $x=$_SESSION['user_name'];
                $query = "SELECT * from laptop where aid in (SELECT a_id from advertisement where owner_of_ad ='$x')";  
               
               
            
                $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                            <tr>
                            <td>
                                anufacturer:
                                   '.$row['manufacturer'].'<br>model Name:'." ".''." ".''.$row['model_name'].'<br>Battery status:'." ".''.$row['battery_status'].'<br>Product pid:'." ".''.$row['aid'].'<br>Year of purchase:'." ".''.$row['battery_status'].'
                                   </td>
                           </tr>
                                    
                     '; 
                            
                        }
                
                ?> 
        
                </table> 





      </div>
      
      
          
          <div id="menu5" class="tab-pane fade">
           <div class="container">
                <h2> ADD Mobile</h2>
                    <form class="form-inline" action="ad_mobile.php" method="post">
                    <div class="form-group">
                    <label class="sr-only" for="Manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control" id="Manufacturer" placeholder="Enter Manufacturer"  name="Manufacturer">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="model_name">model_name:</label>
                    <input type="text" class="form-control" id="model_name" placeholder="Enter model_name" name="model_name">
                    </div>
                    <div class="form-group">
                    <label class="sr-only" for="year_of_purchase">year_of_purchase:</label>
                    <input type="date" class="form-control" id="year_of_purchase" placeholder="Enter year_of_purchase" name="year_of_purchase">
                    </div>
                     <div class="form-group">
                    <label class="sr-only" for="product_pid">pid:</label>
                    <input type="text" class="form-control" id="book_pid" placeholder="Enter product pid" name="book_pid">
                        </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </form>
                    
                    
                     <br><br><br><br>
            <table class="table table-bordered" size="50%">  
                     <tr>  
                         <th>DETAILS</th>  
                     </tr>  
                <?php  
                include('db.php');
                 $x=$_SESSION['user_name'];
                $query = "SELECT * from mobile where aid in (SELECT a_id from advertisement where owner_of_ad ='$x')";  
               
            
                $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                {   
                     echo '  
                            <tr>
                            <td>
                                anufacturer:
                                   '.$row['manufacturer'].'<br>model Name:'." ".''." ".''.$row['model_name'].'<br>year_of_purchasse:'." ".''.$row['year_of_purchase'].'<br>Product pid:'." ".''.$row['aid'].'
                                   </td>
                           </tr>
                                  
                     '; 
                            
                        }
                
                ?> 
        
                </table> 
                    
                    
            </div>



      </div>
      
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  <table class="table">
    <thead>
      <tr>
        <th>user_email_id</th>
        <th>name</th>
        <th>mobile</th>
	<th>category</th>
      </tr>
    </thead>
    <tbody>
       <?php 
           $z=$_SESSION['user_name'];
	       $sql = "SELECT * FROM users where email='$z'";
           $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                   ?> <tr>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["name"]?></td>
                        <td><?php echo $row["contact"]?></td>
			                  <td><?php echo $row["category"]?></td>
                      </tr>
       <?php
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
?>
       
  
    </tbody>
  </table>

	</div>
<div id="menu2" class="tab-pane fade">
      <h3>Add Advertisement</h3>
        <br /><br />  
           <div class="container" style="width:500px;">  
                 
                <br />  
                <form action="add_ad.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="a_id" placeholder="enter barcode for product">
                        <br><br>
                        <input type="file" name="image" value="image" >
                        <br><br>
                        <input type="text" name="category" placeholder="Enter the category(Mobile/Laptop/Books)">
                        <br><br>
                        <input type="date" name="date_of_init" placeholder=" Enter date of initation of advertisement">
                        <br><br>
                        <input type="email" name="owner" placeholder="Enter owner of Advertisement" value="<?php echo $_SESSION['user_name']?>">
                        <br><br>
                        <input type="text" name="rate" placeholder="Enter expecte price">
                        <br><br>
                        <input type="text" name="title" placeholder="Enter desc of Advertisemnet ">
                        <br><br>
                        <input type="submit" name="submit" value="Add Advertisement">
                </form>

                <div>
                   <br /><br /> 
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                 <?php  
                    include('db.php');
                    $y=$_SESSION['user_name'];
                $query = "SELECT `a_id`, `ad_name`, `ad_category`, `date_of_init`, `owner_of_ad`, `rate`, `title` FROM `advertisement` WHERE owner_of_ad='$y'";  
                $result = mysqli_query($conn, $query);  
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                   <img src="data:image/jpeg;base64,'.base64_encode($row['ad_name'] ).'" height="200" width="200" class="img-thumnail" /> 
                                   
                               </td>
                               <td>  
                                   A_id:
                                   '.$row['a_id'].'<br>Ad_category:'." ".''." ".''.$row['ad_category'].'<br>Date_of_init:'." ".''.$row['date_of_init'].'<br>owner email id:'." ".''.$row['owner_of_ad'].'<br>Rate:'."  ".''.$row['rate'].'<br>Description:'." ".''.$row['title'].'
                                   

                               </td>
                          </tr>  
                     '; 
                        
                        
                        
                }  }
                    else{echo '0 record found';}
                ?> 
               </table> 
    </div>
   
              </div>
              
          </div>
  </div>
</div>





</body>
</html>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 