<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novo_nome, $idade=18) {
        echo 'Construtor Invocado! <br>';
        $this->nome = $novo_nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu! <br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br />";
    }
}

$pessoa = new Pessoa('Walter', 19);
$pessoa->apresentar();

//Chama o Destrutor
unset($pessoa); //ou
$pessoa = null;
