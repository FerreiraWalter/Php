<div class="titulo">DESAFIO IMPRESSÃO</div>


<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i <= sizeof($array); $i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}

?>
