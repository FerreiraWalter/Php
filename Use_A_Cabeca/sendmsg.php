<?php

    if(isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $msg = $_POST['msg'];

        $dbc = mysqli_connect("localhost", "root", "", "msget");
        $query = "INSERT INTO pessoas(nome, email, msg) VALUES('{$nome}', '{$email}', '{$msg}')";
        
        $resultado = mysqli_query($dbc, $query) or die('Erro no DataBase');

        mysqli_close($dbc);

    }