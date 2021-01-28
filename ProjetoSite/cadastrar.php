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
        <h1>Cadastrar</h1>
        <form action="processa.php" method="post">
            <input type="text" name="nome" placeholder="Nome Completo" maxlenght="30">
            <input type="text" name="telefone" placeholder="Telefone" maxlenght="30">
            <input type="email" name="email" placeholder="Usuário" maxlenght="40">
            <input type="password" name="senha" placeholder="Senha"maxlenght="15">
            <input type="password" name="Confsenha" placeholder="Confirmar Senha" maxlenght="15">

            <input type="submit" value="CADASTRAR">

            <a href="central.php">Já tem uma conta? <strong>Clique aqui</strong></a>
        </form>
    </div>
</body>
</html>