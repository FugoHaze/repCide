<?php 
//PDO= PHP data objects
//dsn= data source name
$dsn='mysql:host=localhost;dbname=fichasena';
$user='root';
$psw='';
$conexion='a';
try{
$conexion=new PDO($dsn,$user,$psw);
$statement=$conexion->prepare("select * from aprendiz ORDER BY nombre");
$statement->execute();
}
catch(PDOException $e){
echo $e->getMessage();
}
foreach ($statement as $key ) {
    echo '<br>Nombre: '.$key[4].' - ';
    echo 'Documento: '.$key[2].' - ';
    echo 'Correo: '.$key[5].' - ';
    echo 'Teléfono: '.$key[6].'<br>';
}
echo '<br>----------------------ORDEN-------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch()) {
    echo "Nombre: $key[4]<br>";
}

echo '<br>-----------------------------------------------------<br>';
$statement->execute();
$resultados=$statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) {
    echo "Documento: $key[2]<br>";
}
echo '<br>-----------------------NUM------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo "Documento: $key[2]<br>";
}
echo '<br>----------------------ASOCIATIVO------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo "Nombre: $key[Nombre] <br>";
}
echo '<br>----------------------OBJETOS------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo "<br>Documento: $key->NumeroID<br>";
    echo "Nombre: $key->Nombre<br>";
}

$statement=$conexion->prepare("insert into aprendiz values ('Simon Bolivar','556655','adsi','M')");
//$statement->execute();
// foreach ($statement as $key ) {
//     echo 'Nombre: '.$key[0].' - ';
//     echo 'Documento: '.$key[1].' - ';
//     echo 'Formacion: '.$key[2].' - ';
//     echo 'Genero: '.$key[3].'<br>';
// }

//var_dump($statement);
//print_r($statement);
?>