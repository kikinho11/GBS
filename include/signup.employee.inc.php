<?php
  if(isset($_POST['signup'])) {
    require 'db.inc.php';

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];
  
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
      header("Location: ../employee/signup.php?error=emptyfields");
      exit();
    }
    else if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
      header("Location: ../employee/signup.php?error=bademail");
      exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../employee/signup.php?error=invalidmail");
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username )) {
      header("Location: ../employee/signup.php?error=baduser");
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
      header("Location: ../employee/signup.php?error=badpassword");
      exit();
    }
    else if ($password !== $passwordRepeat) {
      header("Location: ../employee/signup.php?error=passwordcheck");
      exit();
    }
    else {
      $sql = "SELECT Email FROM funcionarios WHERE Email=?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../employee/signup.php?error=sqlerror");
        exit();
      }
      else {
        // Verify if email is not being used
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
            
        $resultCheck = mysqli_stmt_num_rows($stmt);
            
        if ($resultCheck > 0) {
          header("Location: ../employee/signup.php?error=invalidemail");
          exit(); 
        }

        // Verify if username is not being used
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
            
        $resultCheck = mysqli_stmt_num_rows($stmt);
            
        if ($resultCheck > 0) {
          header("Location: ../employee/signup.php?error=invaliduser");
          exit();
        }
        else {
          $sql = "insert into funcionarios(Nome, UserName, Email, SenhaHash)"
                . "values (?,?,?,?)";

          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../employee/signup.php?error=sqlerror");
            exit();
          }
          else {
            $hashedPwd = password_hash($password, PASSWORD_BCRYPT);
            
            mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
                
            header("Location: ../employee/signup.php?signup=success");
            exit();
          }
        }
      }
    }
  }
  else {
    header("Location: ../employee/signup.php");
    exit();
  }
?>