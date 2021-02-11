<?php
class Pessoa {
    //Atributos
    public $nome;
    public $idade;

    function __construct($novo_nome, $idade) {
        $this->nome = $novo_nome;
        $this->idade = $idade;
        echo "Pessoa Criada! <br>";
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!';
    }

    public function apresentar() {
        //Uso de Return é melhor
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuário Criado! <br>";
    }

    function __destruct() {
        echo 'Usuário diz: Tchau!';
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }

}

$usuario = new Usuario('Walter Júnior', 19, 'walter.chuno');
$usuario->apresentar();
