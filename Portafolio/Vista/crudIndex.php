<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/estilos/crud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Registro</title>
</head>
<body>
    <h2>Formulario</h2>
    <div>
        <form action="../Controlador/controladorFunciones.php" method="POST">
            <p>Cédula:<input class="inp" type="text" name="cedula" id="cedula" placeholder="Cédula"> <br> </p>
            <p>Nombres:<input class="inp" type="text" name="name" id="name" placeholder="Nombres"> <br> </p>
            <p>Apellido 1:<input class="inp" type="text" name="apellido1" id="apellido1" placeholder="Apellido 1"> <br> </p>
            <p>Apellido 2:<input class="inp" type="text" name="apellido2" id="apellido2" placeholder="Apellido 2"> <br> </p>
            <p>Correo:<input class="inp" type="email" name="correo" id="correo" placeholder="Correo"> <br> </p>
            <p>Contraseña:<input class="inp" type="password" name="contra" id="contra" placeholder="Contraseña"> <br> </p>

            <br>
            <input type="submit" value="Registrar" name="reg">
            <input type="submit" value="Actualizar" name="act">
        </form>
    </div>

    <a href="../Vista/adminIndex.php">Administrador</a>
</body>
</html>