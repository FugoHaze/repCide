<?php
include "../Controlador/funciones.php";
include "../Modelo/Persona.php";

if (isset($_POST['reg'])) {
    $dao=new Registrar();
    
    $cedula=$_POST['cedula'];
    $nombre=$_POST['name'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $correo=$_POST['correo'];
    $contra=$_POST['contra'];

    $e=new Persona($cedula,$nombre,$apellido1,$apellido2,$correo,$contra);

    $dao->Registrar($e);

    echo "REGISTRO INSERTADO";
    header("Location: ../Vista/adminIndex.php");
    die();
}else if (isset($_POST['act'])) {
    $dao=new Actualizar();

    $cedula=$_POST['cedula'];
    $nombre=$_POST['name'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $correo=$_POST['correo'];
    $contra=$_POST['contra'];

    $e=new Persona($cedula,$nombre,$apellido1,$apellido2,$correo,$contra);

    $dao->Actualizar($e);

    echo "REGISTRO ACTUALIZADO";
    header("Location: ../Vista/adminIndex.php");
    die();
}else if (isset($_POST['eli'])) {
    $dao=new Eliminar();

    $cedula=$_POST['cedula'];

    $e=new Persona($cedula,null,null,null,null,null);

    $dao->Eliminar($e);

    echo "REGISTRO ELIMINADO";
    header("Location: ../Vista/adminIndex.php");
    die();
}

?>