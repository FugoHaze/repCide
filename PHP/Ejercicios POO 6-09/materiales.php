<?php
//include "biblioteca.php";

class Materiales{ //Creación de la clase Materiales
    protected $autor;
    protected $titulo;
    protected $year;
    protected $tipoMaterial;

    function __construct($autor,$titulo,$year,$tipoMaterial){ //Constructor que llama a la función automáticamente
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->year=$year;
        $this->tipoMaterial=$tipoMaterial;
    }
    function setter($atri,$val){ //Función para cambiar los valores de los atributos de un objeto
        $this->$atri=$val;
    }
    function getter($atri){ //Función que muestra el valor de un atributo de un objeto
        return $this->$atri;
    }
    function mostrarTodo(){ //Función para mostrar todos los datos de forma ordenada
        return "<br>Tipo: $this->tipoMaterial. <br>
                Titulo: $this->titulo. <br>
                Autor: $this->autor. <br>
                Año: $this->year. <br>
                Biblioteca: $this->nombreB. <br>";
    }

}

?>