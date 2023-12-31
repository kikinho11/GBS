<?php
  if(isset($_POST['signup'])) {

    require 'db.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];
  
    if (empty($name) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($email, FILTER_SANITIZE_EMAIL))
    {
        header("Location: ../signup.php?error=bademail");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidmail");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z\s]*$/", $name))
    {
        header("Location: ../signup.php?error=badname");
        exit();
    }
    // Massive regex to filter letters, numbers and special caracters.
    /*
      (?=.*[A-Z]) - Forces the user to use at least one Capital Letter
      (?=.*[a-z]) - Forces the user to use at least one lowercase letter
      (?=.*\d) - Forces the user to use at least one number
      (?=.*[!@#$%^&_*-]) - Forces the user to use at least one special character
    */
    else if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&_*-])[A-Za-z\d!@#$%^&_*-]{8,20}$/", $password ))
    {
        header("Location: ../signup.php?error=badpassword");
        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passwordcheck");
        exit();
    }
    else {
      $sql = "SELECT Email FROM clientes WHERE Email=?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
            
        $resultCheck = mysqli_stmt_num_rows($stmt);
            
        if ($resultCheck > 0) {
          header("Location: ../signup.php?error=invalidemail");
          exit();
        }
        else {
          $sql = "insert into clientes(Nome, Email, SenhaHash)"
                . "values (?,?,?)";

          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
          }
          else {
            $hashedPwd = password_hash($password, PASSWORD_BCRYPT);
            
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
                
            header("Location: ../signup.php?signup=success");
            exit();
          }
        }
      }

    }

  }
  else {
    header("Location: http://www.localhost/web/gbs/signup.php");
    exit();
  }
?>