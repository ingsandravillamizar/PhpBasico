
<?php

/** 
* Ejercicio : crear la tabla del 1 con los 3 curl_multi_close
*/
echo "Tabla del Uno con ciclo for: <br>";
for ($i = 1; $i<=10; $i++){
    $resultado = 1 * $i;
    echo "1* $i = $resultado <br>";
}


echo "Tabla del Uno con ciclo while: <br>";
$number = 1;
while($number <= 10){   
    echo "1* $number = 1* $number <br>";

    $number++;
}

echo "Tabla del Uno con ciclo DO : <br>";
$number = 1;
do{
    echo "1* $number = 1* $number <br>";
    $number++;
}while($number <= 10);
