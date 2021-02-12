<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?>
</p>
<p>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href="sessao1.php">Voltar</a>
</p>

<p>
    <a href="limpar.php">Limpar Sessão</a>
</p>