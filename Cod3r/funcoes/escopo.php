<?php

function imprimirMensagens() {
    echo "Olá";
}

imprimirMensagens();

$variavel = 1;

function trocaValor() {
    //define q a $variavel é global;
    global $variavel;
    $variavel = 3;
}
