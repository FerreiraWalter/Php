<?php
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

Class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }

}

$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new Feijao();
$c2->peso = 0.1;

$p = new Pessoa(58.45);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;
