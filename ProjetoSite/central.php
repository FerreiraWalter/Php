<?php
    require_once 'usuarios.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form action="processa.php" method="post">
            <input type="email" name="email" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">

            <input type="submit" value="ACESSAR">

            <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
        </form>
    </div>
</body>
</html>

<?php

    if(isset($_POST['email'])) {

    }
