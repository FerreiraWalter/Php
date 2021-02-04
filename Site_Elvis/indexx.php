<?php
/*
 A aplicação web QueroSerElvis.com {MakeMeElvis.com) consiste de dois
componentes principais: um formulário para enviar mensagem de email
para as pessoas na lista de Elmer e um formulário para permitir que novos
clientes se inscrevam na lista. Com esses dois formulários em mente, faça
um esboço de projeto para a aplicação de Elmer. */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakeMeElvis</title>

    <style>
    
        button {
            display: inline-block;
            border: solid 2px black;
            border-radius: 30px;
            padding: 10px;
            outline: none;
        }

        h1 {
            padding: 0px 0px 150px 0px;
        }

    </style>

</head>
<body>

<center>
    <h1>MAKE ME ELVIS</h1>
    <div class="botao">
        <form action="" method="POST">
            <button>Enviar Email</button>
        </form>
        <br>
        <form action="" method="POST">
            <button>Cadastrar</button>
        </form>
    </div>
</center>
    
</body>
</html>