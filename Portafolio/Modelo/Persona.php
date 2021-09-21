<?php
class Persona{
    private $cedula;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $correo;
    private $contra;

    function __construct($cedula,$nombre,$apellido1,$apellido2,$correo,$contra){
        $this->cedula=$cedula;
        $this->nombre=$nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->correo=$correo;
        $this->contra=$contra;
    }

    //Get y set de Cedula
    function getCedula(){
        return $this->cedula;
    }
    function setCedula($cedula){
        $this->cedula=$cedula;
    }
    //Get y set de Nombre
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    //Get y set de Apellido1
    function getApellido1(){
        return $this->apellido1;
    }
    function setApellido1($apellido1){
        $this->apellido1=$apellido1;
    }
    //Get y set de Apellido2
    function getApellido2(){
        return $this->apellido2;
    }
    function setApellido2($apellido2){
        $this->apellido2=$apellido2;
    }
    //Get y set de Correo
    function getCorreo(){
        return $this->correo;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    //Get y set de Contra
    function getContra(){
        return $this->contra;
    }
    function setContra($contra){
        $this->contra=$contra;
    }
}

?>