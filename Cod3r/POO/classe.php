<?php
class Cliente {
    //Atributos
    public $nome = 'Anônimo';
    public $idade = '18';

    public function apresentar() {
        echo "Nome: {$this->nome}, Idade: {$this->idade} <br/>";
    }
}

$c1 = new Cliente();
//Não precisa usar $
$c1->nome = 'Walter';
$c1->idade = 19;


$c2 = new Cliente();
$c2->nome = 'Igor';
$c2->idade = 20;

$c1->apresentar();
$c2->apresentar();
