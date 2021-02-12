<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo "Construtor Invocado";

        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        return "E morreu";
    }

    public function __toString() {
        return "<br>" . "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo um Atributo não declarado: {$atrib} <br>";
    }
}

$pessoa = new Pessoa('Walter', 19);
$pessoa->apresentar();
echo $pessoa; //Imprime por causa do toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

echo $pessoa->nomeCompleto;

