<?php

class Biblioteca{
    protected $nombreB;

    function __construct($nombreB){
        $this->nombreB=$nombreB;
    }
    function setter($atri,$val){
        $this->$atri=$val;
    }
    function getter($atri){
        return $this->$atri;
    }
    function mostrarTodo(){
        return "El nombre de la biblioteca es: $this->nombreB. <br>";
    }
}

$biblio1=new Biblioteca("Rosalia");



?>