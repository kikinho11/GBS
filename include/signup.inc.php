<?php
  if(isset($_POST['signup'])) {

    require 'db.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['password-repeat'];
  
    if (empty($name) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: http://www.localhost/web/gbs/signup.php?error=emptyfields");
        exit();
    }
  
    /*
    if(!filter_var($email, FILTER_SANITIZE_EMAIL)) {
      header("Location: ../signup.php?error=");
      exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      /* Create error message after 
      exit();
    } */

  }
  else {
    header("Location: http://www.localhost/web/gbs/signup.php");
    exit();
  }
?>