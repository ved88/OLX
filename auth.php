<?php
include('db.php');
session_start();
if(isset($_POST['submit'])){
$Email=$_POST['user_email'];
$password=$_POST['user_pass'];

$result = mysqli_query($conn,"SELECT `email`, `password` FROM `users` where email = '$Email'");

$row = mysqli_fetch_array($result);

if($row['email']==$Email && $row['password']==$password){
    
$_SESSION['user_name']=$Email;
    header('Location:home.php');
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
}
?>
