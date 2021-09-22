<title>Clase Robot</title>
<?php
include "animal.php";

class Robot implements Locomocion{
    protected $tipo;
    function __construct($tipo){
        $this->tipo=$tipo;
    }
    function mov(){
        echo "Los Robots de tipo $this->tipo tienen su movimiento limitado. <br>";
    }
    function sound($sound){
        echo "Los Robots $this->tipo pueden hacer diferentes sonidos como '$sound'.<br> ";
    }
}
$limpieza=new Robot("Limpieza");

$limpieza->mov();
$limpieza->sound("Limpiando...bip bip")
?>