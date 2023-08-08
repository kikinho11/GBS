<?php

class Livros{
    private $pdo;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $autor, $categoria, $isbn, $quantidade){
        global $pdo;
        //verificar se ja possui cadastro
        $sql = $pdo->prepare("SELECT id_livro FROM livros WHERE isbn = :i");
        $sql->bindValue(":i",$isbn);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //já possui cadastro
        }
        else{
            //caso nao tenha, cadastrar
            $sql = $pdo->prepare("INSERT INTO livros (nome, autor, categoria, isbn, quantidade) VALUES (:n, :a, :c, :i, :q)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":a",$autor);
            $sql->bindValue(":c",$categoria);
            $sql->bindValue(":i",$isbn);
            $sql->bindValue(":q",$quantidade);
            $sql->execute();
            return true;}
    }
    public function logar($nome, $autor, $categoria, $isbn, $quantidade){
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id_livro FROM livros WHERE nome = :n, autor = :a, categoria = :c, isbn = :i AND quantidade = :q");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":a",$autor);
        $sql->bindValue(":c",$categoria);
        $sql->bindValue(":i",$isbn);
        $sql->bindValue(":q",$quantidade);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_livro'] = $dado['id_livro'];
            return true; //logado com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }
    }
    }

