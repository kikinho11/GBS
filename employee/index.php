<?php

  session_start();

  if(!isset($_SESSION['UserName'])) {
    header("Location: ./login.php");
    exit();
  }

?>

<!DOCTYPE html>
<html class="h-100" lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website for the GBS Team">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../src/css/index.private.css" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
  <title>GBS IT Solutions</title>
  <link rel="shortcut icon" href="../src/icons/favicon.ico" type="image/x-icon">
</head>

<body>

  <main style="height: 100%;">

    <div class="center-div1 w-100 overflow-hidden bg-wave" id="home" style="height: 819px;">
      <div class="row d-flex justify-content-center">
        <div class="text-center" style="color: white;">
          <h1 class="">Página funcionário super secreta</h1>
          <h2 class="display-6 mb-5">Text</h2>
        </div>
      </div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="src/js/mainPage.js"></script>
</body>
</html>
