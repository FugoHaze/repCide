<?php

$dsn="mysql:host=localhost;dbname=colegio";
$user="root";
$passw="";

// $con=new PDO($dsn,$user,$passw);

try {
    $con=new PDO($dsn,$user,$passw);
    $stm=$con->prepare('SELECT * from estudiantes');
    $stm->execute();
} catch (PDOException $th) {
    echo $th->getMessage();
}

foreach ($stm as $key) {
    echo "<br>ID: $key[0] <br>";
    echo "Nombre: $key[1] <br>";
    echo "Apellido: $key[2] <br>";
}

echo "<br>->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->->-><br>";

$stm->execute();

while ($key = $stm->fetch()) {
    echo "<br>Name: $key[1] <br>";
    echo "Apellido: $key[2] <br>";
}

echo "<br>->->->->->->->->->->->->->->ORDENADO->->->->->->->->->->->->->->->->->->->-><br>";

$stm=$con->prepare('SELECT * from estudiantes ORDER BY Nom_Estu');
$stm->execute();
while ($key = $stm->fetch()) {
    echo "<br>Name: $key[1] <br>";
    echo "Apellido: $key[2] <br>";
}
?>