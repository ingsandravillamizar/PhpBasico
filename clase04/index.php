<?php

/**
 *  Mas funciones de String
 */

$word = "Hola Mundo desde PHP8";
echo strlen($word);  //cuenta los caracteres de un string  (21)
echo "<br>";
echo strrpos($word, '8');  //me devuelve el indice ubicacion donde esta el 8  (20)  recordar que inicia desde cero
echo "<br>";
echo str_contains($word, 'Mundial'); //busca el sgtring en la cadena y retorna un booleano(true/false)1/0    1:la encontro  0: no la encontro



//COMPARA CADENAS DE TEXTO
$cadena1 = "Prueba";
$cadena2 = "prueba";

if(strcmp($cadena1, $cadena2) === 0){  //identifica mayusculas de minusculas
    echo "Cadena iguales";
}else{
    echo "no iguales";
}

echo "<br>";
if(strcasecmp($cadena1, $cadena2) === 0){ //no identifica mayusculas de minusculas
    echo "Cadena iguales";
}else{
    echo "no iguales";
}



//VARIABLES SUPERGLOBALES:  Estan disponibles 
//Ambos envian informacion,  la diferencia esta en la forma como lo hacen 
//  $_GET    : se observan en la url
//  $_POST   : quedan ocultos