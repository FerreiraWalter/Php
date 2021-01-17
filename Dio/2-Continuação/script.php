<?php

$categorias = [];
$categorias[] = 'Infântil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if($idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria Infântil.";

} else if($idade >= 13 && $idade < 18) {
    echo "O nadador " .$nome. " compete na categoria Adolescente.";

} else {
    echo "O nadador " .$nome. " compete na categoria Adulto.";
}
    