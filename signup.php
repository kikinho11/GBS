<!DOCTYPE html>
<html class="h-100" lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website for the GBS Team">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="./src/css/index.css" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
  <title>GBS IT Solutions</title>
  <link rel="shortcut icon" href="src/icons/favicon.ico" type="image/x-icon">
</head>

<body style="height: 100%; background-color: #121212 ;">
  <div class="w-100 h-100 text-center center-div4">
    <form class="text-white text-center center-div4" action="./include/signup.inc.php" method="post">
      <input type="hidden" name="signup" value="signup">
      <h1 style="padding-bottom: 50px;">Crie uma conta</h1>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-bottom: 5px;">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Seu email:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Sua password:">
        <!-- Têm de usar uma palavra passe entre 8 a 20 caracteres;<br>
        Inclua no mínimo uma letra maiúscula, letra minúscula, número e um caractere especial. -->
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="password" class="form-label">Repita password</label>
        <input type="password" class="form-control" id="password-repeat" name="password-repeat" placeholder="Repita a sua password:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start text-center" style="padding-top: 10px;">
        <?php

          if(isset($_GET['error'])) {
            
            $errormessage = $_GET['error'];

            if($errormessage == 'emptyfields') {
              echo '<strong>Erro: </strong> Preencha todos os campos.';
            }
            else if($errormessage == 'bademail') {
              echo '<strong>Erro: </strong> Apenas utilize letras, numeros, underscore, pontos e traços.';
            }
            else if($errormessage == 'invalidemail') {
              echo '<strong>Erro: </strong> Email inválido ou já está em uso.';
            }
            else if($errormessage == 'badname') {
              echo '<strong>Erro: </strong> Apenas pode letras e espaços.';
            }
            else if($errormessage == 'badpassword') {
              echo '<strong>Erro: </strong> Confirme a sua password e siga as regras de password.';
            }
            else if($errormessage == 'passwordcheck') {
              echo '<strong>Erro: </strong> Confirme a password.';
            }
            else if($errormessage == 'sqlerror') {
              echo '<strong>Erro: </strong> Problema com conexão ao servidor.';
            }
          }
          else if (isset($_GET['signup']) == 'success') {
            echo '<strong>Conta criada com Sucesso</strong>';
          }

        ?>
      </div>

      <button type="submit" class="btn btn-primary" value="signup">Enviar</button>
    </form>
  </div>
</body>