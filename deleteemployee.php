<?php
include "includes/connections.php";

session_start();

if (isset($_SESSION["user"])==false){
  header("Location:login.html");
}


$id = $_POST["employee_id"];

$delete_query="DELETE FROM `employees` WHERE id = $id";

$result = $connection->query($delete_query);

if($result){
    header("Location:home.php");
}
