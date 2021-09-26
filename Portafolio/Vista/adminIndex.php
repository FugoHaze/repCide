<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/admin.css">
    <!-- <link rel="shortcut icon" href="./Images/mob.jpg"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>RUD</title>
</head>
<body>
    <h2>Administrador</h2>
    <h3>Aquí se mostrarán los datos que tenga almacenados en una base de datos, ademas de poder eliminarlos</h3>
    <center><a role="button" class="btn" href="../Vista/crudIndex.php">Formulario de Registro</a></center>

    <form action="../Controlador/controladorFunciones.php" method="POST">
        <p><input class="inp" type="text" name="cedula" id="cedula" placeholder="Ingresar Cédula" required> <br> </p>
        <center><input type="submit" value="Eliminar" name="eli"></center>
    </form>
    <br>
    <center><table>
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido2</th>
            <th>Correo</th>
            <!-- <th>Contraseña</th> -->
        </tr>
    <?php
        include "../Controlador/controladorFunciones.php";

        $dao=new Mostrar();

        echo $dao->Mostrar();
    ?></table></center>
    
</body>
</html>