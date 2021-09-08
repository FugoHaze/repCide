<?php
include ("materiales.php");//Con este include se hace referencia a la clase Materiales  
class Libro extends Materiales{ //Clase Libro que es una herencia de la clase Materiales
    protected $editorial;
    function __construct($editorial,$autor,$titulo,$year,$tipoMaterial){//Constructor que llama a la función automáticamente
        parent::__construct($autor,$titulo,$year,$tipoMaterial); //Toma los atributos de clase Materiales
        $this->editorial=$editorial;
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
                Editorial: $this->editorial. <br>
                ";
    }
}
class Revista extends Materiales{ //Clase Revista que es una herencia de la clase Materiales
    function __construct($autor,$titulo,$year,$tipoMaterial){ //Constructor que llama a la función automáticamente
        parent::__construct($autor,$titulo,$year,$tipoMaterial); //Toma los atributos de clase Materiales
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
                ";
    }
}
$libro1=new Libro("Norma","Francisco Hiddleston","Cuentos Fantásticos",2012,"Libro");
$libro2=new Libro("El Búho","Andrés Forero","Detras del Último no hay nadie",2020,"Libro");
$libro3=new Libro("Editorial Seix Barral","Mario Mendoza","Satanás",2002,"Libro");

//echo $obj->getter("editorial");
//echo $obj->mostrarTodo();

$revista1=new Revista("Carlos","Glitch",2021,"Revista");
$revista2=new Revista("Miranda","Semana",2021,"Revista");

//echo $obj2->mostrarTodo();


//echo $biblio1->mostrarTodo();
?>