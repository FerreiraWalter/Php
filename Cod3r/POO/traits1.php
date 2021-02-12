<?php
//Não tem acesso direto a um Trait, tem q ser chamado pela classe
trait validacao {
    public $a = 'Valor A';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validarMelhor {
    public $b = 'Valor B';

    //Precisa de uma função Publicaa
    private $c = 'Valor C (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}


class Usuario {
    use validacao, validarMelhor;

    public function imprimirValorC() {
        echo "<br>" . $this->c;
    }
}


$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validarStringMelhor(' '));

echo "<br>" . $usuario->a . "<br>" . $usuario->b;
echo $usuario->imprimirValorC();