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

<body>

  <nav id="navScroll" class="navbar navbar-expand-lg sticky-top" tabindex="0" data-bs-theme="dark">
    <div class="container">
      <img class="navbar-brand img-fluid img-thumbnail" src="./src/img/gbs.png">
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobre_nos">
              Sobre Nós
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicos">
              Serviços
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cases">
              Cases de Sucesso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contato">
              Contato
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main style="height: 100%;">

    <div class="center-div1 w-100 overflow-hidden bg-wave" id="home" style="height: 819px;">
      <div class="row d-flex justify-content-center">
        <div class="text-center mt-5" style="color: white;">
          <h1 class="">Home</h1>
          <h2 class="display-6 mb-5">Text</h2>
        </div>
      </div>
    </div>

    <div class="center-div2 w-100 overflow-hidden" id="sobre_nos" style="height: 819px;">
      <div class="row d-flex justify-content-center">
        <div class="text-center">
          <h1 class="">Sobre Nós</h1>
        </div>
      </div>
      <div class="row d-flex align-items-end justify-content-center">
        <div class="col text-center mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16Zm3.78-9.72a.751.751 0 0 0-.018-1.042.751.751 0 0 0-1.042-.018L6.75 9.19 5.28 7.72a.751.751 0 0 0-1.042.018.751.751 0 0 0-.018 1.042l2 2a.75.75 0 0 0 1.06 0Z"></path></svg>
          <h3 class="">Nós é muito bom</h3>
          <h3 class="mb-5">Isto é apenas um exemplo</h3>
        </div>
        <div class="col text-center mt-5">
          <h1 class="">Lorem escolha 2</h1>
          <h2 class="">Dá para fazer muita coisa aqui dentro de cada div</h2>
        </div>
        <div class="col text-center mt-5">
          <h1 class="">Lorem escolha 3</h1>
          <h2 class="">Pode pensar em muita coisa e depois só ver como colocar</h2>
        </div>
      </div>
    </div>

    <div class="center-div1 w-100 overflow-hidden bg-servicos" id="servicos" style="height: 819px;">
      <div class="row d-flex justify-content-center">
        <div class="text-center mt-5">
          <h1 class="">Serviços</h1>
          <h2 class="display-6 mb-5">Text</h2>
        </div>
      </div>
    </div>

    <div class="center-div1 w-100 overflow-hidden bg-cases" id="cases" style="height: 819px;">
      <div class="row d-flex justify-content-center">
        <div class="text-center mt-5">
          <h1 class="">Cases de Sucesso</h1>
          <h2 class="display-6 mb-5">Text</h2>
        </div>
      </div>
    </div>

    <div class="center-div3 w-100 overflow-hidden bg-wave" id="contato" style="height: 819px;">
      <div class="row d-flex justify-content-center" style="color: white;">
        <div class="text-center mt-5">
          <h1 class="" style="padding-bottom: 60px;">Contato</h1>

          <form>
            <div class="col-4 position-relative start-50 end-50 translate-middle" style="padding-bottom: 15px;">
              <label for="name" class="form-label ">Nome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome:">
            </div>
            <div class="col-4 position-relative start-50 end-50 translate-middle" style="padding-bottom: 22px;">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Seu email:">
            </div>
            <div class="col-4 position-relative start-50 end-50 translate-middle">
              <label for="texto" class="form-label">Pergunta</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit position-relative start-50 end-50 translate-middle" class="btn btn-primary">Enviar</button>
          </form>

        </div>
      </div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="src/js/mainPage.js"></script>
</body>
</html>