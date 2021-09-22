<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Operaciones</title>
</head>
<body>
    <?php
    
    $funcion = $_REQUEST['funcion'];
    
    function averiguarMayor(){
        $valor=$_REQUEST["valor"];
        $nums1=array();

        for ($i=0; $i<$valor ; $i++) { 
            $nums1[$i]=rand(0,200);
            echo $nums1[$i].'. ';
        }
        echo "<br>El número mayor es: ".max($nums1);
    }
    function averiguarMenor(){
        $valor=$_REQUEST["valor"];
        $nums2=array();

        for ($i=0; $i<$valor ; $i++) { 
            $nums2[$i]=rand(0,200);
            echo $nums2[$i].'. ';
        }

        echo "<br>El número menor es: ".min($nums2);
    }
    function promedio(){
        $valor=$_REQUEST["valor"];
        $suma=0;
        $nums3=array();

        for ($i=0; $i<$valor ; $i++) { 
            $nums3[$i]=rand(0,200);
            echo $nums3[$i].'. ';
            $suma+=$nums3[$i];
        }
        $cou=count($nums3);

        $promedio=$suma/$cou;

        echo "<br>El promedio de los números es: ".$promedio. '<br>';
    }
    function mediana(){
        $nums4=array();
        $valor=$_REQUEST["valor"];

        for ($i=0; $i<$valor ; $i++) { 
            $nums4[$i]=rand(0,200);
            echo $nums4[$i].'. ';
        }
        //$orden=array_slice($nums4,1);
        //echo "Orden de menor a mayor(se supone)".$orden;
        sort($nums4, SORT_NUMERIC);
        $q=count($nums4);

        if ($q%2==0) {
            echo "<br>Esta es la mediana de un array par: ".array_sum(array_slice($nums4, ($q/2)-1, 2))/2;
        }else{
            echo "<br>Esta es la mediana de un array impar: ".array_slice($nums4, $q/2, 1)[0];
        }
        

    }
    if ($funcion=='ma') {
        echo averiguarMayor().'<br>';
    }else if ($funcion=='me') {
        echo averiguarMenor().'<br>';
    }else if ($funcion=='prom') {
        echo promedio();
    }else {
        echo mediana();
    }
    
    
    
    

    ?>
</body>
</html>