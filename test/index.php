<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <div id="logo">
    <a href="https://www.seeduc.rj.gov.br/" class="logo">
        <img src="imagens/logo rj.png">
    </a>
    </div>
    <h2>Biblioteca Escola</h2>
</head>    
<body>
<div id="corpo-form">
    <h1>Entrar</h1>
    <form method="POST">
        <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" placeholder="Usuário" name="email">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" placeholder="Senha" name="senha">
        </div>   
        <input type="submit" value="Acessar"> 
        <a href="cadastrar.php">Ainda não é inscrito? <strong> Cadastre-se!</a>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</div> 
<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verificar se esta vazio
    if(!empty($email) && !empty($senha))
    {
        $u->conectar("login","localhost","root","");
        if($u->msgErro =="")
        {
            if($u->logar($email,$senha))
            {
                header("location: AreaPrivada.php");
            }else
            {
                ?>
                <div class="msg-erro"> 
                    email e/ou senha estao incorretos!
                </div>
                <?php
            }
        }else{
            ?>
            <div class="msg-erro"> 
                <?php echo "Erro: ".$u->msgErro; ?>
            </div>
            <?php
        }
    
    }else
    {
        ?>
            <div class="msg-erro"> 
                preencha todos os campos!
            </div>
            <?php
    }
}
?>    
</body>
</html>            