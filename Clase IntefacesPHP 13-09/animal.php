<title>Clase Madre Animal</title>
<?php

class Animal{
    protected $nombre;
    protected $clase;

    function __construct($nombre,$clase){
        $this->nombre=$nombre;
        $this->clase=$clase;
    }

    function setter($atri,$valor){
        $this->atri=$valor;
    }
    function getter($atri){
        return "$this->atri <br>";
    }
}

interface Locomocion{
    public function mov();
    public function sound($sound);
}


?>