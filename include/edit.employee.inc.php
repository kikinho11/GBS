<?php

if(isset($_POST['edit'])) {
  require 'db.inc.php';

  $username = $_POST['username'];

  if (empty($username)) {
      header("Location: ../employee/login.php?error=emptyfields");
      exit();
  } 
  else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username )) {
    header("Location: ../employee/login.php?error=baduser");
    exit();
  } 
  else {
    $sql = "SELECT * FROM funcionarios WHERE UserName=?;";
    $stmt = mysqli_stmt_init($conn);
        
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../employee/login.php?error=sqlerror");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
            
    $result = mysqli_stmt_get_result($stmt);

    $user = mysqli_fetch_assoc($result);
    $name = $user['Name'];
    $username = $user['UserName'];
    $cargo = $user['Cargo'];

    /* 
      ! Steps to do:
      * Verificar se é melhor fazer por sessões temporárias ou fazer por parametro de URL
      * Implementar as variáveis com novas divs na página de edit.php
      * Testar com uma nova conta e verificar se o fetch funciona
    */
  }
}

?>