<?php
function sumaDivisores($num){
    $sum=0;
    if (is_numeric($num)) {
        for ($i=0; $i < $num; $i++) { 
            if ($num%$i==0) {
                $sum+=$i;
            }
        }
    
    return $sum;
    }else{
        throw new Exception("El dato ingresado debe ser un numero");
        //return 0;
    }
}

// echo sumaDivisores("?");
try {
    //code...
    echo sumaDivisores(5);
} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage();
} catch(DivisionByZeroError $f){
    echo $f->getMessage();
}

?>