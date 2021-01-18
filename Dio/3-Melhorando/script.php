<?php

$categorias = [];
$categorias[] = 'Infântil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
    echo 'Nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3) {
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade)) {
    echo 'O idade deve ser um número';
    return;
}

if($idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria Infântil.";

} else if($idade >= 13 && $idade < 18) {
    echo "O nadador " .$nome. " compete na categoria Adolescente.";

} else {
    echo "O nadador " .$nome. " compete na categoria Adulto.";
}
    