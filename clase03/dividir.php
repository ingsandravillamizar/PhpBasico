
<?php

function dividir($numero1, $numero2 = 2) {

    if ($numero2 == 0) {
        echo "No se puede dividir por cero.";
    } else {
        $resultado = $numero1 /  $numero2;
        echo "La división entre $numero1 y $numero2 es: $resultado";
    }

    
    
}
echo "<br>";
echo "Esta función no retorna, imprime desde la función <br>";
echo "<br>";
$numero1 = 20;
$numero2 = 4;
echo "División enviando dos parametros <br>";
dividir($numero1, $numero2);

echo "<br>";
echo "<br>";
echo "División enviando Un solo  parametro <br>";
$resultado = dividir($numero1);

echo "<br>";
echo "<br>";
echo "División entre cero <br>";
$resultado = dividir($numero1,0);

 