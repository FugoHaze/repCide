<?php
include "libroRevista.php";
class Biblioteca{
    protected $nombreB;
    protected $mats;

    function __construct($nombreB){
        $this->nombreB=$nombreB;
        $this->mats=array();
    }
    function setter($atri,$val){
        $this->$atri=$val;
    }
    function getter($atri){
        return $this->$atri;
    }
    function mostrarNBiblio(){
        return "El nombre de la biblioteca es: $this->nombreB. <br>";
    }
    function addMats($material){
        array_push($this->mats,$material);
    }

    function verMats(){
        for ($i=0; $i <count($this->mats) ; $i++) { 
            echo $this->mats[$i]->mostrarTodo();
        }
    }
}

$biblio1=new Biblioteca("Soacha Libros");
$biblio1->addMats($obj,$obj2);

//$biblio1->verMats();


?>