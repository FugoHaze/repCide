<?php

include "index.html";

class registro{
    public $nombre;
    public $id;
    public $correo;

    function __construct($nombre,$id,$correo){
        $this->nombre=$nombre;
        $this->id=$id;
        $this->correo=$correo;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre($nombre){
        return $this->nombre;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getId($id){
        return $this->id;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
    }
    public function getCorreo($correo){
        return $this->correo;
    }
    public function agregarPersona(){
        $registro= new registro($this->nombre,$this->id,$this->correo);
        echo $registro;
    }
}

agregarPersona();


?>