<?php
session_start();
//Quando alguém terminar uma comprar, limpar as paradas
//Quando alguém desloga do seu site
session_destroy();

//Redirecionar para página Inicial
header('Location: sessao1.php');