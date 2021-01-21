<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
</head>

<style>
    * {
        padding: 0px;
        margin: 0px;
        font-family: Cambria;
    }

    body {
        background-color: #6B8DF2;
        text-align: center;
        margin-auto: 30px;
    }
    header {
        font-family: Cambria;
        padding: 20px;
        font-size: 2.0rem;
        background-color: #575FF2;
        color: white;
    }

    select {
        margin: 2px;
        font-size: 1.2rem;
    }

    p {
        margin-bottom: 15px;
    }

    form {
        font-family: Cambria;
        margin: 200px;
        color: white;
    }

    form > * {
        font-size: 1.8rem;
    }

    button {
        margin: 15px;
        background-color: #575FF2;
        color: white;
        padding: 5px;
        border-radius: 50%;
        margin-left: 28px;
    }

    button:hover {
        transform: scale(1.05);
    }

    footer {
        font-family: Cambria;
        color: white;
    }

</style>

<body>

    <header>COTE D'AZUR</header>

    <form action="#" method="post">
        <p>Página de login</p>
        <div>
            <label  for="nome">Nome:</label>
            <input type="text" name="nome" placeholder=" login">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha"  placeholder=" senha">
        </div>

        <button>login</button>
    </form>

    <footer>jr que fez essa merda pra treinar php ©</footer>

</body>
</html>

<?php

if(isset($_POST['nome']) && isset($_POST['senha'])) {
    $user = $_POST['nome'];
    $senha = $_POST['senha'] ?? 11111;

    if(strlen($senha) <= 4) {
        echo "Senha muito pequena";
    }

}

?>

