<?php
include "includes/connections.php";


$email = $_POST['email'];
$password = $_POST['password'];
$hashpassword = md5($password);



$checkquery = "SELECT * FROM users WHERE email='$email' AND password = '$hashpassword' ";

$result = $connection->query($checkquery);


if($result->num_rows  == 1){
    session_start();
    $_SESSION['user'] = $email;
    header('Location:home.php');

}

else{
    echo'Incorrect email or password';
}




