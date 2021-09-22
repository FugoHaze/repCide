<?php
class Persona{
    private $ciudad;
    private $tel;

    function __construct($ciudad,$tel){
        $this->ciudad=$ciudad;
        $this->tel=$tel;
    }
    function datos(){
        echo "La ciudad donde vive es: $this->ciudad y su teléfono es: $this->tel";
    }
}

$per=new Persona("Bogotá",321456789);

echo $per->datos();

?>