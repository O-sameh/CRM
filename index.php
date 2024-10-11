<?php

session_start();

if (isset($_SESSION["user"])){
  header("Location:insert.php");
} else {

  header("Location:login.html");
}
?>
