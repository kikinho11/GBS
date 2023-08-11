<?php
  if(isset($_POST['create-account'])) {

    require('db.inc.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['password-repeat'];
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
    }

  }
  else {
    header("Location ../login.php");
    exit();
  }
?>