<?php
include('db.php');
    
$x=$_GET['submit'];
   
    $sql = "SELECT * FROM advertisement where a_id=$x";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            
                    echo "advertisement_id: " . $row['a_id']. " - price of product: " . $row['rate']. "owner_of_product " . $row['owner_of_ad']. "<br>";
                }
            } else {
                echo "0 results";
            }
$sql = "DELETE FROM advertisement WHERE a_id=$x";
if (mysqli_query($conn, $sql)) {

    
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
<html>
<head>
<title>
    </title>
    </head>
    <body>
        <h3>Thanku for purchasing </h3>
        <h3>visit next time to </h3>
        <div><a href="home.php" class="btn btn-info" role="button">Back</a></div>
    </body>
</html>
    