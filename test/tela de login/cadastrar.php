<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <a href="https://www.seeduc.rj.gov.br/" class="logo">
        <img src="imagens/logo rj.png" alt="">
    </a>
    <h2>Biblioteca Escola</h2>
</head>    
<body>
<div id="corpo-form-cad">
    <h1>Cadastre-se</h1>
    <form method="POST">
        <div class="inputbox">
            <ion-icon name="person-add"></ion-icon>
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="50">
        </div>
        <div class="inputbox">
            <ion-icon name="call"></ion-icon>
            <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
        </div>
        <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" placeholder="Usuário" maxlength="50">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="15">
        </div>
        <input type="submit" value="Confirmar"> 
    </form>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
    $nome = addslashes ($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //verificar se esta vazio
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("login","localhost","root","");
        if($u->msgErro == "")//se esta tudo certo
        {
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome,$telefone,$email,$senha))
                {
                    ?>
                    <div id="msg-sucesso"> 
                        cadastrado com sucesso! Acesse para entar!
                    </div>
                    <?php
                }else
                    {
                        ?>
                        <div class="msg-erro"> 
                            email ja cadastrado
                        </div>
                        <?php
                    }
            }else
            {
                ?>
                        <div class="msg-erro"> 
                        Senha e confirmar senha, não correspondem!
                        </div>
                        <?php
            }
            

        }else
        {
            ?>
            <div class="msg-erro"> 
                <?php echo "Erro: ".$u->msgErro;?>
            </div>
            <?php
        }

    }else
    {
        ?>
        <div class="msg-erro"> 
        Preencha todos os campos!
        </div>
        <?php

    }
}
?>
</body>
</html>            