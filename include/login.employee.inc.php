<?php

if (isset($_POST['login'])) { 
  require 'db.inc.php';
    
  $username = $_POST['username'];
  $password = $_POST['password'];
    
  if (empty($username) || empty($password)) {
      header("Location: ../employee/login.php?error=emptyfields");
      exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username )) {
    header("Location: ../employee/login.php?error=baduser");
    exit();
  }
  // Massive regex to filter letters, numbers and special caracters.
  /*
    (?=.*[A-Z]) - Forces the user to use at least one Capital Letter
    (?=.*[a-z]) - Forces the user to use at least one lowercase letter
    (?=.*\d) - Forces the user to use at least one number
    (?=.*[!@#$%^&_*-]) - Forces the user to use at least one special character
  */
  else if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&_*-])[A-Za-z\d!@#$%^&_*-]{8,20}$/", $password )) {
    header("Location: ../employee/login.php?error=badpassword");
    exit();
  }
  else {
    $sql = "SELECT * FROM funcionarios WHERE UserName=?;";
    $stmt = mysqli_stmt_init($conn);
        
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../employee/login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
            
      $result = mysqli_stmt_get_result($stmt);
            
      if($row = mysqli_fetch_assoc($result)) {         
        $passwordCheck = password_verify($password, $row['SenhaHash']);

        if ($passwordCheck == false) {
          header("Location: ../employee/login.php?error=wronginfo");
          exit();
        }
        else if($passwordCheck == true) {
          
          session_start();
          $_SESSION['ID'] = $row['ID'];
          $_SESSION['UserName'] = $row['UserName'];
          $_SESSION['Email'] = $row['Email'];

          header("Location: ../employee/index.php");
          exit();
        }
        else {
          header("Location: ../employee/login.php?error=wronginfo");
          exit();
        }
      }
      else {
        header("Location: ../employee/login.php?error=nouser");
        exit();
      }
    }
  }
}
else {
    header("Location: ../employee/login.html?error=sqlerror");
    exit();
}
?>