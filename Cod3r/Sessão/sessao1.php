<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Walter';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'wferreiraramosjunior@gmail.com';
}

?>

<p>
    <a href="sessao2.php">Alterar Sessão</a>
</p>