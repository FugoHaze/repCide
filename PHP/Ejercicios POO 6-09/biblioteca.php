<?php
include "libroRevista.php"; //Con este include se hace referencia a los libros y revistas que se creen 
class Biblioteca{ //Creación de la clase principal Biblioteca 
    protected $nombreB;
    protected $mats;

    function __construct($nombreB){ //Constructor que llama a la función automáticamente
        $this->nombreB=$nombreB;
        $this->mats=array();
    }
    function setter($atri,$val){ //Función para cambiar los valores de los atributos de un objeto
        $this->$atri=$val;
    }
    function getter($atri){ //Función que muestra el valor de un atributo de un objeto
        return $this->$atri;
    }
    function mostrarNBiblio(){
        return "Nombre de Biblioteca: $this->nombreB. <br>";
    }
    function addMats($material){ //Función para agregar a un array los libros y revistas
        array_push($this->mats,$material);
    }

    function verMats(){ //Función para mostrar los datos del array 
        for ($i=0; $i <count($this->mats) ; $i++) { 
            echo $this->mats[$i]->mostrarTodo();
        }
    }
}

$biblio1=new Biblioteca("Biblioteca Municipal de Soacha");
echo $biblio1->mostrarNBiblio();

$biblio1->addMats($libro1);
$biblio1->addMats($libro2);
$biblio1->addMats($libro3);
$biblio1->addMats($revista1);
$biblio1->addMats($revista2);

$biblio1->verMats();


?>