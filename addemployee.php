<?php
include "includes/connections.php";
include "includes/functions.php";

session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}


$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$position = $_POST['position'];
$salary = $_POST['salary'];
$joindate = $_POST['joindate'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$status = $_POST['status'];
//  = $_POST['profileimg'];
$dep = $_POST['dep'];



if($_FILES['profileimg']['error']==0){
    $profileimg = uploadimage($_FILES['profileimg']);
    // run query 
    $queries="INSERT INTO `employees`( `name`, `email_address`, `phone`, `address`, `position`, `salary`, `join_date`, `date_of_birth`, `gender`, `status`, `departments`, `image`) VALUES ('$username','$email','$phone','$address','$position','$salary','$joindate','$dateofbirth','$gender','$status','$dep','$profileimg')";
    
}
else{
    $queries="INSERT INTO `employees`( `name`, `email_address`, `phone`, `address`, `position`, `salary`, `join_date`, `date_of_birth`, `gender`, `status`, `departments`) VALUES ('$username','$email','$phone','$address','$position','$salary','$joindate','$dateofbirth','$gender','$status','$dep')";
}



$result = $connection->query($queries);


if($result){
    header("Location: home.php");
}
