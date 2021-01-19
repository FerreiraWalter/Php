<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tv&Sorvete</title>

    <style>

        body {
            background-color: gray;
        }   
    
        button, label, select {
            font-size: 1.8rem;
        }

    </style>

</head>
<body>

    <form action="#" method="POST">
    
        <div>
            <label for="t1">Trabalho Terça: </label>
            <select name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        <div>
            <label for="t2">Trabalho Quinta: </label>
            <select name="t2" id="t2">
                <option value="1">Exacutado</option>
                <option value="0">Não Exacutado</option>
            </select>
        </div>

        <button>Executar</button>

    </form>
    
</body>
</html>

<?php
    
    if(isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === '1';
        $t2 = !!$_POST['t2'];

        $tv = '';
        $sorvete = false;

        if($t1 && $t2) {
            $tv = '50"';
        } else if($t1 xor $t2) {
            $tv = '32"';
        }

        if($t1 or $t2) {
            $sorvete = true;
        }

        if($tv) {
        $resultado = "Vamos comprar uma Tv de $tv";
        } else {
            $resultado = "Sem Tv dessa vez :(";
        }

        $saudavel = !$sorvete;

        if($saudavel) {
            $resultado .= '<br> Estamos mais saudáveis';
        } else {
            $resultado .= '<br> Sorvete liberado \o/';
        }

        echo $resultado;
    }

?>