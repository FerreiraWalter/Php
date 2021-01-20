<div>DESAFIO SWITCH CONVERSÃO</div>

<form action="#" method="POST">

    <input type="text" name="parametro">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="km-metro">Km -> Metro</option>
        <option value="metro-km">Metro -> Km</option>
    </select>

    <button>Calcular</button>

</form>

<style>

    * {
        padding: 0px;
        margin: 0px;

    }

    body {
        margin: 10px;
        background-color: gray;
        text-align: center;
    }

    div {
        background-color: black;
        color: White;
    }

    form > * {
        font-size: 1.8rem;
    }

</style>

<?php

const FATOR_KM_MILHA = 0.62;
const FATOR_METRO_KM = 1000;

//Se ele n for setado o falor é 0
$parametro= $_POST['parametro'] ?? 0;

switch($_POST['conversao']) {
    case 'km-milha':
        $distancia = $parametro * FATOR_KM_MILHA;
        $mensagem = "$parametro Km(s) = $distancia Milha(s)";
        break;

    case 'milha-km':
        $distancia = $parametro / FATOR_KM_MILHA;
        $mensagem = "$distancia Milha(s) = $parametro Km(s)";
        break;

    case 'km-metro':
        $distancia = $parametro * FATOR_METRO_KM;
        $mensagem = "$parametro Km(s) = $distancia Metro(s)";
        break;
    
    case 'metro-km':
        $distancia = $parametro / FATOR_METRO_KM;
        $mensagem = "$distancia Metro(s) = $parametro Km(s)";
        break;
    
    default:
    $mensagem = "Nenhum valor calculado";
    
}

echo $mensagem;

?>