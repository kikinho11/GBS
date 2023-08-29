<!DOCTYPE html>
<html class="h-100" lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website for the GBS Team">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../src/css/login.css" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
  <title>GBS IT Solutions</title>
  <link rel="shortcut icon" href="../src/icons/favicon.ico" type="image/x-icon">
</head>

<body style="height: 100%;">
  <div class="w-100 h-100 text-center center-div4">
    <form class="text-white text-center " action="../include/login.employee.inc.php" method="post">
      <input type="hidden" name="login" value="login">
      <h1 style="padding-bottom: 50px; color: black;">Entrar na conta de funcionário</h1>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 5px;">
        <label style="color: black;" for="username" class="form-label">Username</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="Seu username:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label style="color: black;" for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Sua senha:">
        <!-- Têm de usar uma palavra passe entre 8 a 20 caracteres;<br>
        Inclua no mínimo uma letra maiúscula, letra minúscula, número e um caractere especial. -->
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start text-center" style="padding-top: 10px;">
        <?php

          if(isset($_GET['error'])) {
            
            $errormessage = $_GET['error'];

            if($errormessage == 'emptyfields') {
              echo '<strong>Erro: </strong> Preencha todos os campos.';
            }
            else if($errormessage == 'baduser') {
              echo '<strong>Erro: </strong> Apenas utilize letras, numeros e underscore.';
            }
            else if($errormessage == 'sqlerror') {
              echo '<strong>Erro: </strong> Problema com conexão ao servidor. Tente novamente.';
            }
            else if($errormessage == 'wronginfo') {
              echo '<strong>Erro: </strong> Verifique o username e/ou password.';
            }
            else if($errormessage == 'nouser') {
              echo '<strong>Erro: </strong> Você ainda não tem uma conta.';
            }
          }
          else if (isset($_GET['signup']) == 'success') {
            echo '<strong>Entrou na conta</strong>';
          }

        ?>
      </div>

      <button type="submit" class="btn btn-primary" value="login">Login</button>
    </form>
  </div>
</body>