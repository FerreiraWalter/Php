<?php
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}


class Cachorro implements Animal,Canino {
    function respirar() {
        return "Irei usar oxigênio! <br>";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar() {
        return "Irei usar Leite!";
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir() . "<br>";
echo $animal1->mamar();
