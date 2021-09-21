<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUD</title>
</head>
<body>
    <h2>Administrador</h2>
    <h3>Aquí se mostrarán los datos que tenga almacenados en una base de datos, ademas de poder eliminarlos</h3>
    <a href="../Vista/crudIndex.php">Registro</a>

    <form action="../Controlador/controladorFunciones.php" method="POST">
        <p>Cédula:<input class="inp" type="text" name="cedula" id="cedula" placeholder="Cédula"> <br> </p>
        <input type="submit" value="Eliminar" name="eli">
    </form>
    <table>
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
    ?></table>
    
</body>
</html>