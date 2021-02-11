<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico} <br>";
        echo "Class A) Protegido = {$this->protegido} <br>";
        echo "Class A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHeranca() {
        echo "Só vai por Herança";
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        //echo "Class B) Privado = {$this->privado} <br>";

        parent::vaiPorHeranca();
    }
}

$b = new B();
$b->mostrarB();
