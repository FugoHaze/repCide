<?php
include "biblioteca.php";

class Materiales{
    protected $autor;
    protected $titulo;
    protected $year;
    protected $tipoMaterial;

    function __construct($autor,$titulo,$year,$tipoMaterial){
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->year=$year;
        $this->tipoMaterial=$tipoMaterial;
    }
    function setter($atri,$val){
        $this->$atri=$val;
    }
    function getter($atri){
        return $this->$atri;
    }
    function mostrarTodo(){
        return "<br>Tipo: $this->tipoMaterial. <br>
                Titulo: $this->titulo. <br>
                Autor: $this->autor. <br>
                Año: $this->year. <br>
                Biblioteca: $this->nombreB. <br>";
    }

}

?>