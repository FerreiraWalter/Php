<?php

if($_POST) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    echo $login. " => " .$senha;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login&Senha</title>
</head>
<body>

    <form action="" method="POST">
    
    <input type="text" name="login" placeholder="login">
    <input type="password" name="senha" placeholder="senha">
    <input type="submit" value="enviar">

    </form>

</body>
</html>