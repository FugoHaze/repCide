<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Registro</title>
</head>
<body>
    <h2>Formulario</h2>
    <div>
        <form action="../Controlador/controladorFunciones.php" method="POST">
            <p><input class="inp" type="text" name="cedula" id="cedula" placeholder="Cédula" required> <br> </p>
            <p><input class="inp" type="text" name="name" id="name" placeholder="Nombres" required> <br> </p>
            <p><input class="inp" type="text" name="apellido1" id="apellido1" placeholder="Apellido 1" required> <br> </p>
            <p><input class="inp" type="text" name="apellido2" id="apellido2" placeholder="Apellido 2" required> <br> </p>
            <p><input class="inp" type="email" name="correo" id="correo" placeholder="Correo" required> <br> </p>
            <p><input class="inp" type="password" name="contra" id="contra" placeholder="Contraseña" required> <br> </p>

            <br>
            <input class="inp" type="submit" value="Registrar" name="reg">
            <input class="inp" type="submit" value="Actualizar" name="act">
        </form>
    </div>

    <center><a class="btn" href="../Vista/adminIndex.php">Administrador</a></center><br>
    <center><a class="btn" href="../Vista/index.html">Inicio</a></center>
    <img class="gif" src="https://i.pinimg.com/originals/2b/20/bb/2b20bbb6f6f384d6a1e970d988b60047.gif" alt="">
</body>
</html>