<?php
include('db.php');
$Name=$_POST['name'];
$Mobile=$_POST['mnumber'];
$Email=$_POST['email'];
$Password=$_POST['psw'];
$Type=$_POST['type'];
$sql="INSERT INTO `users`(`name`, `contact`, `email`, `password`, `category`) VALUES ('$Name','$Mobile','$Email','$Password','$Type')";   
if (mysqli_query($conn, $sql)) {
    header('location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>