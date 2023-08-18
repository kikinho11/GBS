<?php

if (isset($_POST['login']))
{
    
    require 'db.inc.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else if (!filter_var($email, FILTER_SANITIZE_EMAIL))
    {
        header("Location: ../login.php?error=bademail");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../login.php?error=invalidmail");
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
        header("Location: ../login.php?error=badpassword");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM clientes WHERE Email=?;";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            
            $result = mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result))
            {  
                
                $passwordCheck = password_verify($password, $row['SenhaHash']);
                if ($passwordCheck == false)
                {
                    header("Location: ../login.php?error=wronginfo");
                    exit();
                }
                else if($passwordCheck == true)
                {
                    /* session_start();
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['Name'] = $row['Name'];
                    $_SESSION['Email'] = $row['Email']; */

                    header("Location: ../index.html");
                    exit();
                }
                else
                {
                    header("Location: ../login.php?error=wronginfo");
                    exit();
                }
            }
            else
            {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
    
}
else {
    header("Location: ../login.html?error=sqlerror");
    exit();
}
?>