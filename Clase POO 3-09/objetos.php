<?php
include "persona.php";
class Aprendiz extends Persona{
    private $nombre;
    private $documento;
    private $ficha;

    function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
        parent::__construct();
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->ficha=$ficha;
    }

    function setter($atri,$valor){
        $this->$atri=$valor;
    }
    function getter($atri){
        return $this->$atri;
    }
    /*
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setDocumento($documento){
        $this->documento=$documento;
    }
    function setFicha($ficha){
        $this->ficha=$ficha;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getDocumento(){
        return $this->documento;
    }
    function getFicha(){
        return $this->ficha;
    }
    */

}

$ob=new Aprendiz("Pedro",159487236,2142329);

echo $ob->getter("nombre").'<br>';
echo $ob->getter("documento").'<br>';
echo $ob->getter("ficha").'<br>';

$ob->setter("nombre","Maria").'<br>';
$ob->setter("documento",123456789).'<br>';
$ob->setter("ficha",2142328).'<br>';

echo $ob->getter("nombre").'<br>';
echo $ob->getter("documento").'<br>';
echo $ob->getter("ficha").'<br>';

/*$ob->setNombre("Carlos");
$ob->setDocumento(123456789);
$ob->setFicha(2142329);*/


?>