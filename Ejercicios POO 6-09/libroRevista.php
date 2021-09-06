<?php
include "materiales.php";
class Libro extends Materiales{
    protected $editorial;
    function __construct($editorial,$autor,$titulo,$year,$tipoMaterial){
        parent::__construct($autor,$titulo,$year,$tipoMaterial);
        $this->editorial=$editorial;
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
                Editorial: $this->editorial. <br>
                Biblioteca: $this->nombreB. <br>";
    }
}
class Revista extends Materiales{
    function __construct($autor,$titulo,$year,$tipoMaterial){
        parent::__construct($autor,$titulo,$year,$tipoMaterial);
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
$obj=new Libro("Norma","Francisco","Cuentos",2012,"Libro","Panamericana");

//echo $obj->getter("editorial");
//echo $obj->mostrarTodo();

$obj2=new Revista("Carlos","Glitch",2021,"Revista","Biblioteca Soacha");

//echo $obj2->mostrarTodo();


//echo $biblio1->mostrarTodo();
?>