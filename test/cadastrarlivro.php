<?php
    require_once 'CLASSES/bibliotecario.php';
    $u = new Livros;
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estiloCadastrarlivro.css">
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
            <input type="text" name="nome" placeholder="Nome do livro" maxlength="50">
        </div>
        <div class="inputbox">
            <ion-icon name="call"></ion-icon>
            <input type="text" name="autor" placeholder="autor" maxlength="30">
        </div>
        <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="text" name="categoria" placeholder="categoria" maxlength="50">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="isbn" placeholder="isbn" maxlength="15">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="text" name="confisbn" placeholder="confirmar isbn" maxlength="15">
        </div>
        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="number" name="quantidade" placeholder="quantidade" maxlength="15">
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
    $autor = addslashes($_POST['autor']);
    $categoria = addslashes($_POST['categoria']);
    $isbn = addslashes($_POST['isbn']);
    $confirmarisbn = addslashes($_POST['confisbn']);
    $quantidade = addslashes($_POST['quantidade']);
    //verificar se esta vazio
    if(!empty($nome) && !empty($autor) && !empty($categoria) && !empty($isbn) && !empty($quantidade))
    {
        $u->conectar("login","localhost","root","");
        if($u->msgErro == "")//se esta tudo certo
        {
            if($isbn == $confirmarisbn)
            {
                if($u->cadastrar($nome,$autor,$categoria,$isbn,$quantidade))
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
                            livro ja cadastrado
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