<?php
session_id('3mlpmv5g8avhbiohi90k716l4t');
session_start();

echo session_id();

//& -> Acessar a refência de memoria de uma VAR
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;

echo "<br>" . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}
