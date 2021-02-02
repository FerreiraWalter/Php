<?php

Class Usuario {

    private $pdo;
    public $msgErro = ""; //Ok

    public function conectar($nome, $host, $usuario, $senha) {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($nome, $telefone, $email, $senha) {
        global $pdo;
        //Verificar se já está cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");

        $sql->bindValue(":e", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return false; // já esta cadastrada
        }
        else {
            //Caso não, cadastrar
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('{$nome}', '{$telefone}', '{$email}', md5('{$senha}')");
            $sql->execute();
            return true; //Tudo Ok
        }
    }

    public function logar($email, $senha) {
        global $pdo;
        //Verificar se o email e senha estão cadastrados
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch(key);
            session_start();

            $SESSION['id_usuario'] = $dado['id_usuario'];

            return true;
        }
        else {
            return false;
        }
    }
}
