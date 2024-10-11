<?php
include "includes/connections.php";


session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}

$email = $_POST['email'];
$password = $_POST['password'];
$hashpassword = md5($password);



$insertquery = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$hashpassword')";

$result = $connection->query($insertquery);


if($result){
    header("Location:login.html");
}




