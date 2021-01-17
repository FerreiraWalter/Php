<?php

$categorias = [];
$categorias[] = 'Infântil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

//print_r($categorias);

$nome = 'Walter';
$idade = 18;

//var_dump($nome);
//var_dump($idade);

if($idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[i] == 'Infântil') {
            echo "O nadador" .$nome. " compete na categoria Infântil.";
        }

    }

} else if($idade >= 13 && $idade < 18) {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[i] == 'Adolescente') {
            echo "O nadador" .$nome. " compete na categoria Adolescente.";
        }

    }

} else {
    for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[i] == 'Adulto') {
            echo "O nadador" .$nome. " compete na categoria Adulto.";
        }

    }

}
    