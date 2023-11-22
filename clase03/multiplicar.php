
<?php

function multiplicar($numero1, $numero2 = 30) {
    $resultado = $numero1 * $numero2;
    $mensaje = "El producto de $numero1 y $numero2 es: $resultado";
    return $mensaje;
}

echo "<br>";
echo "<br>";

$numero1 = 4;
$numero2 = 5;
$resultado = multiplicar($numero1, $numero2);
echo "Multiplicación enviando dos parametros <br>";
echo "$resultado <br>";


echo "<br>";
echo "<br>";

$resultado = multiplicar($numero1);
echo "Multiplicación enviando Un solo  parametro <br>";
echo "$resultado <br>";
