<?php

session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}

include "includes/connections.php";
include "includes/functions.php";


$id=$_POST['id'];
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
$dep = $_POST['dep'];
//  

if ($_FILES['profileimg']['error']==0){
    $profileimg = uploadimage($_FILES['profileimg']);
    $update_query = "UPDATE `employees` SET `name`='$username',`email_address`='$email',`phone`='$phone',`address`='$address',`position`='$position',`salary`='$salary',`join_date`='$joindate',`date_of_birth`='$dateofbirth',`gender`='$gender',`status`='$status',`departments`='$dep',`image`='$profileimg' WHERE id = $id";
}
else{
    $update_query = "UPDATE `employees` SET `name`='$username',`email_address`='$email',`phone`='$phone',`address`='$address',`position`='$position',`salary`='$salary',`join_date`='$joindate',`date_of_birth`='$dateofbirth',`gender`='$gender',`status`='$status',`departments`='$dep' WHERE id = $id";
}

$result = $connection->query($update_query);


if($result){
    header("Location:home.php");
}
    









