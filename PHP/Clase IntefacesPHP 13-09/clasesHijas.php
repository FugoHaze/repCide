<title>Clases Hijas Animales</title>
<?php
include "animal.php";
class Ave extends Animal implements Locomocion{
    protected $tipoPico;
    protected $tipoPata;

    function __construct($nombre, $clase, $tipoPico, $tipoPata){
        parent::__construct($nombre,$clase);
        $this->tipoPico=$tipoPico;
        $this->tipoPata=$tipoPata;
    }
    function mov(){
        echo "$this->nombre vuela y se mueve por la pata $this->tipoPata <br>";
    }
    function sound($sound){
        echo "$this->nombre hace el sonido de: $sound <br>";
    }
}
class Pez extends Animal implements Locomocion{
    protected $familia;
    protected $habitat;

    function __construct($nombre, $clase, $familia, $habitat){
        parent::__construct($nombre, $clase);
        $this->familia=$familia;
        $this->habitat=$habitat;
    }
    function mov(){
        echo "Nadar es un movimiento de la familia de: $this->familia <br>";
    }
    function sound($sound){
        echo "Los peces no hacen sonidos realmente <br> ";
    }
}


$tiburon= new Pez("Tuburón Blanco","Pez","Cartigilonosos","Océano");
$paloma= new Ave("Paloma","Ave","Delgadas","Anosidactilas");

$tiburon->mov();
$paloma->mov();

$tiburon->sound("Grarrr");
$paloma->sound("Gorjeo")
?>