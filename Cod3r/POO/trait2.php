<?php
trait validacao {
    public function validacaoString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validacaoString($str) {
        return isset($str) && trim($str);
    }
}


class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validacaoString insteadOf validacao;
        //ou
        validacao::validacaoString as validacaoSimples;
    }
}

$usuario = new Usuario();

var_dump($usuario->validacaoString(' '));
var_dump($usuario->validacaoSimples(' '));
