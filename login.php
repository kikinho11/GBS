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
    <form class="text-white" method="post" action="include/signup.php">
      <h1 style="padding-bottom: 50px;">Crie uma conta</h1>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-bottom: 15px;">
        <input type="text" class="form-control" id="" name="username" placeholder="Seu nome:" style="font-weight: 900;">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="" name="email" placeholder="Seu email:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Sua password:">
      </div>
      <div class="col-4 position-relative start-50 end-50 translate-middle text-start" style="padding-top: 10px;">
        <label for="password" class="form-label">Repita password</label>
        <input type="password" class="form-control" id="" name="password-repeat" placeholder="Repita a sua password:">
      </div>
      <button type="submit" class="btn btn-primary" value="create-account">Enviar</button>
    </form>
  </div>
</body>