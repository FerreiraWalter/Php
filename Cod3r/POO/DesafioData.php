<?php

class Data {
    //Atributos
    public $dia = 1;
    public $mes = 1; 
    public $ano = 1970;

    public function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();

$aniversario->dia = 7;
$aniversario->mes = 2;
$aniversario->ano = 2002;

$aniversario->apresentar();

$casamento = new Data();

$casamento->dia = 28;
$casamento->mes = 1;
$casamento->ano = 2184;

$casamento->apresentar();
