<?php

/* Defineix el mètode getInstance () que no tingui arguments. 

Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada 
i tornar aquesta única instància cada vegada que es crida.

Imprimeix en pantalla múltiples vegades el rugit de Tigger.

Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits. */

class Tigger {

    private static $instance = null;
    public static $roarCount = 0;

    private function __construct() {

        echo "Building character..." . "<br>". "<br>";

    }

    public static function getInstance() {
        
        if (self::$instance === null) {

            self::$instance = new self();

        }

        return self::$instance;

    }

    public function roar() {
        
        echo "Grrr!" . "<br>";
        self::$roarCount ++;
        
    }

    public function getCounter () {

        echo "Total times tigger roared: " .Tigger::$roarCount. "<br>";

    }

}

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

$tigger->getCounter();

?>